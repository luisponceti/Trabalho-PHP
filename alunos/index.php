<?php
require_once('functions.php');
index();
?>


<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>alunos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
			<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Aluno</a>
			<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
		</div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>CPF</th>
			<th>RA</th>
			<th width="30%"></th>
		</tr>
	</thead>
	<tbody>
		<?php if ($alunos) : ?>
			<?php foreach ($alunos as $aluno) : ?>
				<tr>
					<td><?php echo $aluno['id']; ?></td>
					<td><?php echo $aluno['nome']; ?></td>
					<td><?php echo $aluno['cpf']; ?></td>
					<td><?php echo $aluno['ra']; ?></td>

					<td class="actions text-right">
						<a href="view.php?id=<?php echo $aluno['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
						<a href="edit.php?id=<?php echo $aluno['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
						<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-aluno" data-aluno="<?php echo $aluno['id']; ?>">
							<i class="fa fa-trash"></i> Excluir
						</a>
					</td>
				</tr>
			<?php endforeach; ?>
			<?php else : ?>
				<tr>
					<td colspan="6">Nenhum registro encontrado.</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>

	<?php include('modal.php'); ?>

