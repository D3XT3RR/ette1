<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ETTE</title>

	  <!-- FlexBox -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <link rel="stylesheet" href="style/w3.css">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/passwdReset.css">
  <link rel="stylesheet" type="text/css" href="style/mobile/styleMobile.css">
  
</head>

<body>
	<header>
    <div class="header"> 
      <div class="auto"> 
        <div class="menu">
          <a href="/" class="logo">
            <div class="blue">E</div>
            <div class="red">TT</div>
            <div class="blue">E</div>
          </a>
        </div>
      </div>
    <div id="search" class="auto">
      
    </div>
  </header>

  <section>
    <div class=" container auto">
      <div id="passwdReset">
        <div id="reshead"> Ustawianie nowego hasła</div>
        <div id="reset">
        <form method="post" target="">
          <input type="password" name="passwd1" placeholder="Hasło">
          <input type="password" name="passwd2" placeholder="Powtórz hasło">
          <input type="submit" value="RESETUJ">
        </form>
        <div id="informacja"></div>
      </div>
    </div>
  </section>

  <?php
include "php/footer.php";
include "php/modal.php";
?>





<!-- PHP -->
<?php
require 'php/connect.php';
require 'php/secure_query.php';

function random_str3($length, $keyspace = '0123456789abcde')
{
    $pieces = array();
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[rand(0, $max)];
    }
    return implode('', $pieces);
}

if(isset($_POST['passwd1']) && isset($_POST['passwd2'])){
  $pass1 = $_POST['passwd1'];
  $pass2 = $_POST['passwd2'];
  if($pass1 == $pass2 && strlen($pass1) >= 6 && isset($_GET['code'])){
    $code = $_GET['code'];
    $sql = "SELECT * FROM login WHERE Reset = ?";
    $result = secure_query($link, $sql, $t = array('s'), $a = array(&$code));
    if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);
      $encrypt = random_str3(32); 
      $password = SHA1($pass1);
      $password = ($encrypt.$password);
      $user_id = $row['ID'];
      $update = "UPDATE login SET Password = '$password', Reset = '' WHERE ID = '$user_id'";
      $result2 = mysqli_query($link, $update);
      if($result2){
        $_SESSION['user'] = $user_id;
        echo("<script>window.location='index.php';</script>");
      }
      else{
        echo("<script>alert('Ups, coś poszło nie tak :('); window.location='index.php';</script>");
      }
    }
  }
  else{
    echo "<script type='text/javascript'>document.getElementById('informacja').innerHTML = 'Hasła nie są poprawne';</script>";
  }
}
?>


</body>
</html>