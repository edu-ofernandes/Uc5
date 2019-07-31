<?php
// requirir conexao com a base
require_once('include/connectaBD.php');

// include diz que inclui a conexao com o banco
// require diz que a pagina requer a conexao com o banco


// acessar a tabela e pegar os dados de contatos
$sql = "SELECT * FROM contatos";
$result = $banco->query($sql);


// select da buscar oc contatos

if(isset($_GET['btSerach'])){
	// letras que foi escrita no campo
	$letras = $_GET['txtBusca'];

	// faz o select em sql
	$sqlBusca = "SELECT * FROM contatos where nome LIKE '%".$letras."%' ORDER BY nome asc";
	// executa o select
	$resultBusca = $banco->query($sqlBusca);

	
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
				<!-- loop começa -->
				<?php while($row = mysqli_fetch_array($result)){ ?>

				<div class="list">
					<div class="listNome">Nome: <?php echo $row['nome']?></div>
					<div class="listTel">Telefone: <?php echo $row['tel']?></div>
					<div class="listEmail">Email: <?php echo $row['email']?></div>
					<br>

				
        	
				<div class="del"><a href="contatoDel.php?id=<?php echo $row['idcontatos']?>">Excluir</a></div> <--! tarefa criar o botao de excluir -->
				</div>
				<?php } ?>
				<!-- loop termina -->


				<?php
					if(isset($_GET['btSerach'])){

						
						echo "<h2>Listando todos os Contatos</h2>";
						while($row2 = mysqli_fetch_array($resultBusca)){
							
							echo $row2["nome"];
							echo "<br>";
						}
					}
				?>
			</section>
		</article>
	</main>
	<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>
</html>