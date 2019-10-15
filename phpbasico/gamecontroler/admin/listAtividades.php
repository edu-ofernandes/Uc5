<?php
require_once("Classes/Conexao.php");
require_once("Classes/Verifica.php");
require_once("Classes/ClasseBase.php");



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
                        <h2 class="display-4 titulo-pagina">Atividades</h2>
                    </div>

                    <a href="cadAtividades.php">
                        <div class="p-1">
                            <button class="btn btn-outline-primary">
                                    <i class="far fa-plus-square"></i> Nova Atividade
                            </button>
                        </div>
                    </a>
                </div>

                <div class="card border-success mb-3">
                    <div class="card-body text-success">
                        <p class="card-text text-center"><i class="fas fa-check"></i> Atividades excluído com sucesso</p>
                    </div>
                </div>

                <div class="card border-warning mb-3">
                        <div class="card-body text-warning">
                            <p class="card-text text-center"><i class="fas fa-check"></i> Atividades excluído com sucesso</p>
                        </div>
                    </div>

                    <div class="card border-danger mb-3">
                            <div class="card-body text-danger">
                                <p class="card-text text-center"><i class="fas fa-check"></i> Atividades excluído com sucesso</p>
                            </div>
                        </div>

              


                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="d-none d-md-table-cell">ID</th>
                                <th>ID Usuario</th>
                                <th class="d-none d-md-table-cell">ID Jogo</th>
                                <th class="d-none d-lg-table-cell">Data</th>
                                <th class="d-none d-lg-table-cell">Pontuaçao</th>
                                <th class="d-none d-lg-table-cell">Tempo</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <th class="d-none d-md-table-cell">1</th>
                                <td>1</td>
                                <td class="d-none d-md-table-cell">1</td>
                                <td class="d-none d-lg-table-cell">25/10/2000</td>
                                <td class="d-none d-lg-table-cell">10.000</td>
                                <td class="d-none d-lg-table-cell">05:00 HRS</td>
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
    <?php require_once("Includes/inc_links.php");?>
</body>

</html>