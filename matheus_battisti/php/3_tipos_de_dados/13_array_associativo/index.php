<?php

$user = [
  'auth' => true,
  'admin' => true
];

if ($user['auth']) {
  echo "Usuário autorizado.<br>";
} else {
  echo "Usuário não autorizado.<br>";
}

if ($user['admin']) {
  echo "Conta de administrador.<br>";
} else {
  echo "Conta de usuário padrão.<br>";
}

print_r($user);
