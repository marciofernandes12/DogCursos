<?php if(!isset($_GET['editar'])){ ?>

<form method="POST" action="processa_aluno.php">
	<h1>Insira um novo aluno</h1>
	<label class="badge badge-secondary">Nome do Aluno</label>
	<p><input class="form-control" type="texto" name="nome_aluno" placeholder="Insira o nome do aluno"></p>
	<br>
	<label class="badge badge-secondary">Data de Nascimento</label>
	<p><input  class="form-control" type="text" name="data_nascimento" placeholder="Insira a Data de Nascimento"></p><br>
	<input class="btn btn-success" type="submit" value="Inserir Aluno" >
</form>

<?php } else{ ?>
	<?php while ($linha = mysqli_fetch_array($consulta_alunos)){ ?>
		<?php if ($linha['id_aluno'] == $_GET['editar']) {
				 ?>
				 <form method="POST" action="edita_aluno.php">
				<h1>Editar um aluno</h1>
				<input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno'];?>">
				<label class="badge badge-secondary">Nome do Aluno</label>
				<p><input class="form-control"  type="texto" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno'];?>"></p>
				<br>
				<label class="badge badge-secondary">Data de Nascimento</label>
				<p><input  class="form-control" type="text" name="data_nascimento" placeholder="Insira a Data de Nascimento" value="<?php echo $linha['data_nascimento']?>"></p><br>
				<input class="btn btn-success" type="submit" value="Editar Aluno">

		<?php } ?>
	<?php } ?>
<?php } ?>