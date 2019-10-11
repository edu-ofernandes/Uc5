<?php 
require_once("Classes/Conexao.php");
require_once("Classes/Verifica.php");
require_once("Classes/DALCategoria.php");
require_once("Classes/Categoria.php");
require_once("Classes/DALAdmin.php");
require_once("Classes/Admin.php");
require_once("Classes/DALJogo.php");
require_once("Classes/Jogo.php");
require_once("Classes/DALUsuario.php");
require_once("Classes/Usuario.php");

$conexao = new Conexao();

$dalCat = new DALCategoria($conexao);
$dalAdmin = new DALAdmin($conexao);
$dalJogo = new DALJogo($conexao);
$dalUsua = new DALUsuario($conexao);



// var_dump($dal->TotalCategoria());

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
                        <h2 class="display-4 titulo-pagina">Dashboard</h2>

                    </div>
                </div>

                <div class="dropdown-divider"></div>

                <div class="row my-3">

                
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card bg-orange text-white">
                            <div class="card-body">
                                <div class="row  align-items-center">
                                    <div class="col-6">
                                        <h2>Admin</h2>
                                    </div>
                                    <div class="col-1">
                                        <i class="fas fa-user fa-3x"></i>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h2 class="display-4 text-center"><?php echo ($dalAdmin->TotalAdmin());?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card bg-orange text-white">
                            <div class="card-body">
                                <div class="row  align-items-center">
                                    <div class="col-6">
                                        <h2>Usuarios</h2>
                                    </div>
                                    <div class="col-1">
                                        <i class="fas fa-users fa-3x"></i>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h2 class="display-4 text-center"><?php echo ($dalUsua->TotalUsuario());?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card bg-orange text-white">
                            <div class="card-body">
                                <div class="row  align-items-center">
                                    <div class="col-6">
                                        <h2>Jogos</h2>
                                    </div>
                                    <div class="col-1">
                                        <i class="fas fa-gamepad fa-3x"></i>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h2 class="display-4 text-center"><?php echo ($dalJogo->TotalJogo());?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card bg-orange text-white">
                            <div class="card-body">
                                <div class="row  align-items-center">
                                    <div class="col-7">
                                        <h2>Categorias</h2>
                                    </div>
                                    <div class="col-1">
                                        <i class="fas fa-stream fa-3x"></i>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h2 class="display-4 text-center"><?php echo ($dalCat->TotalCategoria());?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                        <div class="card bg-orange text-white">
                            <div class="card-body">
                                <div class="row  align-items-center">
                                    <div class="col-7">
                                        <h2>Atividades</h2>
                                    </div>
                                    <div class="col-1">
                                        <i class="fas fa-save fa-3x"></i>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h2 class="display-4 text-center">Total<?php //echo ($dalCat->TotalCategoria());?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 mt-4">
                        <div class="card bg-orange text-white">
                            <div class="card-body">
                                <div class="row  align-items-center">
                                    <div class="col-7">
                                        <h2>Jogos dos Usuarios</h2>
                                    </div>
                                    <div class="col-1">
                                        <i class="fas fa-stream fa-3x"></i>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h2 class="display-4 text-center">Total<?php //echo ($dalCat->TotalCategoria());?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>


            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->

    </div>
    <!--Fim conteudo -->

    <?php require_once("Includes/inc_links.php");?>
</body>

</html>