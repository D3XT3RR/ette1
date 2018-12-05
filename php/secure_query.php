<?php
function secure_query($dblink, $query, $vartypes = array(), $params = array(), $image_data = array()){
	$dummy = &$params;

	$stmt = $dblink->prepare($query);
	if(count($vartypes) > 0 && count($params) > 0){
		call_user_func_array(array($stmt, "bind_param"), array_merge($vartypes, $dummy));
	}
	$keycount = 0;
	foreach($image_data as $key => $img){
		if($img != ""){
			$stmt->send_long_data($keycount, $img);
			$keycount += 1;
		}
	}
	
	$stmt->execute();

	$result = $stmt->get_result();
	return $result;
}
?>
