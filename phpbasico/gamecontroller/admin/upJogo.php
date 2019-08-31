<?php
include_once("Classes/Conexao.php");
include_once("Classes/ClasseBase.php");
include_once("Classes/Jogo.php");
require_once("Classes/DALJogo.php");
require_once("Classes/DALCategoria.php");
require_once("Classes/Categoria.php");

// conexao com banco
$conexao = new Conexao();
// DAL
$dalJogo = new DALJogo($conexao);
$dalCategoria = new DALCategoria($conexao);

// select para imprimir o nome e foto do jogo
$idJogo = $_GET['idUp'];
$listarJogo = $dalJogo->listarIdJogo($idJogo);
$row = mysqli_fetch_array($listarJogo);


// id da categoria do jogog selecionado para editar
$idCategoria = $row['categorias_id'];
// select para imprimir o nome da do jogo selecionado no select la embaixo
$listarIdCategoria = $dalCategoria->listarIdCategoria($idCategoria);
$row2 = mysqli_fetch_assoc($listarIdCategoria);
// select para listar nova categoria
$listarCategoria = $dalCategoria->listarCategoria();



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
        $default =  $row['foto'];
        $foto = $default;
    }

    $jogo = new Jogo();
    $jogo->setId($idJogo);
    $jogo->setNome(addslashes($_POST['txtNomeJogo']));
    $jogo->setFoto($foto);
    $jogo->setIdCategoria($_POST['selCategoria']);
    $dalJogo->alterarJogo($jogo);
    header("location: cadJogo.php");
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
                        <div class="form-group col-md-3">
                            <label for="txtNomeJogo">Nome do Jogo</label>
                            <input type="text" class="form-control" id="txtNomeJogo" name="txtNomeJogo" placeholder="Nome" value="<?php echo $row['nome']?>" required> <br>

                            <label for="cadFoto">Foto</label>
                            <input type="file" class="form-control" id="cadFoto" name="cadFoto" placeholder="Foto" > <br>

                            <img src="imagens/<?php echo $row['foto']?>" alt="foto do jogo">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="selCategoria">Categoria</label>
                            <select name="selCategoria" id="selCategoria" class="form-control">
                                <option value="<?php echo $row2['id']?>"><?php echo $row2['nome']?></option>

                                <?php while($row3 = mysqli_fetch_assoc($listarCategoria)){?>
                                
                                <option value="<?php echo $row3['id'];?>"><?php echo $row3['nome'];?></option>

                                <?php }?>
                            </select>
                            
                        </div>                        
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary" name="btCad">Atualizar</button>
                </form>

           

            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->
    </div>
    <!--Fim conteudo -->
  <?php require_once("Includes/inc_links.php");?>
</body>

</html>