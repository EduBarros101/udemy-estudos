<?php

$autorizado = false;

if ($autorizado) {
  echo "Usuário autorizado.<br>";
} else {
  echo "Usuário não autorizado.<br>";
}

if (is_bool(0 == false)) {
  echo "É um booleano.<br>";
} else {
  echo "Não é booleano.<br>";
}
