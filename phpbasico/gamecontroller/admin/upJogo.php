<?php
include_once("Classes/Conexao.php");
include_once("Classes/ClasseBase.php");
include_once("Classes/Jogo.php");
require_once("Classes/DALJogo.php");
require_once("Classes/DALCategoria.php");
require_once("Classes/Categoria.php");
require_once("Classes/Verifica.php");

// conexao com banco
$conexao = new Conexao();
// DAL
$dalJogo = new DALJogo($conexao);
$dalCategoria = new DALCategoria($conexao);


// select para imprimir o nome e foto do jogo
$idJogo = $_GET['idUp'];
$listarJogo = $dalJogo->listarIdJogo($idJogo);

// select para listar nova categoria
$listarCategoria = $dalCategoria->listarCategoria();
$row = count($listarCategoria);


// id da categoria do jogog selecionado para editar
$idCategoria = $listarJogo->getIdCategoria();
// select para imprimir o nome da categoria do jogo selecionado no select la embaixo
$listarIdCategoria = $dalCategoria->listarCategoriaId($idCategoria);




if(isset($_POST['btCad'])){
    $data = date('d-m-YH:i:s');
    $sup = $_FILES['cadFoto'] ['size'];

 

    if($sup != 0){
        $nomeFoto = $_FILES['cadFoto'] ['name'];
        $completo = $nomeFoto . "_" . $data;
        $path_parts = pathinfo($nomeFoto);
        $targetPath = 0;

        // converter para md5
        $nome_foto_md5 = md5($completo);

        // agora vai juntar em md5 com a extensao
        $nome_final = $nome_foto_md5.".".$path_parts['extension'];

        // pega o nome do arquivo com ele ja modificado
        $tagertFile = str_replace( '//', '/', $targetPath) . $nome_final;
        $temporario = $_FILES['cadFoto'] ['tmp_name'];
        $diretorio = "imagens/".$tagertFile;
        move_uploaded_file($temporario, $diretorio);
        $foto = $tagertFile;
    }else{
        $foto = $listarJogo->getFoto();;
    }

    $jogo = new Jogo();
    $jogo->setId($idJogo);
    $jogo->setNome(addslashes($_POST['txtNomeJogo']));
    $jogo->setFoto($foto);
    $jogo->setIdCategoria($_POST['selCategoria']);
    $dalJogo->alterarJogo($jogo);
    header("location: listJogo.php");
}



// criar select com view
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
                        <h2 class="display-4 titulo-pagina">Atualizar Jogo</h2>
                    </div>

                    <div class="p-1">
                        <a href="listJogo.php" class="btn btn-sm btn-outline-secondary" ><i class="fas fa-undo-alt"></i> Listar todos</a>
                    </div>
                </div>
                <div class="dropdown-divider"></div>

                

                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-row ">
                        <div class="form-group col-md-3 mr-3">
                            <label for="txtNomeJogo">Nome do Jogo</label>
                            <input type="text" class="form-control" id="txtNomeJogo" name="txtNomeJogo" placeholder="Nome" value="<?php echo $listarJogo->getNome();?>" required> <br>

                            <label for="cadFoto">Foto</label>
                            <input type="file" class="form-control" id="cadFoto" name="cadFoto" placeholder="Foto" value="" required> <br>

                            <img src="imagens/<?php echo $listarJogo->getFoto();?>" alt="foto do jogo" width="400px">
                        </div>

                        <div class="form-group col-md-3 mr-3">
                            <label for="selCategoria">Categoria</label>
                            <select name="selCategoria" id="selCategoria" class="form-control" required>
                                <option value="<?php echo $listarIdCategoria->getId();?>"><?php echo $listarIdCategoria->getNome();?></option>

                                <?php for($i = 0; $row > $i; $i++ ){ ?>
                                
                                <option value="<?php echo $listarCategoria[$i]->getId();?>"><?php echo $listarCategoria[$i]->getNome();?></option>

                                <?php }?>
                            </select> <br>
                            
                            <label for="txtDescricao" id="txtDescricao">Descricao</label>
                            <textarea name="txtDescricao" id="" cols="30" rows="5" class="form-control" placeholder="Descrição"><?php //echo $listarJogo->getDescricao();?></textarea>
                        </div>                        
                        
                        <div class="form-group cold-md-3">
                            <label for="txtLink">Link sobre video</label>
                            <input type="text" name="txtLink" id="txtLink" class="form-control" placeholder="Link sobre Jogo" value="<?php //echo $listarJogo->getLink();?>">
                        </div>
                        
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary" name="btCad">Atualizar</button>
                    <a type="button" class="btn btn-danger" href="listJogo.php">Cancelar</a>
                </form>

           

            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->
    </div>
    <!--Fim conteudo -->
  <?php require_once("Includes/inc_links.php");?>
</body>

</html>