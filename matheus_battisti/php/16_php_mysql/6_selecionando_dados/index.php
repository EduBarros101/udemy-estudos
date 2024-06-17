<?php

$host = 'localhost';
$user = 'eduardo';
$pass = "#Barros101";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$selectString = "SELECT * FROM motos";
$insertString = "INSERT INTO motos (name, cc, description) VALUES ('Moto do Back Kamen Rider', 1000, 'Motona foda')";

$conn->query($insertString);

$result = $conn->query($selectString);

// $motos = $result->fetch_assoc();

$motos = $result->fetch_all();

$conn->close();

echo "<pre>";
print_r($motos);
