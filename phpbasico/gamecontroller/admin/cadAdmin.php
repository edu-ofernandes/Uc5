<?php
include_once("Classes/Conexao.php");
include_once("Classes/ClasseBase.php");
include_once("Classes/Admin.php");
include_once("Classes/DALAdmin.php");


// conexao com banco
$conexao = new Conexao();
// DAL
$dal = new DALAdmin($conexao);





if(isset($_POST['btCad'])){

    $admin = new Admin();
    $admin->setNome(addslashes($_POST['txtNome']));
    $admin->setEmail(addslashes($_POST['txtEmail']));
    $admin->setSenha(addslashes(md5($_POST['txtSenha'])));

    $dal->inserirAdmin($admin);
    
    header("location: cadAdmin.php");
}
// echo "<pre>";
// echo "</pre>";


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
                        <h2 class="display-4 titulo-pagina">Cadastrar Administradores</h2>
                    </div>
                    <a href="listAdmin.php">
                        <div class="p-1">
                            <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-undo-alt"></i> Listar todos
                            </button>
                        </div>
                    </a>
                </div>
                <div class="dropdown-divider"></div>
                
                <form action="#" method="POST">
                    <div class="form-col ">
                        <div class="form-group col-md-4">  
                            <label for="txtNome ">Nome</label>
                            <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome" value="">
                        </div>                        
                        <div class="form-group col-md-4">
                            <label for="txtEmail">Email</label>
                            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email" value="">
                        </div>                        
                        <div class="form-group col-md-4">
                            <label for="txtSenha">Senha</label>
                            <input type="password" class="form-control" id="txtSenha" name="txtSenha" placeholder="Senha" value="">
                        </div>                        
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary" name="btCad">Cadastrar</button>
                    <a type="button" class="btn btn-warning " href="listAdmin.php">Voltar</a>
                </form>
           
            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->
    </div>
    <!--Fim conteudo -->
    <?php require_once("Includes/inc_links.php");?>
</body>

</html>