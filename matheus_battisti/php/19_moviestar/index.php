<?php

require_once("globals.php");
require_once("db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MovieStar</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="shortcut icon" href="<?= $BASE_URL ?>img/moviestar.ico" type="image/x-icon">

  <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>

<body>
  <header>
    <nav id="main-navbar" class="navbar navbar-expand-lg">
      <a href="<?= $BASE_URL ?>" class="navbar-brand">
        <img src="<?= $BASE_URL ?>img/logo.svg" alt="MovieStar" id="logo">
        <span id="moviestar-title">MovieStar</span>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <form action="" id="search-form" class="d-flex my-2 my-lg-0" method="GET">
        <input type="search" name="q" id="search" class="form-control mr-sm-2" placeholder="Buscar Filmes" aria-label="Search">

        <button class="btn my-2 my-sm-0" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar/Cadastrar</a>
          </li>
        </ul>
      </div>

    </nav>
  </header>

  <div id="main-container" class="container-fluid">
    <h1>Corpo do Site</h1>
  </div>

  <footer id="footer">
    <div class="social-container">
      <ul>
        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
      </ul>
      <ul>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      </ul>
      <ul>
        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
      </ul>
    </div>

    <div id="footer-links-container">
      <ul>
        <li><a href="#">Adicionar Filme</a></li>
        <li><a href="#">Adicionar Crítica</a></li>
        <li><a href="#">Entrar/Registrar</a></li>
      </ul>
    </div>

    <p>&copy; 2024 Eduardo Barros</p>

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>