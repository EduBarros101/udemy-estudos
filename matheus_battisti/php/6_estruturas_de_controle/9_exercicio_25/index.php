<?php

$a = 12;
$b = 70;
$c = "palavra";
$d = "coisa";
$e = 5.3;
$f = "11";

$isNumber = 0;
echo "Resultado antes da função: $isNumber. <br>";

function checkNumber($entry)
{
  global $isNumber;

  if (is_float($entry) || is_int($entry)) {

    $isNumber = $entry * 2;

    echo "Resultado dentro da função: $isNumber.<br>";

    if ($isNumber > 100) {
      echo "O novo número é maior que 100. Agora vale: $isNumber.<br>";
    }
  } else {
    echo "A Entrada não é um número.<br>";
  }
}

checkNumber($b);
echo "Resultado depois da função: $isNumber.<br>";
