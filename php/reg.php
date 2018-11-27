<?php
  require_once 'page_format.php';
  require_once 'connect.php';
  require_once 'secure_query.php';


if(!isset($_POST['RegLogin']) || !isset($_POST['RegPasswd']) || !isset($_POST['RegPasswd2']) || !isset($_POST['RegMail']) || !isset($_POST['RegPhone'])){
  die();
}

//POBIERANIE DANYCH

$login = $_POST['RegLogin'];
$password = $_POST['RegPasswd'];
$password2 = $_POST['RegPasswd2'];
$email = $_POST['RegMail'];
$phone = $_POST['RegPhone'];

//GENEROWANIE SALTA

function random_str($length, $keyspace = '0123456789abcde')
{
    $pieces = array();
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[rand(0, $max)];
    }
    return implode('', $pieces);
}
$encrypt = random_str(32); 
$result = secure_query($link,"SELECT Login FROM login WHERE Login=?", $t = array('s'), $a = array(&$login));
$checkLogin = mysqli_num_rows($result) > 0 ? 'yes' : 'no';
$result2 = secure_query($link,"SELECT Email FROM login WHERE Email=?", $t = array('s'), $a = array(&$email));
$checkEmail = mysqli_num_rows($result2) > 0 ? 'yes' : 'no';
while (true){
    $verificationCode = md5(rand(0,10000));
    $result = secure_query($link, "SELECT 1 FROM login WHERE ActivationCode = ? LIMIT 1", $t = array('s'), $a = array(&$verificationCode));
    if (mysqli_num_rows($result) == 0) {
        break;
    }
}


//SPRAWDZ LOGIN, HASLO


if (($password !== $password2) || (strlen($password) < 6) || (strlen($login) < 4) || ($checkLogin == 'yes') || ($email == "") || (!(filter_var($email, FILTER_VALIDATE_EMAIL))) || (($checkEmail == 'yes')) || (!(is_numeric($phone))) || ($login == "") || ($password == "") || ($password2 == "") || ($phone == "") )
{
    if ($checkLogin == 'yes')
    {
        echo "<script type='text/javascript'>document.getElementById('loginErr').innerHTML = 'Ten login jest zajęty'; document.getElementById('register').style.display='block';</script>";
    } 
    
    else if ($checkEmail == 'yes')
    {
        echo "<script type='text/javascript'>document.getElementById('mailErr').innerHTML = 'Ten email jest zajęty'; document.getElementById('register').style.display='block';</script>";
    }

    else if ($login == "")
    {
        echo "<script type='text/javascript'>document.getElementById('loginErr').innerHTML = 'Podaj login'; document.getElementById('register').style.display='block';</script>";
    } 
    
    else if ($email == "") 
    {
        echo "<script type='text/javascript'>document.getElementById('mailErr').innerHTML = 'Podaj email'; document.getElementById('register').style.display='block';</script>";
    }
    
    else if ($phone == "")
    {
        echo "<script type='text/javascript'>document.getElementById('phoneErr').innerHTML = 'Podaj numer telefonu'; document.getElementById('register').style.display='block';</script>";
    }

    else if (($password !== $password2) || ($password2 == "") || ($password2 == "") )
    {
        echo "<script type='text/javascript'>document.getElementById('pass2Err').innerHTML = 'Hasła nie pasują do siebie'; document.getElementById('register').style.display='block';</script>";
    }
    
    else if (!(filter_var($email, FILTER_VALIDATE_EMAIL)))
    {
        echo "<script type='text/javascript'>document.getElementById('mailErr').innerHTML = 'Podaj prawidłowy adres email'; document.getElementById('register').style.display='block';</script>";
    }
    else if (strlen($login) < 4)
    {
        echo "<script type='text/javascript'>document.getElementById('loginErr').innerHTML = 'Login jest za krótki'; document.getElementById('register').style.display='block';</script>";
    }
    
    else if (strlen($password) < 6)
    {
        echo "<script type='text/javascript'>document.getElementById('passErr').innerHTML = 'Hasło jest za krótkie'; document.getElementById('register').style.display='block';</script>";
    }
    
    else if (!(is_numeric($phone)))
    {
        echo "<script type='text/javascript'>document.getElementById('phoneErr').innerHTML = 'Wprowadź prawidłowy numer telefonu'; document.getElementById('register').style.display='block';</script>";
    }
}

//SZYFRUJ HASLO, WPROWADZ UZYTKOWNIKA DO BAZY DANYCH

else
{
    $password = SHA1($password);
    $password = ($encrypt.$password);

    if($link === false)
    {
        die("ERROR: Could not connect. ".mysqli_connect_error());
    }
    //old version: $sql = "INSERT INTO login (Login, Password, Email, Contact_Phone_Number, Contact_Email, Phone, ActivationCode, EmailStatus) VALUES ('$login', '$password', '$email', '$phone', '$email', '$phone', '$verificationCode', 'not verified')";
    $sql = "INSERT INTO login (Login, Password, Email, Contact_Phone_Number, Contact_Email, Phone, ActivationCode, EmailStatus) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $default_status = 'not verified';
    if(secure_query($link, $sql, $t = array("sssisiss"), $a = array(&$login, &$password, &$email, &$phone, &$email, &$phone, &$verificationCode, &$default_status)))
    {
    $to=$email;
    $subject="Activation Code For i-ette.de";
    $from = 'noreply@i-ette.de';
    $body="Dziękujemy za rejestrację, ".$login."!<br/> Twój kod aktywacyjny to ".$verificationCode."<br/> <a target='_blank' href='http://i-ette.de/page/php/verify.php?code=".$verificationCode."'>Skorzystaj z tego linku alby aktywować swoje konto</a>";
    $headers = "From:".$from;
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    mail($to,$subject,$body,$headers);
    //echo "You are registered! :) <br />";
    echo "<script type='text/javascript'>alert('Kod weryfikujący został wysłany na twoje konto');window.location = 'index.php';</script>";
    //mail($email, "Registration confirmation", "to be added");
    mysqli_close($link);
}

else
    echo "<script type='text/javascript'>alert('Ups! Coś poszło nie tak :(');window.location = '../index.php';</script>";
}
?>