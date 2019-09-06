<?php
include_once("Classes/Conexao.php");
include_once("Classes/ClasseBase.php");
include_once("Classes/Atividade.php");
// include_once("Classes/DALAtividade.php");

// conexao com banco
$conexao = new Conexao();
// DAL
// $dal = new DALAtividade($conexao);


if(isset($_POST['btCad'])){}
    

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
                        <h2 class="display-4 titulo-pagina">Cadastrar Atividade</h2>
                    </div>
                    <a href="listJogo.php">
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
                            <label for="txtUsuarioId">Usuario</label>
                            <input type="text" class="form-control" id="txtUsuarioId" name="txtUsuarioId" placeholder="Usuario" required>

                            <label for="txtJogoId">Jogo</label>
                            <input type="text" class="form-control" id="txtJogoId" name="txtJogoId" placeholder="Jogo" required>
                        </div>                        
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary" name="btCad">Sign in</button>
                    <a type="button" class="btn btn-warning " href="listAtividades.php">Voltar</a>
                </form>

            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->
    </div>
    <!--Fim conteudo -->
    <?php require_once("Includes/inc_links.php");?>
</body>

</html>