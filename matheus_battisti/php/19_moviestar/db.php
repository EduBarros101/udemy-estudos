<?php

$db_name = "moviestar";
$db_host = "localhost";
$db_user = "eduardo";
$db_pass = "#Barros101";

try {

  $conn = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {

  $error = $e->getMessage();

  echo "Erro: $error.";
}
