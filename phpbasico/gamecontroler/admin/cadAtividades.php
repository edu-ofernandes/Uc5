<?php
include_once("Classes/Conexao.php");
include_once("Classes/ClasseBase.php");
include_once("Classes/Atividade.php");
include_once("Classes/DALAtividade.php");
include_once("Classes/DALJogo.php");
include_once("Classes/DALUsuario.php");
require_once("Classes/Verifica.php");


// conexao com banco
$conexao = new Conexao();



// DAL atividade
$dalAtividade = new DALAtividade($conexao);
// DAL jogo
$dalJogo = new DALJogo($conexao);
$listarJogo = $dalJogo->listarJogo();
$rowJogo = count($listarJogo);


// DAL user
$dalUsuario = new DALUsuario($conexao);
$listarUser = $dalUsuario->listarUsuario();
$rowUser = count($listarUser);


// echo '<pre>';
// echo '</pre>';


if(isset($_POST['btCad'])){
    $atividade = new Atividade();
    $atividade->setIdUser(addslashes($_POST['txtUsuarioId'])); 
    $atividade->setIdJogo(addslashes($_POST['txtJogoId'])); 
    $atividade->setData(addslashes($_POST['txtData'])); 
    $atividade->setPontuacao(addslashes($_POST['txtPontuacao'])); 
    $atividade->setTempo(addslashes($_POST['txtTempoJogo']));

    //$dalAtividade->insert($atividade);

    echo '<pre>';
    print_r($atividade);
    echo '</pre>';
    
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
                        <h2 class="display-4 titulo-pagina">Cadastrar Atividade</h2>
                    </div>
                    <a href="listAtividades.php">
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
                            <select class="form-control" name="txtUsuarioId" id="txtUsuarioId" >
                                <option value="">Usuario</option>
                                <?php for($j = 0; $rowUser > $j; $j++){?>

                                <option value="<?php echo $listarUser[$j]->getId();?>"><?php echo $listarUser[$j]->getNome();?></option>

                                <?php }?>
                            </select>

                            <label for="txtJogoId">Jogo</label>
                            <select class="form-control" name="txtJogoId" id="txtJogoId" >
                                <option value="">Jogo</option>
                                <?php for($i = 0; $rowJogo > $i; $i++){ ?>

                                <option value="<?php echo $listarJogo[$i]->getId();?>"><?php echo $listarJogo[$i]->getNome();?></option>

                                <?php }?>
                                
                            </select>
                        </div>                        
                        <div class="form-group col-md-3">
                            <label for="txtData">Data</label>
                            <input type="date" class="form-control" id="txtData" name="txtData" placeholder="Data" >

                            <label for="txtPontuacao">Pontuação</label>
                            <input type="text" class="form-control" id="txtPontuacao" name="txtPontuacao" placeholder="Pontos" >
                        </div>                        
                        <div class="form-group col-md-3">
                    
                            <label for="txtTempoJogo">Tempo de Jogo</label>
                            <input type="text" class="form-control" id="txtTempoJogo" name="txtTempoJogo" placeholder="Tempo de Jogo" >
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