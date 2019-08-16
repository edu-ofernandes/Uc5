<?php
require_once("Classes/Conexao.php");
require_once("Classes/Categoria.php");

// conexao com banco
$conexao = new Conexao();

if(isset($_POST['btCad'])){
    
    $categorias = new Categoria();

    $nome = $_POST['txtNome'];


    $categorias->setNome($nome);
    
}

?>


<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Usuários - VCSjunior Sistemas</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- FontWaesome -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- Custom login css -->
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-secondary">
        <a class="sidebar-toggle text-ligth mr-3">
            <span class="navbar-toggler-icon"></span>
        </a>
        <a class="navbar-brand" href="#">Painel Administrativo</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown mr-2">
                    <a class="nav-link dropdown-toggle menu-header" id="navbarDropdownMenuNotificacoes" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bullhorn"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuNotificacoes">
                        <a class="dropdown-item" href="#"><i class="far fa-user-circle"></i> Nova notificação 1</a>
                        <a class="dropdown-item" href="#"><i class="far fa-user-circle"></i> Nova notificação 2</a>
                        <a class="dropdown-item" href="#"><i class="far fa-user-circle"></i> Nova notificação 3</a>
                        <a class="dropdown-item" href="#"><i class="far fa-user-circle"></i> Nova notificação 4</a>
                        <a class="dropdown-item" href="#"><i class="far fa-user-circle"></i> Nova notificação 5</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center text-muted" href="#"><i class="far fa-user-circle"></i> Ver
                            totas as notificações</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuUsuario"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="imagens/sistema/geral/no-avatar.png" class="rounded-circle" width="32"
                            height="32"><span class="d-none d-sm-inline ml-2">Usuário Logado</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuUsuario">
                        <a class="dropdown-item" href="#"><i class="far fa-user-circle"></i> Perfil</a>
                        <a class="dropdown-item" href="#"><i class="far fa-envelope"></i> Mensagens</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Sair do sisema</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>

    <!--Inicio conteudo -->
    <div class="d-flex">
        <!--Inicio Menu -->
        <nav class="sidebar">
            <ul class="list-unstyled">
                <li><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>

                <li>
                    <a href="#submenu1" data-toggle="collapse">
                        <i class="fas fa-users"></i> Usuários
                    </a>
                    <ul class="list-unstyled collapse" id="submenu1">
                        <li><a href="#"><i class="fas fa-list-ol"></i> Listar Usuários</a></li>
                        <li><a href="#"><i class="far fa-plus-square"></i> Novo Usuário</a></li>
                    </ul>
                </li>

                <li><a href="#"><i class="fas fa-bars"></i> Menu</a></li>
                <li>
                    <a href="#submenu2" data-toggle="collapse">
                        <i class="fas fa-cogs"></i> Configurações
                    </a>
                    <ul class="list-unstyled collapse" id="submenu2">
                        <li class="active"><a href="#"><i class="far fa-envelope"></i> E-mail</a></li>
                        <li><a href="#"><i class="fas fa-database"></i> Banco de Dados</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fas fa-ambulance"></i> Item de Menu 1</a></li>
                <li><a href="#"><i class="fas fa-list"></i> Item de Menu 2</a></li>
                <li><a href="#"><i class="fas fa-list"></i> Item de Menu 3</a></li>
                <li><a href="#"><i class="fas fa-list"></i> Item de Menu 4</a></li>
                <li class="active"><a href="#"><i class="fas fa-list"></i> Item de Menu 5</a></li>
                <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> Sair do sistema</a></li>

            </ul>
        </nav>
        <!--Fim menu -->


        <!--INICIO APRESENTAR CONTEUDO-->
        <div class="content p-3">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-1">
                        <h2 class="display-4 titulo-pagina">Cadastrar Usuário</h2>
                    </div>
                    <a href="cadastrar.html">
                        <div class="p-1">
                            <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-undo-alt"></i> Listar todos
                            </button>
                        </div>
                    </a>
                </div>
                <div class="dropdown-divider"></div>
                <form action="#" method="POST">
                    <div class="form-row ">
                        <div class="form-group col-md-3">
                            <label for="txtNome ">Nome</label>
                            <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome">
                        </div>                        
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary" name="btCad">Sign in</button>
                </form>






            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->
    </div>
    <!--Fim conteudo -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>