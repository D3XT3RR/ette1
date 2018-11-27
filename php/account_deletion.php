<?php
    session_start();
    require_once 'connect.php';
    require_once 'secure_query.php';

    if(isset($_SESSION['user'])){
    	$user_id = $_SESSION['user'];
    	// old version: $raw_results = mysqli_query($link,"SELECT * FROM login WHERE ID='$user_id'") or die(mysqli_error($link));
        $raw_results = secure_query($link,"SELECT * FROM login WHERE ID=?", $t = array('i'), $a = array(&$user_id));
    	if(mysqli_num_rows($raw_results) > 0)      
    	{
        	while($row = mysqli_fetch_assoc($raw_results))
        	{
        		$link->set_charset("utf8");
        		date_default_timezone_set('Europe/Berlin'); // CDT
        		$current_date = date('Y-m-d', strtotime(' +30 days'));
        		// old version: mysqli_query($link, "UPDATE login SET ToBeDeletedDate = '$current_date' WHERE ID = '$user_id'") or die(mysqli_error($link));
                secure_query($link, "UPDATE login SET ToBeDeletedDate = ? WHERE ID = ?", $t = array('si'), $a = array(&$current_date, &$user_id));
        		echo "<script type='text/javascript'>window.location = 'logout.php';</script>";
        	}
        }
    }
?>