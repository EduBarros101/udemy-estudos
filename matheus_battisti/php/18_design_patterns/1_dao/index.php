<?php

include_once("db.php");
include_once("dao/CarDAO.php");

$carDAO = new CarDAO($conn);

$cars = $carDAO->findAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carros</title>
</head>

<body>
  <h1>Insira um carro:</h1>

  <form action="process.php" method="POST">

    <div>
      <label for="brand">Marca do Carro</label>
      <input type="text" name="brand" id="brand" placeholder="Insira a marca">
    </div>

    <div>
      <label for="km">Kilometragem</label>
      <input type="text" name="km" id="km" placeholder="Insira a kilometragem">
    </div>

    <div>
      <label for="color">Cor</label>
      <input type="text" name="color" id="color" placeholder="Insira a cor">
    </div>

    <input type="submit" value="Salvar">

  </form>

  <ul>
    <?php foreach ($cars as $car) : ?>

      <li>
        <?= $car->getBrand() ?> - <?= $car->getColor() ?> - <?= $car->getKm() ?>
      </li>

    <?php endforeach; ?>
  </ul>

</body>

</html>