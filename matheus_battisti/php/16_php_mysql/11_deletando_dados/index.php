<?php

$host = "localhost";
$user = "eduardo";
$pass = "#Barros101";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$id = 11;

$stmt = $conn->prepare("DELETE FROM motos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$conn->close();
