<?php

include_once '../../config.php'; 

include_once DATABASE_PATH.'/connect.php'; 

// Sql Statment
$sql = "CREATE TABLE IF NOT EXISTS `portfolios` (
    `id` int(11) unsigned not null auto_increment primary key,
    `name` varchar(50) not null,
    `description` text not null,
    `image` varchar(255) not null,
    `service_id` int(11) unsigned,
    foreign key(service_id) references services(id)
    )";


// Excute Sql Statment
$result = mysqli_query($connection,$sql);

?>