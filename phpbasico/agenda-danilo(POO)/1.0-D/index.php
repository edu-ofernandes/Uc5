<?php

require_once("classes/ClasseBase.php");
require_once("classes/Conexao.php");
require_once("classes/Contato.php");
require_once("classes/DALContato.php");

$conexao = new Conexao();
$dal = new DALContato($conexao);

$result = $dal->listar();










?>




<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>PokeAgenda - AnDaNilo</title>
	<link rel="stylesheet" href="css/folha.css" type="text/css">
	<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
	<meta name="keywords" content="PokeAgenda">
	<meta name="autor" content="seu nome aqui">
	<meta name="description" content="Agenda de contatos e possíveis clientes">
</head>
<body>
	<header>
		<div id="logo"><img src="image/logoTwo.png" alt="Logo PokeAgenda"></div>
		<div id="search">
			<form action="#" method="get" name="formBusca" id="formBusca"><input type="text" name="txtBusca" id="txtBusca" placeholder="Digite parte de um nome"><input type="submit" name="btSerach" id="btSearch" value="Buscar">
			</form>
		</div>
	</header>
	<nav>
		<a href="index.php">Home</a> | <a href="cadastrar.php">Cadastrar</a>
	</nav>
	<main>
		<article>
			<h1>Agenda de clientes/contato</h1>
			<section id="menuAlfabeto">
				<div id="alfabeto">
					<ul>
						<li><a href="#">A</a></li>
						<li><a href="#">B</a></li>
						<li><a href="#">C</a></li>
						<li><a href="#">D</a></li>
						<li><a href="#">E</a></li>
						<li><a href="#">F</a></li>
						<li><a href="#">G</a></li>
						<li><a href="#">H</a></li>
						<li><a href="#">I</a></li>
						<li><a href="#">J</a></li>
						<li><a href="#">K</a></li>
						<li><a href="#">L</a></li>
						<li><a href="#">M</a></li>
						<li><a href="#">N</a></li>
						<li><a href="#">O</a></li>
						<li><a href="#">P</a></li>
						<li><a href="#">Q</a></li>
						<li><a href="#">R</a></li>
						<li><a href="#">S</a></li>
						<li><a href="#">T</a></li>
						<li><a href="#">U</a></li>
						<li><a href="#">V</a></li>
						<li><a href="#">W</a></li>
						<li><a href="#">X</a></li>
						<li><a href="#">Y</a></li>
						<li><a href="#">Z</a></li>
					
					</ul>
				</div>
			</section>
			<section id="listar">
				<h2>Listando todos os Contatos</h2>
				
				<div class="list">
					<?php $count = count($result);
					for ($i = 0; $i < $count; $i++) { $obj = $result[$i];?>
					<div class="listNome">Nome: <?php echo $obj->GetNome();?></div>
					<div class="listTel">Telefone: <?php echo $obj->GetTel();?></div>
					<div class="listEmail">Email: <?php echo $obj->GetEmail();?></div>
					
					<div class="del"><a href="contatoDel.php?id=<?php echo $obj->GetId();?>">Excluir</a></div>
					<?php }?>
				</div>
				
			</section>
		</article>
	</main>
	<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>
</html>