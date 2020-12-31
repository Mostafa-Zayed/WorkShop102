<?php


// Database Functions

// get data
function getData(string $tableName, $columns = '*', string $condition = '') {
	global $connection;
	$queryStatment = buildQuery($tableName, $columns, $condition);
	$result = mysqli_query($connection,$queryStatment);
	if(mysqli_num_rows($result) > 0 )
		return mysqli_fetch_all($result,MYSQLI_ASSOC);
	else
		return array();
}

function buildQuery(string $tableName, $columns = '*', string $condition = '') {
	return empty($condition) ? "SELECT ".buildColumns($columns)." FROM `$tableName`" : 	$sql_statment = "SELECT ".buildColumns($columns)." FROM `$tableName` WHERE $condition";

}
function getOneRow(string $tableName, $columns = '*', string $condition = ''){
	global $connection;
	$queryStatment = buildQuery($tableName, $columns, $condition)." LIMIT 1";
	$result = mysqli_query($connection,$queryStatment);
	if(mysqli_num_rows($result) > 0 )
		return mysqli_fetch_assoc($result);
	else
		return array();
}

function getRowByID(string $tableName, $columns = '*', int $id){
	global $connection;
	$queryStatment = buildQuery($tableName, $columns, '`id` = '.$id)." LIMIT 1";
	$result = mysqli_query($connection,$queryStatment);
	if(mysqli_num_rows($result) > 0 )
		return mysqli_fetch_assoc($result);
	else
		return array();
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

function buildColumns($columns) {

	return is_array($columns) ? prepareColumns($columns) : (is_string($columns) && ($columns === '*') ? '*' : prepareColumns(explode(',',$columns)));
}

function prepareColumns(array $columns) {
	$selectedColumns = '';
	foreach($columns as $column)
		$selectedColumns .= "`$column`,";
	return rtrim($selectedColumns,',');
}

/*
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
*/
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