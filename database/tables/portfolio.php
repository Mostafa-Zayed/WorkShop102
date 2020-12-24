<?php

include_once '../../config.php'; 

include_once CORE_PATH.'/connect.php'; 

// Sql Statment
$sql = "CREATE TABLE IF NOT EXISTS `portfolios` (
    `id` int(11) unsigned not null auto_increment primary key,
    `name` varchar(50) not null,
    `description` text not null,
    `client` varchar(100) not null,
    `date` varchar(100) not null,
    `location` varchar(25) not null,
    `author` varchar(50) not null,
    `image` varchar(255) not null,
    `is_show` tinyint(1) not null default 0,
    `service_id` int(11) unsigned,
    constraint fk_services_portfolio foreign key(service_id) references services(id)
    )";

// Excute Sql Statment
$result = mysqli_query($connection,$sql);

?>