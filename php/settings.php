<?php
  require_once 'connect.php';
  require_once 'secure_query.php';
  function random_str2($length, $keyspace = '0123456789abcde')
{
    $pieces = array();
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[rand(0, $max)];
    }
    return implode('', $pieces);
}
  if(!isset($_SESSION['user'])){
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
    die();
  }
  $session_user_id = $_SESSION['user']; 
  if(isset($_POST['oldpasswd']) && isset($_POST['newpasswd']) && isset($_POST['newpasswd2'])){
    $oldpasswd = $_POST['oldpasswd'];
    $newpasswd = $_POST['newpasswd'];
    $newpasswd2 = $_POST['newpasswd2'];   
    $raw_results = secure_query($link, "SELECT * FROM login WHERE ID = ?", $t = array('i'), $a = array(&$session_user_id));
    

    if(mysqli_num_rows($raw_results) > 0)      
    {
      while($row = mysqli_fetch_assoc($raw_results))
      {
        if(substr($row['Password'],32) == SHA1($oldpasswd) && $newpasswd == $newpasswd2){
          $newpasswd_updated = random_str2(32).SHA1($newpasswd);
          secure_query($link, "UPDATE login SET password = ? WHERE ID = ?", $t = array('si'), $a = array(&$newpasswd_updated, &$session_user_id));
          echo("<script type='text/javascript'>alert('Hasło zostało zaktualizowane');</script>");
        }
        }
      }
    }
  $data_changed = False;
    if(isset($_POST['name'])){
      $name_to_set = $_POST['name'];
      //old version: mysqli_query($link, "UPDATE login SET Contact_Name = '$name_to_set' WHERE ID = '$session_user_id'") or die(mysqli_error($link));
      secure_query($link, "UPDATE login SET Contact_Name = ? WHERE ID = ?", $t = array('si'), $a = array(&$name_to_set, &$session_user_id));
      $data_changed = True;
    }
    if(isset($_POST['number'])){
      $number_to_set = $_POST['number'];
      //old version: mysqli_query($link, "UPDATE login SET Contact_Phone_Number = '$number_to_set' WHERE ID = '$session_user_id'") or die(mysqli_error($link));
      secure_query($link, "UPDATE login SET Contact_Phone_Number = ? WHERE ID = ?", $t = array('ii'), $a = array(&$number_to_set, &$session_user_id));
      $data_changed = True;
    }
    if(isset($_POST['email'])){
      $email_to_set = $_POST['email'];
      //old version: mysqli_query($link, "UPDATE login SET Contact_Email = '$email_to_set' WHERE ID = '$session_user_id'") or die(mysqli_error($link));
      secure_query($link, "UPDATE login SET Contact_Email = ? WHERE ID = ?", $t = array('si'), $a = array(&$email_to_set, &$session_user_id));
      $data_changed = True;
    }
    if($data_changed){
       echo("<script type='text/javascript'>alert('Dane kontaktowe zostały zaktualizowane');</script>");
    }
  //set current data to fields
  //old version: mysqli_query($link, "SELECT * FROM login WHERE ID = '$session_user_id'") or die(mysqli_error($link))
  $raw_login_result = secure_query($link, "SELECT * FROM login WHERE ID = ?", $t = array("i"), $a = array(&$session_user_id));
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