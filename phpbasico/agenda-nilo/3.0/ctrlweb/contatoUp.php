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
    <h2>Alterando cadastro</h2>
      <div id="newCad">
        <form action="#" method="post" name="formCad" id="formCad">
          <input type="text" name="txtNome" id="txtNome" placeholder="Nome">
          <input type="text" name="txtTelefone" id="txtTelefone" placeholder="Telefone">
          <input type="text" name="txtEmail" id="txtEMail" placeholder="E-Mail">
			<input type="file" name="upFt" id="upFt" placeholder="Foto">
			<input type="hidden" name="keyContato" id="keyContato">
          <input type="submit" name="btCad" id="btCad" value="Alterar">
        </form>
      </div>
    </section>
  </article>
</main>
<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>
</html>