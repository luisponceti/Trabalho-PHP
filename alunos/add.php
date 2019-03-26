<?php 
  require_once('functions.php'); 
  add();
?>


<h2>Novo Aluno</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="aluno['nome']">
    </div>

    <div class="form-group col-md-7">
      <label for="name">CPF</label>
      <input type="text" class="form-control" name="aluno['cpf']">
    </div>

    <div class="form-group col-md-7">
      <label for="name">RA</label>
      <input type="text" class="form-control" name="aluno['ra']">
    </div>

    <div class="form-group col-md-7">
      <label for="name">Password</label>
      <input type="password" class="form-control" name="aluno['password']">
    </div>
  </div>   
  
   <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>
