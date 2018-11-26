<?php
function secure_query($dblink, $query, $vartypes = array(), $params = array()){
	$dummy = &$params;

	$stmt = $dblink->prepare($query);
	if(count($vartypes) > 0 && count($params) > 0){
		call_user_func_array(array($stmt, "bind_param"), array_merge($vartypes, $dummy));
	}
	
	$stmt->execute();

	$result = $stmt->get_result();
	return $result;
}
?>