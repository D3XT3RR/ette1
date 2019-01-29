<?php
    session_start();
    require_once 'connect.php';
    require_once 'secure_query.php';
    if(isset($_GET['id'])){
        $ad_id = $_GET['id'];
        $result = secure_query($link, "SELECT poster_id FROM adverts WHERE id = ?", $t = array('i'), $a=array(&$ad_id));
        $poster_id = mysqli_fetch_row($result)[0];
        $result2 = secure_query($link, "SELECT Contact_Phone_Number FROM login WHERE ID = ?", $t = array('i'), $a=array(&$poster_id));
        $phone_no = mysqli_fetch_row($result2)[0];
        echo $phone_no;
        return $phone_no;
    }
?>