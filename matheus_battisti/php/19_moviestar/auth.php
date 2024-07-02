<?php

require_once("templates/header.php")

?>

<div id="main-container" class="container-fluid">
  <div class="col-md-12">
    <div class="row" id="auth-row">

      <div class="col-md-4" id="login-container">
        <h2>Entrar</h2>

        <form action="#" method="POST">
          <input type="hidden" name="type" value="login">

          <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha">
          </div>

          <input type="submit" value="Entrar" class="btn card-btn">

        </form>

      </div>

      <div class="col-md-4" id="login-container">
        <h2>Criar Conta</h2>

        <form action="#" method="post">
          <input type="hidden" name="type" value="register">

          <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Digite seu nome">
          </div>

          <div class="mb-3">
            <label for="lastname" class="form-label">Sobrenome:</label>
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Digite seu sobrenome">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha">
          </div>

          <div class="mb-3">
            <label for="confirmpassword" class="form-label">Confirme sua Senha:</label>
            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Repita sua senha">
          </div>

          <input type="submit" value="Registrar" class="btn card-btn">

        </form>
      </div>

    </div>
  </div>
</div>

<?php

require_once("templates/footer.php")

?>