<?php

$host = "localhost";
$user = "eduardo";
$pass = "#Barros101";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);
$id = 7;

$stmt = $conn->prepare("SELECT * FROM motos WHERE id > ?");

$stmt->bind_param('i', $id);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

$conn->close();

echo "<pre>";
print_r($data);
