<?php


require_once("include/connectaBD.php");

// lista de usuarios
$sqlUser = "SELECT * FROM users ORDER BY nome";
$resultUsers = $banco->query($sqlUser);


?>


<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PokeAgenda2.0 - AnDaNilo</title>
    <link rel="stylesheet" href="./css/folha.css" type="text/css">
    <script src="https://kit.fontawesome.com/8e7c1629c9.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <meta name="keywords" content="PokeAgenda">
    <meta name="autor" content="seu nome aqui">
    <meta name="description" content="Agenda de contatos e possíveis clientes">
</head>

<body>
    <?php include('include/inc_menu.php'); ?>
    <main>
        <section class="todos-users">
            <div class="container titulo">
                <h2>Lista de Usuarios</h2>
                <div class="add-users"><a href="usersAdd.php"><i class="fas fa-user-plus"></i></a></div>
            </div>
            <div class="container tabela-user">
                <div class="nome-tabela"><p>Nome</p></div>
                <div class="cargo-tabela"><p>Cargo</p></div>
                <div class="vazio"></div>
            </div>
            <!-- loop começa -->
            <?php while($rowUser = mysqli_fetch_array($resultUsers)){ ?>
            <div class="container registros-user">
                <div class="nomes-registros"><p><?php echo $rowUser['nome'];?></p></div>
                <div class="cargo-registros"><p><?php echo $rowUser['cargo'];?></p></div>
                <div class="botoes">
                    <a href="usersUp.php?id=<?php echo $rowUser['idusers'];?>"><i class="fas fa-edit"></i></a>
                    <a href="usersDel.php?id=<?php echo $rowUser['idusers'];?>"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <?php }?>
            
            <!-- loop termina -->
            
        </section>

    </main>
    
</body>

</html>