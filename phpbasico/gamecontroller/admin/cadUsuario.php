<?php
include_once("Classes/Conexao.php");
include_once("Classes/ClasseBase.php");
include_once("Classes/Usuario.php");
require_once("Classes/DALUsuario.php");


?>

<!doctype html>
<html lang="pt-br">

<head>
    <?php require_once("Includes/inc_header.php");?>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-secondary">
        <?php require_once("Includes/inc_nav.php");?>
    </nav>

    <!--Inicio conteudo -->
    <div class="d-flex">
        
        <?php require_once("Includes/inc_side_bar.php");?>

        <!--INICIO APRESENTAR CONTEUDO-->
        <div class="content p-3">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-1">
                        <h2 class="display-4 titulo-pagina">Cadastrar Usuario</h2>
                    </div>
                    <a href="listUsuario.php">
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
                            <label for="txtNome">Nome</label>
                            <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome" required> <br>

                            <label for="txtNome">Foto</label>
                            <input type="file" class="form-control" id="txtFoto" name="txtFoto" placeholder="Foto" required> <br>

                            
                        </div>

                        <div class="form-group col-md-3">
                            <label for="txtEmail">Email</label>
                            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email" required> <br>

                            <label for="txtBio">Bio</label>
                            <input type="text" class="form-control" id="txtBio" name="txtBio" placeholder="Bio" required> <br>

                        </div>

                        <div class="form-group col-md-3">
                            <label for="txtSenha">Senha</label>
                            <input type="password" class="form-control" id="txtSenha" name="txtSenha" placeholder="Senha" required> <br>
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