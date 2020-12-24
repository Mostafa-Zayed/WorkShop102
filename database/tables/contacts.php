<?php

include_once '../../config.php'; 

include_once CORE_PATH.'/connect.php'; 

// Sql Statment
$sql = "CREATE TABLE IF NOT EXISTS `contacts` (
    `id` int(11) unsigned not null auto_increment primary key,
    `name` varchar(50) not null,
    `phone` varchar(20) not null,
    `email` varchar(255) not null,
    `days` varchar(255) not null,
    `closed` varchar(50) not null,
    `street` varchar(255) not null,
    `is_show` tinyint(1) not null default 0
    )";

// Excute Sql Statment
$result = mysqli_query($connection,$sql);

?>