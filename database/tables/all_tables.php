<?php 
$files = glob("*.php");
foreach($files as $file) {
	if($file === 'all_tables.php'){
		continue;
	}
	require_once $file;
}
/*
echo '<pre>';
print_r($files);
echo '</pre>';
*/
?>