<?php
include_once 'config.php';
include_once 'core/connect.php';
include_once 'core/functions.php';


//var_data(getData('users','id,name'));
var_data(getOneRowByID('users','id,name',1));

//$name='ahmed'; 
//echo $name;
//$names = ['id','name','email'];
//echo prepare_columns(4);

//$data1 = get_data('users','id,name,email','id=6');
//$data = get_row('users','id,name,email',"name='Ali'");
//$post = ['id'=>1,'name'=>'testing','email'=>'alitest@gamil.com','password'=>'14322334'];

//insert_row('users',$post);
$extensions = get_loaded_extensions();
//print_data($extensions);
//$data = get_extension_funcs('standard');
//print_data($data
/*
unset($extensions[12]);
	unset($extensions[15]);
	unset($extensions[26]);
	unset($extensions[37]);
	unset($extensions[38]);
	unset($extensions[39]);
$counter = 0;
foreach($extensions as $extension) {

	
	foreach(get_extension_funcs($extension) as $func){
		$counter++;
	}
	
}

echo $counter;
/*
var_Data($data1);
print_data($data1);

var_Data($data);
print_data($data);
*/


