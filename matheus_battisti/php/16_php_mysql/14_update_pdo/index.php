<?php

$host = "localhost";
$db = "cursophp";
$user = "eduardo";
$pass = "#Barros101";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$id = 9;
$description = "Moto futurista";

$stmt = $conn->prepare("UPDATE motos SET description = :description WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->bindParam(":description", $description);

$stmt->execute();
