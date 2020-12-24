<?php

include_once '../../config.php'; 

include_once CORE_PATH.'/connect.php'; 

// Sql Statment
$sql = "CREATE TABLE IF NOT EXISTS `users`(
    `id` int(11) unsigned not null auto_increment primary key,
    `name` varchar(50) not null,
    `email` varchar(255) not null unique,
    `password` varchar(255) not null,
    `image` varchar(255) 
    )";

// Excute Sql Statment
$result = mysqli_query($connection,$sql);

?>