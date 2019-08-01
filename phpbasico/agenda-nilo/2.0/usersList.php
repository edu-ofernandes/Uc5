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
        <div id="logo"><img src="image/logoTwo.png" alt="Logo PokeAgenda"></div>
        <div id="search">
            <form action="#" method="get" name="formBusca" id="formBusca">
                <input type="text" name="txtBusca" id="txtBusca" placeholder="Digite parte de um nome">
                <input type="submit" name="btSerach" id="btSearch" value="Buscar">
            </form>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Contatos</a></li>
            <li><a href="usersList.php">Usuários</a></li>
            <li><a href="javascript:history.back();">Voltar</a></li>
    </nav>
    <main>
        <article>
            <h1>Agenda de clientes/contato</h1>
            <section id="listar">
                <h2>Listando Usuarios</h2>
                <h3><a href="usersAdd.php">Cadastrar novos Usuários</a></h3>
                <div class="listUsers">
                    <div class="listNome">Nome:</div>
                    <div class="listTel">Cargo:</div>
                    <div class="listEmail">Email:</div>
                    <div class="up"><a href="usersUp.php">Editar</a></div>
                    <div class="del"><a href="usersDel.php">Excluir</a></div>
                </div>
            </section>
        </article>
    </main>
    <footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>