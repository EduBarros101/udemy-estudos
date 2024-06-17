<?php

$host = "localhost";
$user = "eduardo";
$password = "#Barros101";
$db = "cursophp";

echo "oi1";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_errno) {
  echo "Erro na conexão.";
  echo "Erro:" . mysqli_connect_errno();
};

echo "oi2";
