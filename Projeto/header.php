<!DOCTYPE html>
<html>
<head>
	<title>DogCursos</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="CSS/fontawesome/css/all.css">
	<link rel="stylesheet" href="CSS/style.css">
	
<body>
	<header>
		<div class="container">
			<a href="?pagina=home"><img src="img/logo.png" class="img" title="Logo" alt="Logo"></a>
			<div id=menu>
			<a href="?pagina=cursos">Cursos</a>
			<a href="?pagina=alunos">Alunos</a>
			<a href="?pagina=matriculas">Matrículas</a>
			<?php if(isset($_SESSION['login'])){?>
				<a href="logout.php">
				<?php echo $_SESSION['usuario'];?> (sair)</a>
		<?php }?>
		</div>	
	</div>
	</header>
	
			<div id="conteudo" class="container">


	
	

