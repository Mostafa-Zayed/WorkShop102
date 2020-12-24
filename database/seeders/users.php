<?php

include_once '../connect.php'; 
$password = password_hash('password',PASSWORD_DEFAULT);
$sql = "INSERT INTO `users` (`name`,`email`,`password`) VALUES ('Ahmed','ahmed@gmail.com','$password'),
 ('Ali','ali@gmail.com','$password'),
 ('mohamed','mohamed@gmail.com','$password'),
 ('sherif','sherif@gmail.com','$password'),
 ('omr','orm@gmail.com','$password'),
 ('mona','mona@gmail.com','$password')";

$result = mysqli_query($connection,$sql);
?>