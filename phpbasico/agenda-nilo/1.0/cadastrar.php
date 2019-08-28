<?php

	// requerimento de conexao com banco
	require_once('include/connectaBD.php');

	// cadastrar um contato

	if(isset($_POST['btCad'])){

		$nome = $_POST['txtNome'];
		$tel = $_POST['txtTelefone'];
		$email = $_POST['txtEmail'];

		$execute_insert = "INSERT INTO contatos VALUES (null, '$nome','$tel','$email')";

		if(mysqli_query($banco, $execute_insert)) {
			header("location: cadastrar.php");
		}else{
			echo ("deu errado");
		}
	}

?>



<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>PokeAgenda - AnDaNilo - Cadastrar</title>
	<link rel="stylesheet" href="css/folha.css" type="text/css">
	<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
	<meta name="keywords" content="PokeAgenda">
	<meta name="autor" content="seu nome aqui">
	<meta name="description" content="Agenda de contatos e possíveis clientes">
</head>
<body>
	<header>
		<div id="logo"><a href="index.php"><img src="image/logoTwo.png" alt="Logo PokeAgenda"></a></div>
	</header>
	<nav>
		<button class="btnNav"><a href="index.php">Home</a></button> 
		<button class="btnNav"> <a href="cadastrar.php">Cadastrar</a></button>
	</nav>
	<main>
		<article>
			
			
			<section class="listar">
				<h2>Novo cadastro</h2>
				
				<div id="newCad">
					<form action="#" method="post" name="formCad" id="formCad">
						<input type="text" name="txtNome" id="txtNome" placeholder="Nome" required>
						<input type="number" name="txtTelefone" id="txtTelefone" placeholder="Telefone" required>
						<input type="email" name="txtEmail" id="txtEMail" placeholder="E-Mail" required>
						<input type="submit" name="btCad" id="btCad" value="Cadastrar">
					</form>
				</div>
				
			</section>
		</article>
	</main>
	<footer><h3>Desenvolvido por seres supremos &reg; &copy;</h3></footer>


</body>
</html>