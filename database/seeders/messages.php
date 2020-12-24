<?php

include_once '../connect.php'; 

$sql = "INSERT INTO `messages` (`name`,`email`,`message`) VALUES ('Ahmed','ahmed@gmail.com','How Are Your'),
 ('Ali','ali@gmail.com','Tesing Message'),
 ('mohamed','mohamed@gmail.com','Tesing Message'),
 ('sherif','sherif@gmail.com','Tesing Message'),
 ('omr','orm@gmail.com','Tesing Message'),
 ('mona','mona@gmail.com','Tesing Message')";

$result = mysqli_query($connection,$sql);
?>