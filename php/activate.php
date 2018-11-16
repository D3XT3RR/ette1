<?php
    session_start();
    require 'connect.php';
    $ad_id = $_GET['id'];
    $action = $_GET['action'];
    if(isset($_SESSION['user'])){
      $raw_results = mysqli_query($link,"SELECT * FROM adverts WHERE id = '$ad_id'") or die(mysqli_error($link));
      if(mysqli_num_rows($raw_results) > 0)      
        {
          while($row = mysqli_fetch_assoc($raw_results))
          {
            if($_SESSION['user'] != $row['poster_id']){
              die();
            }
            $update_result = mysqli_query($link,"UPDATE adverts SET visibility='$action' WHERE id='$ad_id'") or die(mysqli_error($link));
            echo("<script>window.location.href = '../userAnnouns.php'</script>");
          }
        }
    }

?>