<?php

$host = "localhost";
$user = "eduardo";
$pass = "#Barros101";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$id = 10;
$name = "Battle Hopper";
$description = "Moto do Balck Kamen Rider";

$stmt = $conn->prepare("UPDATE motos SET name = ? WHERE id = ?");
$stmt->bind_param("si", $name, $id);
$stmt->execute();

$stmt = $conn->prepare("UPDATE motos SET description = ? WHERE id = ?");
$stmt->bind_param("si", $description, $id);
$stmt->execute();

$conn->close();

if ($stmt->error) {
  echo "Erro: " . $stmt->error;
}
