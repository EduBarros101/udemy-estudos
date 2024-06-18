<?php

$host = "localhost";
$db = "cursophp";
$user = "eduardo";
$pass = "#Barros101";

$id = 5;

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("SELECT * FROM motos WHERE id > :id");
$stmt->bindParam(":id", $id);
$stmt->execute();

// Retorno de apenas um item.
// $data = $stmt->fetch(PDO::FETCH_ASSOC);

// retorno de multiplos itens.
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($data);
