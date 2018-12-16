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
        <div id="reshead">Resetowanie hasła do ETTE</div>
        <div id="reset">
        <form method="post" target="">
          <input type="text" name="code" placeholder="Kod resetujący hasło">
          <input type="submit" value="RESETUJ">
        </form>
        <div id="informacja">Podaj kod wysłany na Twój adres e-mail</div>
      </div>
    </div>
  </section>

  <footer>
    <div class="auto">
      <div class="column">
        <h5>Media Społecznościowe</h5>
        <div class="row"><a href="http://facebook.pl" target="_blank">Facebook</a></div>
        <div class="row"><a href="http://www.instagram.com" target="_blank">Instagram</a></div>
        <div class="row"><a href="http://twitter.com" target="_blank">Twitter</a></div>
      </div>

      <div class="column">
        <h5>Kontakt</h5>
        <div class="row"><a href="mailto:przykladowy.email@ette.de">przykladowy.email@ette.de</a></div>
        <div class="row"><a href="https://goo.gl/maps/oMKDB2XsR8D2" target="_blank">rondo Wiatraczna<br>
        03-982 Warszawa</a></div>

      </div>

      <div class="column">
        <h5>Informacje</h5> 
        <div class="row">
          <a href="">Informacje dotyczące przetwarzania plików cookies</a>
        </div>

        <div class="row">
          <a href="">Dane diagnostyczne</a>
        </div>

        <div class="row">
          
        </div>
      </div>
    </div>
  </footer>





<!-- PHP -->
<?php
require 'php/connect.php';
require 'php/secure_query.php';
if(!isset($_POST['code'])){
  die();
}
$code = $_POST['code'];
$find_code = secure_query($link, "SELECT * FROM login WHERE Reset = ?", $t = array('s'), $a = array(&$code));
if(mysqli_num_rows($find_code) > 0){
  echo("<script type='text/javascript'>window.location='passwordSet.php?code=".$code."';</script>");
}
else{
  echo "<script type='text/javascript'>document.getElementById('informacja').innerHTML = 'Kod nie jest poprawny';</script>";
  die();
}

$mail = $_POST['mail'];
$reset = md5(rand(0, 100000000));
$find_reset = mysqli_query($link, "SELECT Reset FROM login WHERE Reset = '$reset'");
while(mysqli_num_rows($find_reset) > 0){
  $reset = md5(rand(0, 100000000));
  $find_reset = mysqli_query($link, "SELECT Reset FROM login WHERE Reset = '$reset'");
}
$to=$mail;
$sql = "SELECT Login FROM login WHERE Email = ?";
$query = secure_query($link, $sql, $t = array('s'), $a = array(&$mail));
if(mysqli_num_rows($query) == 0){
  echo("<script type='text/javascript'>document.getElementById('informacja').innerHTML = 'Podany email nie istnieje w bazie danych';</script>");
  die();
}
$result = mysqli_fetch_assoc($query);
$status = 'verified';
$result2 = secure_query($link,"UPDATE login SET Reset = ?, EmailStatus = ? WHERE Email = ?", $t = array('sss'), $a = array(&$reset, &$status, &$mail));
if($result2 !== null){
    $subject="Resetowanie hasla";
    $from = "noreply@i-ette.de";
    $body="<h3>Resetowanie hasła do ETTE dla użytkownika: ".$result['Login']."</h3><br/> <a target='_blank' href='http://i-ette.de/page/passwordSet.php?code=".$reset."'>Skorzystaj z tego linku aby zresetować swoje hasło</a>";
    $headers = "From:".$from."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    mail($to,$subject,$body,$headers);
    //echo "You are registered! :) <br />";
    echo "<script type='text/javascript'>document.getElementById('informacja').innerHTML = 'Email z linkiem został wysłany na Twoje konto';</script>";
}
    //echo "<script type='text/javascript'>document.getElementById('informacja').innerHTML = 'Nie ma konta z takim adresem email';</script>";
    

mysqli_close($link);
?>


</body>
</html>