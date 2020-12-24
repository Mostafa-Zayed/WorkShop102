<?php

include_once '../connect.php'; 

$sql = "INSERT INTO `services` (`name`,`icon`,`description`) VALUES ('Business Strategy','icon_cone_alt','At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.'),
 ('Marketing Social','icon_piechart','At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.'),
 ('UX/UI Design','icon_easel','At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.'),
 ('Business Strategy','icon_piechart','At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.'),
 ('Marketing Social','icon_piechart','At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.'),
('Software Testing','icon_piechart','At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.'),
('Software Enginnering','icon_piechart','At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.'),
('Web Applications','icon_piechart','At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.'),
('Mobile Applications','icon_piechart','At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata.')";
 
 
$result = mysqli_query($connection,$sql);

?>





