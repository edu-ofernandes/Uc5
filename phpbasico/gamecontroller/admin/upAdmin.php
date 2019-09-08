<?php
include_once("Classes/Conexao.php");
include_once("Classes/ClasseBase.php");
include_once("Classes/Admin.php");
include_once("Classes/DALAdmin.php");
require_once("Classes/Verifica.php");

// conexao com banco
$conexao = new Conexao();
// DAL
$dal = new DALAdmin($conexao);


$idAdmin = $_GET['idUp'];
$listarAdminId = $dal->listarAdminId($idAdmin);



if(isset($_POST['btCad'])){
    $admin = new Admin();
    $admin->setId(addslashes($idAdmin));
    $admin->setNome(addslashes($_POST['txtNome']));
    $admin->setEmail(addslashes($_POST['txtEmail']));
    $admin->setSenha($listarAdminId->getSenha());

    $dal->alterarAdmin($admin);
    header("location: listAdmin.php");
}
    
    
  

// echo "<pre>";
// var_dump($listarAdminId);
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
                
                <?php if(isset($_GET['idUp'])){ ?>
                <form action="#" method="POST">
                    <div class="form-col ">
                        <div class="form-group col-md-4">  
                            <label for="txtNome ">Nome</label>
                            <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome" value="<?php echo $listarAdminId->getNome();?>">
                        </div>                        
                        <div class="form-group col-md-4">
                            <label for="txtEmail">Email</label>
                            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email" value="<?php echo $listarAdminId->getEmail()?>">
                        </div>                        
                        <div class="form-group col-md-4">
                            <label for="txtSenha">Senha</label>
                            <input type="password" class="form-control" id="txtSenha" name="txtSenha" placeholder="Senha" value="<?php echo $listarAdminId->getSenha();?>">
                        </div>                        
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary" name="btCad">Atualizar</button>
                    <a type="button" class="btn btn-danger" href="listAdmin.php">Cancelar</a>
                </form>
                <?php }?>
            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->
    </div>
    <!--Fim conteudo -->
    <?php require_once("Includes/inc_links.php");?>
</body>

</html>