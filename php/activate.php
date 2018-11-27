<?php
    session_start();
    require_once 'connect.php';
    require_once 'secure_query.php';
    $ad_id = $_GET['id'];
    $action = $_GET['action'];
    if(isset($_SESSION['user'])){
      //old version: $raw_results = mysqli_query($link,"SELECT * FROM adverts WHERE id = '$ad_id'") or die(mysqli_error($link));
      $raw_results = secure_query($link,"SELECT * FROM adverts WHERE id = ?", $t = array('i'), $a = array(&$ad_id));
      if(mysqli_num_rows($raw_results) > 0)      
        {
          while($row = mysqli_fetch_assoc($raw_results))
          {
            if($_SESSION['user'] != $row['poster_id']){
              die();
            }
            //old version: $update_result = mysqli_query($link,"UPDATE adverts SET visibility='$action' WHERE id='$ad_id'") or die(mysqli_error($link));
            $update_result = secure_query($link,"UPDATE adverts SET visibility=? WHERE id=?", $t = array('si'), $a = array(&$action, &$ad_id));
            echo("<script>window.location.href = '../userAnnouns.php'</script>");
          }
        }
    }

?>