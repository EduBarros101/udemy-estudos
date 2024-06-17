<?php

$host = "localhost";
$user = "eduardo";
$pass = "#Barros101";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$table = "motos";
$name = "Fazer4";
$cc = 150;
$description = "vroooom";

$queryString = "INSERT INTO $table(name, cc, description) VALUES('$name', $cc, '$description')";

$conn->query($queryString);

$conn->close();
