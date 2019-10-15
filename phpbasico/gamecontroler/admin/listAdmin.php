<?php
require_once("Classes/Conexao.php");
require_once("Classes/ClasseBase.php");
require_once("Classes/Admin.php");
require_once("Classes/DALAdmin.php");
require_once("Classes/Verifica.php");


// objeto de conexao
$conexao = new Conexao();

// DAL admin
$dal = new DALAdmin($conexao);


$listarAdmin = $dal->listarAdmin();
$row = count($listarAdmin);


// echo "<pre>";
// var_dump($listarAdmin);
// echo "<br><br><br>";
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
                        <h2 class="display-4 titulo-pagina">Administradores</h2>
                    </div>
                    <a href="cadAdmin.php">
                        <div class="p-1">
                            <button class="btn btn-outline-primary">
                                    <i class="far fa-plus-square"></i> Novo Admin
                            </button>
                        </div>
                    </a>
                </div>

                <div class="card border-success mb-3">
                    <div class="card-body text-success">
                        <p class="card-text text-center"><i class="fas fa-check"></i> Admin excluído com sucesso</p>
                    </div>
                </div>

                <div class="card border-warning mb-3">
                        <div class="card-body text-warning">
                            <p class="card-text text-center"><i class="fas fa-check"></i> Admin excluído com sucesso</p>
                        </div>
                    </div>

                    <div class="card border-danger mb-3">
                            <div class="card-body text-danger">
                                <p class="card-text text-center"><i class="fas fa-check"></i> Admin excluído com sucesso</p>
                            </div>
                        </div>

              


                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="d-none d-md-table-cell">ID</th>
                                <th>Nome Completo</th>
                                <th class="d-none d-md-table-cell">E-mail</th>
                                <!-- <th class="d-none d-lg-table-cell">Senha</th> -->
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <?php   for($i=0; $row > $i ; $i++){?>
                        <tbody>

                            <tr>
                                <th class="d-none d-md-table-cell"><?php echo $listarAdmin[$i]->getId();?></th>
                                <td><?php echo $listarAdmin[$i]->getNome();?></td>
                                <td class="d-none d-md-table-cell"><?php echo $listarAdmin[$i]->getEmail();?></td>
                                <!-- <td class="d-none d-lg-table-cell">*********</td> -->
                                <td class="text-center">
                                    <a href="" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a>

                                    <a href="upAdmin.php?idUp=<?php echo $listarAdmin[$i]->getId();?>"  class="btn btn-sm btn-outline-warning"><i class="far fa-edit"></i></a>

                                    <a href="Classes/DALAdmin.php?id=<?php echo $listarAdmin[$i]->getId();?>" class="btn btn-sm btn-outline-danger" data-confirm=""><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>

                        </tbody>
                        <?php }?>
                    </table>
                </div>

            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->
    </div>

    <!--Fim conteudo -->
    <?php require_once("Includes/inc_links.php");?>
</body>

</html>