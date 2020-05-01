<?php if(!isset($_GET['editar'])){

?>
<form method="POST" action="processa_curso.php">
	<h1>Insira um novo curso</h1>
	<label class="badge badge-secondary" for="Curso">Nome Curso</label>
	<p><input class="form-control"  type="texto" name="nome_curso" placeholder="Insira o nome do curso"></p>
	<br>
	<label class="badge badge-secondary" for="carga_horaria">Carga Horária</label>
	<p><input class="form-control"  type="text" name="carga_horaria" placeholder="Insira a carga horária"></p><br>
	<input class="btn btn-success" type="submit" value="Inserir Curso" >
</form>
<?php } else{ ?>
	<?php while ($linha = mysqli_fetch_array($consulta_cursos)){ ?>
		<?php if ($linha['id_curso'] == $_GET['editar']) {
				 ?>
		<form method="POST" action="edita_curso.php">
			<h1>Editar Curso</h1>
			<input type="hidden" name="id_curso" value="<?php echo $linha['id_curso'];?>">
			<label class="badge badge-secondary" for="Curso">Nome Curso</label>
			<p><input class="form-control"  type="texto" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso'];?>"></p>
			<br>
			<label class="badge badge-secondary" for="carga_horaria">Carga Horária</label>
			<p><input class="form-control"  type="text" name="carga_horaria" placeholder="Insira a carga horária" value="<?php echo $linha['carga_horaria'];?>"></p><br>
			<input class="btn btn-success" type="submit" value="Editar Curso" >
		</form>
		<?php } ?>
	<?php } ?>
<?php } ?>