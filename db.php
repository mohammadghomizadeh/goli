<?php 
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=localhost;dbname=asantablo", $username, $password);
$conn->exec("set names utf8");



?>