<?php 
$servername = "localhost" ;
$username = "username" ;
$password = "password" ;
$conn =new mysqli($servername,$username,$password);
$sql = " CREATE DATABASE myDB(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,Name VARCHAR(30) NOT NULL,Phone NUMERIC(20,3)) E_mail VARCHAR(50))" ;
$conn->close();

 ?>