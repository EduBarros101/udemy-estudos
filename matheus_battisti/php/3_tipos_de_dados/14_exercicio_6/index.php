<?php

$veiculo = [
  'tipo' => 'Moto',
  'fabricante' => 'Yamaha',
  'proprietario' => 'Eduardo Barros',
  'quitado' => false,
  'qtdRodas' => 2,
  'cor' => 'Preto Fosco'
];

print_r($veiculo);
echo "<br>";

echo $veiculo['tipo'];
echo "<br>";

echo $veiculo['proprietario'];
echo "<br>";

echo "Veículo do tipo {$veiculo['tipo']}. Proprietário: {$veiculo['proprietario']}.<br>";
