<?php
include_once("Classes/Conexao.php");
include_once("Classes/Categoria.php");
include_once("Classes/ClasseBase.php");
require_once("Classes/DALCategoria.php");


// conexao com banco
$conexao = new Conexao();
// DAL
$dal = new DALCategoria($conexao);


if(isset($_POST['btCad'])){
    $categorias = new Categoria();
    $categorias->setNome(addslashes($_POST['txtNomeCategoria']));
    $dal->inserirCategoria($categorias);
    header("location: cadCategoria.php");
}

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
                        <h2 class="display-4 titulo-pagina">Cadastrar Categoria</h2>
                    </div>
                    <a href="listCategoria.php">
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
                            <label for="txtNomeCategoria">Nome da Categoria</label>
                            <input type="text" class="form-control" id="txtNomeCategoria" name="txtNomeCategoria" placeholder="Nome" required>
                            
                        </div>                        
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary" name="btCad">Sign in</button>
                    <a type="button" class="btn btn-warning " href="listCategoria.php">Voltar</a>
                </form>

            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->
    </div>
    <!--Fim conteudo -->
    <?php require_once("Includes/inc_links.php");?>
</body>

</html>