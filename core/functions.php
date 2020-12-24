<?php


// Database Functions

// get data
function get_data(string $tableName, $columns = '*', $condition = '') {
	global $connection;
	$sql_statment = "SELECT $columns FROM $tableName $condition";
	$result = mysqli_query($connection,$sql_statment);
	if(mysqli_num_rows($result) > 0 ) 
		return mysqli_fetch_all($result,MYSQLI_ASSOC);
	else 
		return array();
}




// for testing only
function showData($data) {
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}