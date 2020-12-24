<?php

include_once '../../config.php'; 

include_once CORE_PATH.'/connect.php'; 

// Sql Statment
$sql = "CREATE TABLE IF NOT EXISTS `sliders`(
    `id` int(11) unsigned not null auto_increment primary key,
    `title` varchar(255) not null,
    `slug` varchar(255) not null,
    `image` varchar(255) not null,
    `link` varchar(255) not null
    )";

// Excute Sql Statment
$result = mysqli_query($connection,$sql);

?>