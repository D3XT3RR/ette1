<?php
  require 'connect.php';
  function random_str2($length, $keyspace = '0123456789abcde')
{
    $pieces = array();
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[rand(0, $max)];
    }
    return implode('', $pieces);
}
  $session_user_id = $_SESSION['user']; 
  if(isset($_POST['oldpasswd']) && isset($_POST['newpasswd']) && isset($_POST['newpasswd2'])){
    $oldpasswd = $_POST['oldpasswd'];
    $newpasswd = $_POST['newpasswd'];
    $newpasswd2 = $_POST['newpasswd2'];   
    $raw_results = mysqli_query($link, "SELECT * FROM login WHERE ID = '$session_user_id'") or die(mysqli_error($link));
    

    if(mysqli_num_rows($raw_results) > 0)      
    {
      while($row = mysqli_fetch_assoc($raw_results))
      {
        if(substr($row['Password'],32) == SHA1($oldpasswd) && $newpasswd == $newpasswd2){
          $newpasswd_updated = random_str2(32).SHA1($newpasswd);
          mysqli_query($link, "UPDATE login SET password = '$newpasswd_updated' WHERE ID = '$session_user_id'");
          echo("<script type='text/javascript'>alert('Hasło zostało zaktualizowane');</script>");
        }
        }
      }
    }
  $data_changed = False;
    if(isset($_POST['name'])){
      $name_to_set = $_POST['name'];
      mysqli_query($link, "UPDATE login SET Contact_Name = '$name_to_set' WHERE ID = '$session_user_id'") or die(mysqli_error($link));
      $data_changed = True;
    }
    if(isset($_POST['number'])){
      $number_to_set = $_POST['number'];
      mysqli_query($link, "UPDATE login SET Contact_Phone_Number = '$number_to_set' WHERE ID = '$session_user_id'") or die(mysqli_error($link));
      $data_changed = True;
    }
    if(isset($_POST['email'])){
      $email_to_set = $_POST['email'];
      mysqli_query($link, "UPDATE login SET Contact_Email = '$email_to_set' WHERE ID = '$session_user_id'") or die(mysqli_error($link));
      $data_changed = True;
    }
    if($data_changed){
       echo("<script type='text/javascript'>alert('Dane kontaktowe zostały zaktualizowane');</script>");
    }
  //set current data to fields
  $raw_login_result = mysqli_query($link, "SELECT * FROM login WHERE ID = '$session_user_id'") or die(mysqli_error($link));
  if(mysqli_num_rows($raw_login_result) > 0)      
  {
    while($row = mysqli_fetch_assoc($raw_login_result))
    {
      $currentName = $row['Contact_Name'];
      $currentNumber = $row['Contact_Phone_Number'];
      $currentEmail = $row['Contact_Email'];
      echo("<script type='text/javascript'>document.getElementById('nameInput').value = '$currentName';document.getElementById('numberInput').value = '$currentNumber';document.getElementById('emailInput').value = '$currentEmail';</script>");
    }
  }
  
?>