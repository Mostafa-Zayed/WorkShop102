<?php

// Conncet to Mysql
include_once '../connect.php'; 

// Hased Password
$password = password_hash('password',PASSWORD_DEFAULT);

// Insert Data in Tables admins
$sql = "INSERT INTO `admins`(`name`,`email`,`password`) VALUES('superadmin','superadmin@admin.com','$password'),
 ('admin1','admin1@gmail.com','$password'),
 ('admin2','admin2@gmail.com','$password'),
 ('admin3','admin3@gmail.com','$password')";
 
$result = mysqli_query($connection,$sql);
?>