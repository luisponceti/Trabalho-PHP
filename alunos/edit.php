<?php 
  require_once('functions.php'); 
  edit();
?>

<h2>Atualizar Aluno</h2>

<form action="edit.php?id=<?php echo $aluno['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="aluno['nome']" value="<?php echo $aluno['nome']; ?>">
    </div>

    <div class="form-group col-md-7">
      <label for="name">CPF</label>
      <input type="text" class="form-control" name="aluno['cpf']" value="<?php echo $aluno['cpf']; ?>">
    </div>

    <div class="form-group col-md-7">
      <label for="name">RA</label>
      <input type="text" class="form-control" name="aluno['ra']" value="<?php echo $aluno['ra']; ?>">
    </div>

    <div class="form-group col-md-7">
      <label for="name">Password</label>
      <input type="password" class="form-control" name="aluno['password']" value="<?php echo $aluno['password']; ?>">
    </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>
