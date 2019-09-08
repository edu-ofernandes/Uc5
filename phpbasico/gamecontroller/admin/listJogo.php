<?php
include_once("Classes/Conexao.php");
include_once("Classes/ClasseBase.php");
include_once("Classes/Jogo.php");
require_once("Classes/DALJogo.php");
require_once("Classes/DALCategoria.php");
require_once("Classes/Verifica.php");


// objeto de conexao
$conexao = new Conexao();

// DAL Jogo e Catgeoria
$dalJogo = new DALJogo($conexao);
$dalCategoria = new DALCategoria($conexao);

$listarJogo = $dalJogo->listarJogo();
$row = count($listarJogo);


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
                        <h2 class="display-4 titulo-pagina">Jogos</h2>
                    </div>
                    
                        <div class="p-1">                      
                            <a href="cadJogo.php" class="btn btn-outline-primary"><i class="far fa-plus-square"></i> Novo Jogo</a>
                        </div>
                   
                </div>

                <div class="card border-success mb-3">
                    <div class="card-body text-success">
                        <p class="card-text text-center"><i class="fas fa-check"></i> Jogo excluído com sucesso</p>
                    </div>
                </div>

                <div class="card border-warning mb-3">
                        <div class="card-body text-warning">
                            <p class="card-text text-center"><i class="fas fa-check"></i> Jogo excluído com sucesso</p>
                        </div>
                    </div>

                    <div class="card border-danger mb-3">
                            <div class="card-body text-danger">
                                <p class="card-text text-center"><i class="fas fa-check"></i> Jogo excluído com sucesso</p>
                            </div>
                        </div>

              


                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="d-none d-md-table-cell text-center">Foto</th>
                                <th class="d-none d-md-table-cell">ID</th>
                                <th>Nome Completo</th>
                                <th class="d-none d-md-table-cell">Categoria</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <?php for($i = 0; $row > $i; $i++){ 
                                $listarCategoriaId = $dalCategoria->listarCategoriaId($listarJogo[$i]->getIdCategoria());
                        ?>
                        <tbody>
                            <tr>
                                <td class="d-none d-md-table-cell text-center align-middle"><img class="img-usuario" src="imagens/<?php echo $listarJogo[$i]->getFoto();?>" alt="" width="200px"></td>
                                <td class="d-none d-md-table-cell align-middle"><?php echo $listarJogo[$i]->getId();?></td>
                                <td class="align-middle"><?php echo $listarJogo[$i]->getNome();?></td>
                                <td class="d-none d-md-table-cell align-middle"><?php echo $listarCategoriaId->getNome();?></td>
                                <td class="text-center align-middle">
                                    <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                                    <a href="upJogo.php?idUp=<?php echo $listarJogo[$i]->getId();?>" type="button" class="btn btn-sm btn-outline-warning"><i class="far fa-edit"></i></a>
                                    <a href="Classes/DALJogo.php?id=<?php echo $listarJogo[$i]->getId();?>" type="button" class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i>
                                    </a>
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
    <?php require_once("Includes/inc_links.php");?>
    <?php //require_once("Includes/inc_msg.php");?>
</body>

</html>