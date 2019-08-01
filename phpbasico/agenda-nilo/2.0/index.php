<?php
// requerimento para conectar com o include
  require_once('include/connectaBD.php');


  $sql = "SELECT * FROM contatos";

  $resultado = $banco->query($sql);

  // $retorno = mysqli_fetch_assoc($resultado);
  // echo $retorno['nome'];

?>

<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>PokeAgenda2.0 - AnDaNilo</title>
<link rel="stylesheet" href="css/folha.css" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
<meta name="keywords" content="PokeAgenda">
<meta name="autor" content="seu nome aqui">
<meta name="description" content="Agenda de contatos e possíveis clientes">
</head>
<body>
<header>
  <?php include('include/inc_topo.php');?>
</header>
<nav>
	<?php include('include/inc_menu.php');?>
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
          <li><a href="#">Favoritos</a></li>
        </ul>
      </div>
    </section>
    <section id="listar">
      <h2>Listando todos os Contatos</h2>
			<h3><a href="contatoAdd.php">Cadastrar Contato</a></h3>
			
			<!-- incio do loop -->
			<?php

				
				while($row = mysqli_fetch_array($resultado)){
					
			?>

      <div class="list">

        <div class="listNome">Nome: <?php echo ($row['nome']);?></div>
        <div class="listTel">Telefone: <?php echo ($row['tel']);?></div>
        <div class="listEmail">Email: <?php echo ($row['email']);?></div>
        <div class="star"><a href="favoritar.php">Favoritar</a></div>
        <div class="up"><a href="contatoUp.php">Editar</a></div>
        <div class="del"><a href="contatoDel.php?id=<?php echo($row['idcontatos'])?>">Excluir</a></div>
			</div> <br>

			<?php
				}
			?>
			<!-- fim do loop -->


    </section>
  </article>
</main>
<footer><?php  include('include/inc_rodape.php');?></footer>
</body>
</html>