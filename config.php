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


//                              LINKS  URLS 

// Website Url
defined('WEBSITE_URL') || define('WEBSITE_URL','http://'.$_SERVER['HTTP_HOST'].'/uza/');

// Admin Url
defined('ADMIN_URL') || define('ADMIN_URL',WEBSITE_URL.'admin/');

// FrontEnd Assets Url
defined('FRONTEND_ASSETS_URL') || define('FRONTEND_ASSETS_URL',WEBSITE_URL.'assets/frontend/');

// Admin Assets Url
defined('ADMIN_ASSETS_URL') || define('ADMIN_ASSETS_URL',WEBSITE_URL.'assets/backend/');

//                              FOLDERS PAHTS

// Application Path
defined('APPLICATION_PATH') || define('APPLICATION_PATH',__DIR__.DS);

// Application Includes Path
defined('APP_INCLUDES_PATH') || define('APP_INCLUDES_PATH',APPLICATION_PATH.'includes'.DS);

// Admin Path
defined('ADMIN_PATH') || define('ADMIN_PATH',APPLICATION_PATH.'admin'.DS);

// Admin Includes Path
defined('ADMIN_INCLUDES_PATH') || define('ADMIN_INCLUDES_PATH',APPLICATION_PATH.'admin'.DS.'includes'.DS);

// Core Path
defined('CORE_PATH') || define('CORE_PATH',APPLICATION_PATH.'core'.DS);

// Database Path
defined('DATABASE_PATH') || define('DATABASE_PATH',APPLICATION_PATH.'database'.DS);
?>