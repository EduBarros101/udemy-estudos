<?php

$host = "localhost";
$db = "cursophp";
$user = "eduardo";
$pass = "#Barros101";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$name = "Moto Z";
$cc = 999;
$description = "Moto suprema";

$stmt = $conn->prepare("INSERT INTO motos (name, cc, description) VALUES (:name, :cc, :description)");

$stmt->bindParam(":name", $name);
$stmt->bindParam(":cc", $cc);
$stmt->bindParam(":description", $description);

$stmt->execute();
