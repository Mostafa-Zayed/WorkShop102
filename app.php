<?php 
// include Config File
include_once 'config.php'; 

// get all files in Core Folder
$core_files = glob(CORE_PATH.'*.php');

foreach($core_files as $file) {
	include_once $file;
}

?>