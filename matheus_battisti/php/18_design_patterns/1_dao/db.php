<?php

$db = "daotest";
$host = "localhost";
$dsn = "mysql:dbname=$db;host=$host";
$user = "eduardo";
$pass = "#Barros101";

$conn = new PDO($dsn, $user, $pass);
