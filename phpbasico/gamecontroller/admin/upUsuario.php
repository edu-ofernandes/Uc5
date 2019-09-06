<?php
require_once("Classes/Conexao.php");
require_once("Classes/ClasseBase.php");
require_once("Classes/Usuario.php");
require_once("Classes/DALUsuario.php");


// conexao com banco
$conexao = new Conexao();
// DAL
$dal = new DALUsuario($conexao);

if(isset($_GET['idUp'])){
    $idUsuario = $_GET['idUp'];
    $listarIdUsuario = $dal->listarIdUsuario($idUsuario);
    $row = mysqli_fetch_array($listarIdUsuario);

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
            $default = $row['foto'];
            $foto = $default;
        }



        $usuario = new Usuario();
        $usuario->setId($idUsuario);
        $usuario->setNome(addslashes($_POST['txtNome']));
        $usuario->setFoto(addslashes($foto));
        $usuario->setBio(addslashes($_POST['txtBio']));
        $usuario->setEmail(addslashes($_POST['txtEmail']));
        $usuario->setSenha(addslashes(md5($_POST['txtSenha'])));

        $dal->alterarUsuario($usuario);
        header("location: listUsuario.php");
    }
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
                        <h2 class="display-4 titulo-pagina">Alterar dados de Usuario</h2>
                    </div>
                    <a href="listUsuario.php">
                        <div class="p-1">
                            <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-undo-alt"></i> Listar todos
                            </button>
                        </div>
                    </a>
                </div>
                <div class="dropdown-divider"></div>
                
                <?php if(isset($_GET['idUp'])){?>

                    <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-row ">
                        <div class="form-group col-md-3">
                            <label for="txtNome">Nome</label>
                            <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome" value="<?php echo $row['nome'];?>" required> <br>

                            <label for="cadFoto">Foto</label>
                            <input type="file" class="form-control" id="cadFoto" name="cadFoto" placeholder="Foto"> <br><br><br>

                            <button type="submit" class="btn btn-primary" name="btCad">Atualizar</button>
                            <a type="button" class="btn btn-danger" href="listUsuario.php">Cancelar</a>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="txtEmail">Email</label>
                            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email" value="<?php echo $row['email'];?>" > <br>

                            <label for="txtBio">Bio</label>
                            <textarea rows="5" cols="30" class="form-control" id="txtBio" name="txtBio" placeholder="Bio" value="<?php echo $row['bio'];?>"  ><?php echo $row['bio'];?></textarea> <br>

                        </div>

                        <div class="form-group col-md-3">
                            <label for="txtSenha">Senha</label>
                            <input type="password" class="form-control" id="txtSenha" name="txtSenha" placeholder="Senha" value="<?php echo $row['senha'];?>" > <br>
                        </div>     
                    </div>
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