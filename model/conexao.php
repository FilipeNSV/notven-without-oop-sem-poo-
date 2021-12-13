<?php

$host = "localhost";
$port = 3306;
$dbname = "db01";
$user = "root";
$password = "";


$con = new PDO("mysql: host=$host; dbname=$dbname", "$user", "$password");

?>