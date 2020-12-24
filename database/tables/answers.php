<?php

include_once '../../config.php'; 

include_once CORE_PATH.'/connect.php'; 

// Sql Statment
$sql = "CREATE TABLE IF NOT EXISTS `answers` (
    `id` int(11) unsigned not null auto_increment primary key,
    `content` varchar(255) not null,
    `question_id` int(11) unsigned not null,
    constraint fK_question_answer foreign key(question_id) references questions(id)
    )";

// Excute Sql Statment
$result = mysqli_query($connection,$sql);

?>