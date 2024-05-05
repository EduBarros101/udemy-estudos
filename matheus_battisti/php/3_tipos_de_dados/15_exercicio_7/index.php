<?php

$usuario = [
  'nome' => 'Eduardo',
  'sobrenome' => 'Barros',
  'idade' => 43
];

if ($usuario['idade'] >= 18) {
  echo "O usuário {$usuario['nome']} é maior de idade.<br>";
} else {
  echo "O usuário {$usuario['nome']} ainda não é maior de idade.<br>";
}
