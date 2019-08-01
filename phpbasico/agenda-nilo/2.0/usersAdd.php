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
    <section id="listar">
      <h2>Cadastro Usuarios</h2>
     <div id="newUser">
		<form action="#" method="post" id="formUser" name="formUser">
		 <input type="text" name="txtNome" id="txtNome" placeholder="Nome User">
			<input type="text" name="txtCargo" id="txtCargo" placeholder="Cargo">
			<input type="submit" name="btCad" id="btCad" value="Cadastrar">
		 </form>	
	</div>
    </section>
  </article>
</main>
<footer><?php  include('include/inc_rodape.php');?></footer>
</body>
</html>