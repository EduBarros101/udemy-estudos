<?php

require_once("globals.php");
require_once("db.php");
require_once("models/User.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message($BASE_URL);
$userDao = new UserDAO($conn, $BASE_URL);

// Resgata o valor de "type" vindo do formulário e armazerna na variável.
$type = filter_input(INPUT_POST, "type");

// verificação do tipo de formulário.
if ($type === "register") {
  $email = filter_input(INPUT_POST, "email");
  $name = filter_input(INPUT_POST, "name");
  $lastname = filter_input(INPUT_POST, "lastname");
  $password = filter_input(INPUT_POST, "password");
  $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

  // verificação de dados mínimos para prosseguir
  if ($email && $name && $lastname && $password) {

    if ($password === $confirmpassword) {

      // verificar se o e-mail já está cadastrado no sistema.
      if ($userDao->findByEmail($email) === false) {

        $user = new User();

        // criação de Token e Senha
        $userToken = $user->generateToken();
        $finalPassword = $user->generatePassword($password);
      } else {

        // Enviar mensagem de erro. Usuário já existe.
        $message->setMessage("E-mail já cadastrado. Use outro e-mail.", "error", "back");
      }
    } else {
      $message->setMessage("Confirmação de senha inválida.", "error", "back");
    }
  } else {
    // Enviar mensagem de erro de dados faltantes.
    $message->setMessage("Preencha todos os campos.", "error", "back");
  }
} else if ($type === "login") {
}
