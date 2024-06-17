<?php

$host = "localhost";
$user = "eduardo";
$pass = "#Barros101";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// $queryString = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$queryString = "DROP TABLE teste";

$conn->query($queryString);

$conn->close();
