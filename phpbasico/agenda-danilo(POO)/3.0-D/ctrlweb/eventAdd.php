<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>PokeAgenda3.0 - AnDaNilo - Controle</title>
<link rel="stylesheet" href="../css/folha.css" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
</head>
<body>
<header>
  <div id="logo"><img src="../image/top_key.png" alt="Logo PokeAgenda"> Paínel de controle</div>
  <div id="search">
    <form action="#" method="get" name="formBusca" id="formBusca">
      <input type="text" name="txtBusca" id="txtBusca" placeholder="Busca">
      <input type="submit" name="btSerach" id="btSearch" value="Buscar">
    </form>
  </div>
</header>
<nav>
  <ul>
    <li><a href="admin.php">Inicio</a></li>
    <li><a href="contatos.php">Contatos</a></li>
    <li><a href="users.php">Usuários</a></li>
    <li><a href="event.php">Eventos</a></li>
    <li><a href="sair.php">Sair</a></li>
  </ul>
</nav>
<main>
  <article>
    <section id="listar">
      <h2>Cadastrar Eventos</h2>
     <form action="#" method="post" name="formEvent" id="formEvent">
	<input type="text" name="txtTitulo" id="txtTitulo" placeholder="Titulo">	
	<label for="txtData">Data</label><input type="date" name="txtData" id="txtData" placeholder="Data">
	<input type="text" name="txtHora" id="txtHora" placeholder="Hora">
	<input type="text" name="txtLocal" id="txtLocal" placeholder="Local">
	<input type="text" name="txtEnd" id="txtEnd" placeholder="Endereço">
	<textarea name="obs" id="obs" cols="30" rows="10" placeholder="Observações"></textarea>
	<select name="selConcluido" id="selConcluido">
		<option value=" ">Já realizado</option>
		<option value="0">Não</option>
		<option value="1">Sim</option> 
		</select>
		 <input type="submit" name="btCad" id="btCad" value="Cadastrar">
	</form>
    </section>
  </article>
</main>
<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>
</html>