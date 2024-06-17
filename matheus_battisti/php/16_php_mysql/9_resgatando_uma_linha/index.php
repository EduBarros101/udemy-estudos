<?php

$host = "localhost";
$user = "eduardo";
$pass = "#Barros101";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);
$id = 10;

$stmt = $conn->prepare("SELECT * FROM motos WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$moto = $result->fetch_row();

echo "<pre>";
print_r($moto);
