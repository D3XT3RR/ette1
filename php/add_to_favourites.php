<?php
	session_start();
	require_once 'connect.php';
    require_once 'secure_query.php';
	
	$ad_id = @$_GET['id'];
	$user_id = @$_SESSION['user'];
	$action = @$_GET['action'];
	if(!empty($ad_id) && !empty($user_id) && is_numeric($ad_id) && !empty($action)){
		$result = secure_query($link,"SELECT Favourites FROM login WHERE ID=?",$t=array('i'),$a=array(&$user_id));
		while($row = mysqli_fetch_row($result)){
			$fav = $row[0];
			$fav = rtrim($fav,',');
			$fav_arr = explode(",",$fav);
			if($action == 'add'){
				if(!in_array($ad_id, $fav_arr)){
					array_push($fav_arr, $ad_id);
					$fav_arr_imp = implode(",",$fav_arr);
					$fav_arr_imp = rtrim($fav_arr_imp,',');
					secure_query($link,"UPDATE login SET Favourites = ? WHERE ID = ?",$t=array('si'),$a= array(&$fav_arr_imp, &$user_id));
				}
			}
			else if($action == 'remove'){
				if(in_array($ad_id, $fav_arr)){
					$index = array_search($ad_id, $fav_arr);
					unset($fav_arr[$index]);
					$fav_arr_imp = implode(",",$fav_arr);
					$fav_arr_imp = rtrim($fav_arr_imp,',');
					secure_query($link,"UPDATE login SET Favourites = ? WHERE ID = ?",$t=array('si'),$a= array(&$fav_arr_imp, &$user_id));
				}
			}
		}
	}
	if($ad_id != null){
		echo("<script>window.location = '../AnnounView.php?id=".$ad_id."';</script>");
	}
	else{
		echo("<script>window.location = '../index.php';</script>");
	}
?>
