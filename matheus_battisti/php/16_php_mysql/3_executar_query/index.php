<?php

$host = "localhost";
$user = "eduardo";
$pass = "#Barros101";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$sql = "SELECT * FROM motos";

$result = $conn->query($sql);

echo "<pre>";
print_r($result);
var_dump($result);
echo "</pre>";

$conn->close();
