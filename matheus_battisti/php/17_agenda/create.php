<?php

include_once("templates/header.php");

?>

<div class="container">
  <?php include_once("templates/backbtn.php") ?>
  <h1 id="main-title">Criar Contato</h1>

  <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="create">

    <div class="form-floating">
      <input type="text" name="name" id="name" class="form-control" placeholder="Insira o nome" required>
      <label for="name">Nome do Contato</label>
    </div>

    <div class="form-floating">
      <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite o Telefone" required>
      <label for="phone">Digite o Telefone</label>
    </div>

    <div class="form-floating">
      <textarea type="text" name="observations" id="observations" class="form-control" placeholder="Insira as Observações" style="height: 100px;"></textarea>
      <label for="observations">Insira as Observações</label>
    </div>

  </form>
</div>

<?php

include_once("templates/footer.php");

?>