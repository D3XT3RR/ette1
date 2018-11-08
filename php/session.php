<?php
@session_start();
require_once 'connect.php';
if (isset($_SESSION['user'])) {
    // logged in
} else {
    echo "<script type='text/javascript'>document.getElementById('register').style.display='block';</script>";
}
/*

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
{
    echo "Welcome, " . $_SESSION['username'] . "!";
} 


else 
{
    echo "<script type='text/javascript'>alert('Please, log in first to see this page');window.location = '../Login.html';</script>";
}*/





//session_destroy();



?>