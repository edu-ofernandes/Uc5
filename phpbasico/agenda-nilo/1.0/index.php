<?php
// include diz que inclui a conexao com o banco
// require diz que a pagina requer a conexao com o banco

// requirir conexao com a base
require_once('include/connectaBD.php');



// acessar a tabela e pegar os dados de contatos
$sql = "SELECT * FROM contatos";
$result = $banco->query($sql);



// select da buscar oc contatos
if(isset($_GET['btSerach'])){

	// letras que foi escrita no campo
	$letras = $_GET['txtBusca'];

	// faz o select de palavras no sql
	$sqlBusca = "SELECT * FROM contatos where nome LIKE '%".$letras."%' ORDER BY nome asc";

	// faz o select das no sql
	
	

	// executa o select
	$resultBusca = $banco->query($sqlBusca);
	
	
}

// busca de contatos com as letras do alfabeto

if(isset($_GET['id'])){
	$letrasAlfa = $_GET['id'];
	$sqlBusca2 = "SELECT * FROM contatos WHERE nome LIKE '".$letrasAlfa."%' ORDER BY nome ASC";
	$resultBuscaAlfa = $banco->query($sqlBusca2);
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
		<button class="btnNav"><a href="index.php">Home</a></button> 
		<button class="btnNav"> <a href="cadastrar.php">Cadastrar</a></button>
	</nav>
	<main>
		<article>

			
			<section id="menuAlfabeto">
			<h1>Agenda de clientes/contato</h1>
				<div id="alfabeto">
					<ul>
						
						<li><a href="index.php?id=<?php echo $letrasAlfa='A';?>">A</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='B';?>">B</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='C';?>">C</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='D';?>">D</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='E';?>">E</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='F';?>">F</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='G';?>">G</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='H';?>">H</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='I';?>">I</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='J';?>">J</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='K';?>">K</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='L';?>">L</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='M';?>">M</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='N';?>">N</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='O';?>">O</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='P';?>">P</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='Q';?>">Q</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='R';?>">R</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='S';?>">S</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='T';?>">T</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='U';?>">U</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='V';?>">V</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='W';?>">W</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='X';?>">X</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='Y';?>">Y</a></li>
						<li><a href="index.php?id=<?php echo $letrasAlfa='Z';?>">Z</a></li>
					
					</ul>
				</div>
			</section>

			
			<?php
				if(isset($_GET['id'])){

					echo ("<section class='listar'>");
					echo ("<h2>Resultado da busca de contatos pelas letras alfalbeto</h2>");

					//loop da busca do alfabeto começa 
					while($row3 = mysqli_fetch_array($resultBuscaAlfa)){

				?>
					
				<div class="list">
					<div class="listNome">Nome: <?php echo $row3['nome'];?></div>
					<div class="listTel">Telefone: <?php echo $row3['tel'];?></div>
					<div class="listEmail">E-mail: <?php echo $row3['email'];?></div>
				</div>
						
					
				<?php
					}
					echo ("</section>");
					
				}
					//loop da busca termina 
				?>

			
			<section class="listar">
			<h2>Listando todos os Contatos</h2>
				<!-- loop começa -->
				<?php while($row = mysqli_fetch_array($result)){ ?>

				<div class="list">
					<div class="listNome">Nome: <?php echo $row['nome'];?></div>
					<div class="listTel">Telefone: <?php echo $row['tel'];?></div>
					<div class="listEmail">Email: <?php echo $row['email'];?></div>
					<br>

			
					<div class="del">
						<button class="btnLista">
							<a href="contatoDel.php?id=<?php echo $row['idcontatos']?>">Excluir</a>
						</button>
					</div> <!-- tarefa criar o botao de excluir -->
				</div>
				<?php } ?>
				<!-- loop termina -->
				</section>


				<?php
					if(isset($_GET['btSerach'])){

						echo ("<section class='listar'>");
						echo ("<h2>Resultado da busca de contatos</h2>");

						//loop da busca começa 
						while($row2 = mysqli_fetch_array($resultBusca)){

				?>
					
					<div class="list">
						<div class="listNome">Nome: <?php echo $row2['nome'];?></div>
						<div class="listTel">Telefone: <?php echo $row2['tel'];?></div>
						<div class="listEmail">E-mail: <?php echo $row2['email'];?></div>
					</div>
						
					
				<?php
						}
						echo ("</section>");
					}
					//loop da busca termina 
				?>
				
			
		</article>
	</main>
	<footer><h2>Desenvolvido por seres supremos &reg; &copy;</h2></footer>
</body>
</html>