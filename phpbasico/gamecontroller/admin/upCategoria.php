<?php
include_once("Classes/Conexao.php");
include_once("Classes/Categoria.php");
include_once("Classes/ClasseBase.php");
require_once("Classes/DALCategoria.php");


// conexao com banco
$conexao = new Conexao();
// DAL
$dal = new DALCategoria($conexao);

if(isset($_GET['idUp'])){
    $idCategoria = $_GET['idUp'];
    $listarCategoria = $dal->listarIdCategoria($idCategoria);
    $row = mysqli_fetch_array($listarCategoria);

    if(isset($_POST['btCad'])){
        $categoria = new Categoria();
        $categoria->setId($idCategoria);
        $categoria->setNome(addslashes($_POST['txtNomeCategoria']));

        $dal->alterarCategoria($categoria);
        header("location: listCategoria.php");
    
    }
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
                        <h2 class="display-4 titulo-pagina">Alterar dados de Categoria</h2>
                    </div>
                    <a href="listCategoria.php">
                        <div class="p-1">
                            <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-undo-alt"></i> Listar todas
                            </button>
                        </div>
                    </a>
                </div>
                <div class="dropdown-divider"></div>
                <form action="#" method="POST">
                    <div class="form-row ">
                        <div class="form-group col-md-3">
                            <label for="txtNomeCategoria">Nome da Categoria</label>
                            <input type="text" class="form-control" id="txtNomeCategoria" name="txtNomeCategoria" placeholder="Nome" required value="<?php echo $row['nome'];?>">
                            
                        </div>                        
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary" name="btCad">Sign in</button>
                    <a type="button" class="btn btn-danger" href="listCategoria.php">Cancelar</a>
                </form>

            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->
    </div>
    <!--Fim conteudo -->
    <?php require_once("Includes/inc_links.php");?>
</body>

</html>