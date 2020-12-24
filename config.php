<?php

// Server Name 
defined('SERVER_NAME') || define('SERVER_NAME',$_SERVER['HTTP_HOST']);

// Dabase Name
defined('DATABASE_NAME') || define('DATABASE_NAME','uza');

// Database User
defined('DATABASE_USER') || define('DATABASE_USER','root');

// Database Password
defined('DATABASE_PASSWORD') || define('DATABASE_PASSWORD','');

// Directory Separator
defined('DS')  || define('DS',DIRECTORY_SEPARATOR);

// Website Url
defined('WEBSITE_URL') || define('WEBSITE_URL','http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).'/');

// FrontEnd Assets Url
defined('FRONTEND_ASSETS_URL') || define('FRONTEND_ASSETS_URL',WEBSITE_URL.'assets');

// Application Path
defined('APPLICATION_PATH') || define('APPLICATION_PATH',__DIR__.DS);

// Database Path
defined('DATABASE_PATH') || define('DATABASE_PATH',APPLICATION_PATH.'database'.DS);


// Includes Path
defined('INCLUDE_PATH') || define('INCLUDE_PATH',APPLICATION_PATH.'includes'.DS);



?>