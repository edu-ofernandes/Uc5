<?php
// include diz que inclui a conexao com o banco
// require diz que a pagina requer a conexao com o banco

// requirir conexao com a base
require_once('include/connectaBD.php');













	// acessar a tabela e pegar os dados de contatos
	$sql = "SELECT * FROM contatos";
	$result = $banco->query($sql);

	$operacao = false;

	// select da buscar oc contatos
	if(isset($_GET['btSerach'])){
		$operacao = true;

		// letras que foi escrita no campo
		$letras = $_GET['txtBusca'];

		// faz o select de palavras no sql
		$sqlBusca = "SELECT * FROM contatos where nome LIKE '%".$letras."%' ORDER BY nome asc";

		// faz o select das no sql
		
		

		// executa o select
		$resultBusca = $banco->query($sqlBusca);
	}
	
	if(isset($_GET['id'])) {
		// busca de contatos com as letras do alfabeto
		$operacao = true;

		$sqlBusca2 = "SELECT * FROM contatos WHERE nome LIKE '".$_GET['id']."%' ORDER BY nome ASC";
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
		<div id="logo"><a href="index.php"><img src="image/logoTwo.png" alt="Logo PokeAgenda"></a></div>
		
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
						<li><a href="index.php?id=A">A</a></li>
						<li><a href="index.php?id=B">B</a></li>
						<li><a href="index.php?id=C">C</a></li>
						<li><a href="index.php?id=D">D</a></li>
						<li><a href="index.php?id=E">E</a></li>
						<li><a href="index.php?id=F">F</a></li>
						<li><a href="index.php?id=G">G</a></li>
						<li><a href="index.php?id=H">H</a></li>
						<li><a href="index.php?id=I">I</a></li>
						<li><a href="index.php?id=J">J</a></li>
						<li><a href="index.php?id=K">K</a></li>
						<li><a href="index.php?id=L">L</a></li>
						<li><a href="index.php?id=M">M</a></li>
						<li><a href="index.php?id=N">N</a></li>
						<li><a href="index.php?id=O">O</a></li>
						<li><a href="index.php?id=P">P</a></li>
						<li><a href="index.php?id=Q">Q</a></li>
						<li><a href="index.php?id=R">R</a></li>
						<li><a href="index.php?id=S">S</a></li>
						<li><a href="index.php?id=T">T</a></li>
						<li><a href="index.php?id=U">U</a></li>
						<li><a href="index.php?id=V">V</a></li>
						<li><a href="index.php?id=W">W</a></li>
						<li><a href="index.php?id=X">X</a></li>
						<li><a href="index.php?id=Y">Y</a></li>
						<li><a href="index.php?id=Z">Z</a></li>
					</ul>
				</div>
			</section>

		<?php if($operacao==false){ ?>
			<section class="listar">
				<h2>Listando todos os Contatos</h2>
				<!-- loop começa -->
				<?php while($row = mysqli_fetch_array($result)){ ?>

				<div class="list">
					<div class="listNome"><b>Nome: </b><?php echo $row['nome'];?></div>
					<div class="listTel"><b>Telefone:</b> <?php echo $row['tel'];?></div>
					<div class="listEmail"><b>Email:</b> <?php echo $row['email'];?></div>
					<br>

					<div class="del">
						<button class="btnLista">
							<a href="contatoDel.php?id=<?php echo $row['idcontatos']?>">Excluir</a>
						</button>
					</div> 
				</div>
				<?php } ?>
				<!-- loop termina -->
			</section>


		<?php }else{ ?>
			<?php if(isset($_GET['id'])){ ?>
				<?php if(mysqli_num_rows($resultBuscaAlfa) == 0){ ?>

					<h2>Nenhum Resultado encontrado para "<?php echo $_GET['id'];?>"</h2>

				<?php }else{ ?>

			<section class='listar'>	
				<h2>Resultado da busca de contatos pelas letras alfalbeto</h2>

				<?php while($row3 = mysqli_fetch_array($resultBuscaAlfa)){ ?>
						
				<div class="list">
					<div class="listNome">Nome: <?php echo $row3['nome'];?></div>
					<div class="listTel">Telefone: <?php echo $row3['tel'];?></div>
					<div class="listEmail">E-mail: <?php echo $row3['email'];?></div>
					<div class="del">
						<button class="btnLista">
							<a href="contatoDel.php?id=<?php echo $row3['idcontatos']?>">Excluir</a>
						</button>
					</div> 
				</div>

				<?php }?>

			</section>

			<?php }}elseif(isset($_GET['btSerach'])){ ?>
				<?php if(mysqli_num_rows($resultBusca) == 0){ ?>

					<h2>Nenhum Resultado encontrado para "<?php echo $letras;?>"</h2>

				<?php }else{ ?>

			<section class='listar'>
				<h2>Resultado da busca de contatos</h2>

				<?php while($row2 = mysqli_fetch_array($resultBusca)){ ?>

				<div class="list">
					<div class="listNome">Nome: <?php echo $row2['nome'];?></div>
					<div class="listTel">Telefone: <?php echo $row2['tel'];?></div>
					<div class="listEmail">E-mail: <?php echo $row2['email'];?></div>
					<div class="del">
						<button class="btnLista">
							<a href="contatoDel.php?id=<?php echo $row2['idcontatos']?>">Excluir</a>
						</button>
					</div>
				</div>

				<?php } ?>

			</section>

			<?php }?>
		<?php }}?>
			
		</article>
	</main>
	<footer><h3>Desenvolvido por seres supremos &reg; &copy;</h3></footer>
</body>
</html>