<?php

include_once '../../config.php'; 

include_once CORE_PATH.'/connect.php'; 

// Sql Statment
$sql = "CREATE TABLE IF NOT EXISTS `messages`(
    `id` int(11) unsigned not null auto_increment primary key,
    `name` varchar(50) not null,
    `email` varchar(255) not null unique,
    `phone` varchar(20),
    `organization` varchar(100) ,
    `content` text not null,
    `date` timestamp
    )";

// Excute Sql Statment
$result = mysqli_query($connection,$sql);

?>