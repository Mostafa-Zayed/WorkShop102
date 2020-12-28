<?php 


// Connect To Database
$connection = mysqli_connect(SERVER_NAME,DATABASE_USER,DATABASE_PASSWORD,DATABASE_NAME);

// Check if Connection True
if(! $connection) {
	die('Error'.mysqli_connect_errorno());
}

?>