<?php

$host = "localhost";
$user = "eduardo";
$pass = "#Barros101";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$name = "Tico-Tico";
$cc = 0.1;
$description = "Tico-tico do Bob";

$stmt = $conn->prepare("INSERT INTO motos (name, cc, description) VALUES (?,?,?)");

$stmt->bind_param("sis", $name, $cc, $description);

$stmt->execute();

$conn->close();
