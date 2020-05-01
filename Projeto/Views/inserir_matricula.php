<h1>Inserir nova matrícula</h1>
<label class="badge badge-secondary">Selecione o Aluno</label>

<form method="POST" action="processa_matricula.php">
	<select class="form-control" name="escolha_aluno">
		<option>Selecione um aluno</option>
		<?php
		while ($linha = mysqli_fetch_array($consulta_alunos)){
		echo '<option value="'.$linha['id_aluno'].'" >' .$linha['nome_aluno'].'</option>';
	}	
	?>	

	</select>
	<br><br>
	<label class="badge badge-secondary">Selecione o Curso</label>
	<select class="form-control" name="escolha_curso">
		<option>Selecione um curso</option>
		<?php  
			while ($linha = mysqli_fetch_array($consulta_cursos)){
			echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
			
	}
		
		?>
	</select>
	<br><br>
		<input class="btn btn-success" type="submit"  value="Matricular Aluno">
</form>