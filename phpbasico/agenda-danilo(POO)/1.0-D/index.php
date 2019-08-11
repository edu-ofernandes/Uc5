<?php

require_once("classes/ClasseBase.php");
require_once("classes/Conexao.php");
require_once("classes/Contato.php");
require_once("classes/DALContato.php");

$conexao = new Conexao();
$dal = new DALContato($conexao);




// listando todos contatos
$result = $dal->listar();


// busca
if(isset($_GET['btSerach'])){
	$letra = $_GET['txtBusca'];
	$resultBusca = $dal->listarBusca($letra);
		
}


// letras alfabeto
if(isset($_GET['id'])){
	$letraAlf = $_GET['id']; 

	$resultAlfa = $dal->listarBusca($letraAlf);

}






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
			<form action="#" method="get" name="formBusca" id="formBusca">
				<input type="text" name="txtBusca" id="txtBusca" placeholder="Digite parte de um nome">
				<input type="submit" name="btSerach" id="btSearch" value="Buscar">
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
							<li><a href="index.php?id=<?php echo $letraAlf='A'?>">A</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='B'?>">B</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='C'?>">C</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='D'?>">D</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='E'?>">E</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='F'?>">F</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='G'?>">G</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='H'?>">H</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='I'?>">I</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='J'?>">J</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='K'?>">K</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='L'?>">L</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='M'?>">M</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='N'?>">N</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='O'?>">O</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='P'?>">P</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='Q'?>">Q</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='R'?>">R</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='S'?>">S</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='T'?>">T</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='U'?>">U</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='V'?>">V</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='W'?>">W</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='X'?>">X</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='Y'?>">Y</a></li>
							<li><a href="index.php?id=<?php echo $letraAlf='Z'?>">Z</a></li>
						
						</ul>
					</div>
				</section>

				

				<?php  if(empty($_GET['id'])){ ?>
				<!-- todos contatos -->
				<section id="listar">
					<h2>Listando contatos</h2>
					
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
				<?php }elseif(isset($_GET['id'])){ ?>
				<!-- todos contaos da busca do alfabeto -->
				<section id="listar">
					<h2>Listando contatos</h2>
					

					<div class="list">
						<?php $countAlfa = count($resultAlfa);
						for ($i = 0; $i < $countAlfa; $i++) { $obj = $resultAlfa[$i];?>
						<div class="listNome">Nome: <?php echo $obj->GetNome();?></div>
						<div class="listTel">Telefone: <?php echo $obj->GetTel();?></div>
						<div class="listEmail">Email: <?php echo $obj->GetEmail();?></div>
						
						<div class="del"><a href="contatoDel.php?id=<?php echo $obj->GetId();?>">Excluir</a></div>
						<?php }?>
					</div>
					
				</section>
				<?php }?>

				<!-- todos contaos da busca -->
				<?php if(isset($_GET['btSerach'])){ $countBusca = count($resultBusca); if($countBusca != 0){ ?>
				<section id="listar">
					<h2>Resultado da Busca</h2>
					<?php for ($j = 0; $j < $countBusca; $j++) { $objBusca = $resultBusca[$j];?>
					<div class="list">	
						<div class="listNome">Nome: <?php echo $objBusca->GetNome();?></div>
						<div class="listTel">Telefone: <?php echo $objBusca->GetTel();?></div>
						<div class="listEmail">Email: <?php echo $objBusca->GetEmail();?></div>
						
						<div class="del"><a href="contatoDel.php?id=<?php echo $objBusca->GetId();?>">Excluir</a></div>
					</div>
					<?php }?>
				</section>

				<?php }else{?>
					<h2>Nenhum resultado encontrado</h2>
				<?php }}?>


			
		</article>
	</main>
	<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>
</html>