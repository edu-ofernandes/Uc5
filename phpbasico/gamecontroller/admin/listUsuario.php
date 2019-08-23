<?php
include_once("Classes/Conexao.php");
include_once("Classes/ClasseBase.php");
include_once("Classes/Usuario.php");
require_once("Classes/DALUsuario.php");


// objeto de conexao
$conexao = new Conexao();

// DAL admin
$dal = new DALUsuario($conexao);

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
                        <h2 class="display-4 titulo-pagina">Usuários</h2>
                    </div>
                    <a href="cadUsuario.php">
                        <div class="p-1">
                            <button class="btn btn-outline-primary">
                                    <i class="far fa-plus-square"></i> Novo Usuário
                            </button>
                        </div>
                    </a>
                </div>

                <div class="card border-success mb-3">
                    <div class="card-body text-success">
                        <p class="card-text text-center"><i class="fas fa-check"></i> Usuário excluído com sucesso</p>
                    </div>
                </div>

                <div class="card border-warning mb-3">
                        <div class="card-body text-warning">
                            <p class="card-text text-center"><i class="fas fa-check"></i> Usuário excluído com sucesso</p>
                        </div>
                    </div>

                    <div class="card border-danger mb-3">
                            <div class="card-body text-danger">
                                <p class="card-text text-center"><i class="fas fa-check"></i> Usuário excluído com sucesso</p>
                            </div>
                        </div>

              


                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="d-none d-md-table-cell">Foto</th>
                                <th class="d-none d-md-table-cell">ID</th>
                                <th class="d-none d-md-table-cell">Nome Completo</th>
                                <th class="d-none d-md-table-cell">Bio</th>
                                <th class="d-none d-md-table-cell">E-mail</th>
                                <!-- <th class="d-none d-lg-table-cell">Senha</th> -->
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <?php $listarUsuario = $dal->listarUsuario(); while($row=mysqli_fetch_array($listarUsuario)){?>
                        <tbody>
                            <tr>
                                <td class="d-none d-md-table-cell"><img class="img-usuario" src="imagens/<?php echo $row['foto'];?>" alt="" width="150px"></td>
                                <td class="d-none d-md-table-cell"><?php echo $row['id'];?></td>
                                <td><?php echo $row['nome'];?></td>
                                <td class="d-none d-md-table-cell"><?php echo $row['bio'];?></td>
                                <td class="d-none d-md-table-cell"><?php echo $row['email'];?></td>
                                <!-- <td class="d-none d-lg-table-cell">*******</td> -->
                                <td class="text-center">

                                    <button type="button" class="btn btn-sm btn-outline-info"><i
                                            class="fas fa-eye"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-warning"><i
                                            class="far fa-edit"></i></button>
                                    <a href="" type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal"
                                        data-target="#modalConfirmaExcluir"><i class="far fa-trash-alt"></i></a>
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

    <!-- Modal -->
    <div class="modal fade" id="modalConfirmaExcluir" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="exampleModalCenterTitle">CONFIRME PARA EXCLUIR</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    Deseja realmente excluir o registro selecionado ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-undo-alt"></i>
                        CANCELAR</button>
                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> EXCLUIR</button>
                </div>
            </div>
        </div>
    </div>
    <!--Fim conteudo -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>