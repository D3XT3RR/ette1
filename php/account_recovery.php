<?php
    session_start();
    require_once 'connect.php';
    require_once 'secure_query.php';

    if(isset($_SESSION['recover_id'])){
    	$user_id = $_SESSION['recover_id'];
    	$raw_results = secure_query($link,"SELECT * FROM login WHERE ID=?", $t = array('i'), $a = array(&$user_id));
    	if(mysqli_num_rows($raw_results) > 0)      
    	{
        	while($row = mysqli_fetch_assoc($raw_results))
        	{
        		$link->set_charset("utf8");
                $tbdd_value = NULL;
        		secure_query($link, "UPDATE login SET ToBeDeletedDate = ? WHERE ID = ?", $t = array('si'), $a = array(&$tbdd_value, &$user_id));
        		echo "<script type='text/javascript'>alert('Konto zostało przywrócone');window.location = '../index.php';</script>";
        	}
        }
    }
?>