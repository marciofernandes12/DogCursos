<?php  
$servidor = "localhost";
$usuario  = "root";
$senha = "mf260298";
$database = "aula_php";

$conexao = mysqli_connect($servidor,$usuario,$senha,$database);

$query="SELECT * FROM CURSOS";
$consulta_cursos= mysqli_query($conexao,$query);

$query="SELECT * FROM Alunos";
$consulta_alunos= mysqli_query($conexao,$query);

$query="SELECT aluno_curso.id_aluno_curso,alunos.nome_aluno, cursos.nome_curso 
		 FROM alunos,cursos,aluno_curso 
		 Where aluno_curso.id_aluno = alunos.id_aluno 
		 AND aluno_curso.id_curso = cursos.id_curso";
$consulta_matriculas= mysqli_query($conexao,$query);

?>