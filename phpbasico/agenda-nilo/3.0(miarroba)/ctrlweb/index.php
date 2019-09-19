<?php
require_once("../include/connectaBD.php");



?>





<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>PokeAgenda3.0 - AnDaNilo</title>
	<link rel="stylesheet" href="../css/folha.css" type="text/css">
	<link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
	<meta name="keywords" content="PokeAgenda">
	<meta name="autor" content="seu nome aqui">
	<meta name="description" content="Agenda de contatos e possíveis clientes">
</head>

<body>
	<header>
		<div id="logo"><img src="../image/top_key.png" alt="Logo PokeAgenda"> Paínel de controle</div>
	</header>

	<main>
		<article>
			<section id="login">
				<h1>Login de acesso</h1>
				<div id="acesso">
					<form action="../include/verificaBD.php" method="post" name="formAdmin" id="formAdmin">
						<input type="text" name="txtLogin" id="txtAdmin" placeholder="Login">
						<input type="password" name="txtSenha" id="txtSenha" placeholder="Senha">
						<input type="submit" name="btEntrar" id="btEntrar" value="Entrar"> <br>

						<h1>Esqueçeu sua senha? clique no botao para redefinir!</h1> <br>
						<a type="button" name="redefinirSenha" id="redefinirSenha" href="../last.php" class="redefinirSenha">Redefinir </a>

					</form>
				</div>

			</section>
		</article>
	</main>
	<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>