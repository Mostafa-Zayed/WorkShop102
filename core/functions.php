<?php


// Database Functions

// get data
function get_data(string $tableName, $columns = '*', $condition = '') {
	global $connection;
	$sql_statment = '';
	$columns = prepare_columns($columns);
	if(empty($condition)) {
		$sql_statment = "SELECT $columns FROM `$tableName`";	
	}else {
		$sql_statment = "SELECT $columns FROM `$tableName` WHERE $condition";	
	}
	

	$result = mysqli_query($connection,$sql_statment);
	if(mysqli_num_rows($result) > 0 ) 
		return mysqli_fetch_all($result,MYSQLI_ASSOC);
	else 
		return array();
}

function get_row(string $tableName,$columns = '*',$condition){
	global $connection;
	$columns = prepare_columns($columns);
	$sql_statment = "SELECT $columns FROM `$tableName` WHERE $condition";
	$result = mysqli_query($connection,$sql_statment);
	if(mysqli_num_rows($result) > 0 )
		return mysqli_fetch_assoc($result);
	else 
		return arrray();
}

function insert_row(string $tableName,array $data) {
	$columns = '';
	$values  = '';
	$sql_statment = "INSERT INTO `$tableName` ";
	$columns .= prepare_columns(array_keys($data));
	foreach($data as $value) {
		$values .= "'$value',";
	}
	$sql_statment .= "($columns) VALUES (".rtrim($values,',').")";
}

function prepare_columns($columns_name) {
	$new_columns = '';
	if(is_array($columns_name)) {
		foreach($columns_name as $column) {
			$new_columns .= '`'.$column.'`,';
		}
	}elseif(is_string($columns_name) && $columns_name!== '*') {
		$columns = explode(',',$columns_name);
		foreach($columns as $column) {
			$new_columns .= '`'.$column.'`,';
		}
	} else {
		$new_columns .= $columns_name;
	}

	return rtrim($new_columns,',');
}

// show Data by var_dump Func for testing only 
function var_Data($data) {
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

// show Data by Print_r Func for testing only
function print_Data($data) {
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

function checkImageExtension($iamgeextension,$types) {
if(in_array())
	return 1;
}