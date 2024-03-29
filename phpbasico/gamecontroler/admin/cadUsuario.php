<?php
include_once("Classes/Conexao.php");
include_once("Classes/ClasseBase.php");
include_once("Classes/Usuario.php");
require_once("Classes/DALUsuario.php");
require_once("Classes/Verifica.php");


// conexao com banco
$conexao = new Conexao();
// DAL
$dal = new DALUsuario($conexao);

$flag = false;
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
        $default = "ftDefault.jpg";
        $foto = $default;
    }


    $usuario = new Usuario();
    $usuario->setNome(addslashes($_POST['txtNome']));
    $usuario->setFoto($foto);
    $usuario->setBio(addslashes($_POST['txtBio']));
    $usuario->setEmail(addslashes($_POST['txtEmail']));
    $usuario->setSenha(addslashes(md5($_POST['txtSenha'])));
    $flag = true;
    $dal->inserirUsuario($usuario);
    
    header("location: listUsuario.php");
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
                        <h2 class="display-4 titulo-pagina">Cadastrar Usuario</h2>
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

                <div class="card border-success mb-3" hidden>
                    <div class="card-body text-success">
                        <p class="card-text text-center"><i class="fas fa-check"></i> Usuário excluído com sucesso</p>
                    </div>
                </div>
                
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-row ">
                        <div class="form-group col-md-3">
                            <label for="txtNome">Nome</label>
                            <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome" required> <br>

                            <label for="cadFoto">Foto</label>
                            <input type="file" class="form-control" id="cadFoto" name="cadFoto" placeholder="Foto" required> <br><br><br>

                            <button type="submit" class="btn btn-primary" name="btCad">Sign in</button>
                            <a type="button" class="btn btn-warning " href="listUsuario.php">Voltar</a>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="txtEmail">Email</label>
                            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email" required> <br>

                            <label for="txtBio">Bio</label>
                            <textarea rows="5" cols="30" class="form-control" id="txtBio" name="txtBio" placeholder="Bio" required></textarea> <br>

                        </div>

                        <div class="form-group col-md-3">
                            <label for="txtSenha">Senha</label>
                            <input type="password" class="form-control" id="txtSenha" name="txtSenha" placeholder="Senha" required> <br>
                        </div>     

                    </div>
                    
                    
                    
                </form>

            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->
    </div>
    <!--Fim conteudo -->
    <?php require_once("Includes/inc_links.php");?>

</head>
</body>

</html>