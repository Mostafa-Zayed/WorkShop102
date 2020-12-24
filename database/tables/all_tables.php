<?php 
$files = glob("*.php");
foreach($files as $file) {
	if($file === 'all_tables.php'){
		continue;
	}
	require_once $file;
}

?>