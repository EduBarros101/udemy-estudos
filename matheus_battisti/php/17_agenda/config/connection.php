<?php

$host = "localhost";
$db = "agenda";
$dataSource = "mysql:host=$host;dbname=$db";
$user = "eduardo";
$pass = "#Barros101";


try {

  $conn = new PDO($dataSource, $user, $pass);

  // Ativação de mensagem de erros
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  $error = $e->getMessage();
  echo "Erro: $error.";
};
