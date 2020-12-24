<?php

include_once '../../config.php'; 

include_once CORE_PATH.'/connect.php'; 

// Sql Statment
$sql = "CREATE TABLE IF NOT EXISTS `services` (
    `id` int(11) unsigned not null auto_increment primary key,
    `name` varchar(100) not null unique,
    `icon` varchar(50) not null,
    `description` text not null,
    `is_show` tinyint(1) default 0
    )";
    
// Excute Sql Statment   
$result = mysqli_query($connection,$sql);

?>