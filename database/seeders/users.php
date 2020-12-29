<?php

include_once '../connect.php'; 
$password = password_hash('password',PASSWORD_DEFAULT);
$sql = "INSERT INTO `users` (`name`,`email`,`password`) VALUES ('superadmin','superadmin@gmail.com','$password')";
$result = mysqli_query($connection,$sql);
?>