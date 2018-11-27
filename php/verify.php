<?php 
require_once 'connect.php';
require_once 'secure_query.php';

if($link === false)
{
    die("ERROR: Could not connect. ".mysqli_connect_error());
}

$verification_code = $_GET['code'];

if($verification_code != null){
    // old version: $query = "UPDATE login SET EmailStatus = 'verified' WHERE '$verification_code' = ActivationCode";
    $verify_status = "verified";
    $query = "UPDATE login SET EmailStatus = ? WHERE ActivationCode = ?";
    if(secure_query($link,$query,$t = array('ss'),$a = array(&$verify_status, &$verification_code))){
        echo "Twój adres email został zweryfikowany, możesz się teraz zalogować";
    }
    else{
        echo "Twój kod do weryfikacji jest nieprawidłowy lub wygasły";
    }
    mysqli_close($link);
}
else{
    echo "Zły kod weryfikacyjny";
}

?>