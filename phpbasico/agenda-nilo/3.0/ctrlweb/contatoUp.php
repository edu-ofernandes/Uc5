<?php
require_once("../include/connectaBD.php");
require_once("../include/validar.php");

$id = $_GET['idUp'];
$sql = "SELECT * FROM contatos WHERE idcontatos=".$id;
$result = $banco->query($sql);
$row = mysqli_fetch_array($result);



if(isset($_POST['btCad'])){
    $data = date('d-m-YH:i:s');
    $sup =  $_FILES['upFt'] ['size'];

    if( $sup != 0){
        
        $nomeFoto = $_FILES['upFt'] ['name'];
        $completo = $nomeFoto."_".$data;
        $path_parts = pathinfo($nomeFoto);
        $targetPath = 0;

        // converter para md5
        $nomeFotoMd5 = md5($completo);

        // juntar md5 com extensao
        $nomeFinal = $nomeFotoMd5.".".$path_parts['extension'];

        // mover diretorio
        $targetFile = str_replace('//','/',$targetPath).$nomeFinal;
        $temporario = $_FILES['upFt'] ['tmp_name'];
        $diretorio = "../image/".$targetFile;
        move_uploaded_file($temporario, $diretorio);
        $foto = $targetFile;
    }else{
        $fotoOld = $row['foto'];
        $foto = $fotoOld;
    }

    $nome = addslashes($_POST['txtNome']);
    $tel = addslashes($_POST['txtTelefone']);
    $email = addslashes($_POST['txtEmail']);
    $userId = '1';

    $sqlUp = "UPDATE contatos SET idcontatos=".$row['idcontatos'].", 
    nome ='".$nome."', tel='".$tel."', email='".$email."', foto='".$foto."', 
    users_idusers=".$userId." WHERE idcontatos=".$row['idcontatos'];

    if(mysqli_query($banco, $sqlUp)){
        header("location: contatos.php");
    }else{
        echo "erro ao cad".mysqli_error($banco);
    }
}


?>



<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PokeAgenda3.0 - AnDaNilo - Controle</title>
    <link rel="stylesheet" href="../css/folha.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
</head>

<body>
    <header>
        <div id="logo"><img src="../image/top_key.png" alt="Logo PokeAgenda"> Paínel de controle</div>
        <div id="search">
            <form action="#" method="get" name="formBusca" id="formBusca">
                <input type="text" name="txtBusca" id="txtBusca" placeholder="Busca">
                <input type="submit" name="btSerach" id="btSearch" value="Buscar">
            </form>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="admin.php">Inicio</a></li>
            <li><a href="contatos.php">Contatos</a></li>
            <li><a href="users.php">Usuários</a></li>
            <li><a href="event.php">Eventos</a></li>
            <li><a href="sair.php">Sair</a></li>
        </ul>
    </nav>
    <main>
        <article>
            <section id="listar">
                <h2>Alterando cadastro</h2>
                <div id="newCad">
                    <form action="#" method="post" name="formCad" id="formCad" enctype="multipart/form-data">
                        <input type="text" name="txtNome" id="txtNome" placeholder="Nome" value="<?php echo $row['nome'];?>">
                        <input type="text" name="txtTelefone" id="txtTelefone" placeholder="Telefone" value="<?php echo $row['tel'];?>">
                        <input type="text" name="txtEmail" id="txtEMail" placeholder="E-Mail" value="<?php echo $row['email'];?>">
                        <input type="file" name="upFt" id="upFt" placeholder="Foto">
                        <input type="hidden" name="keyContato" id="keyContato" value="<?php echo $row['idcontatos'];?>">
                        <input type="submit" name="btCad" id="btCad" value="Alterar">
                    </form>
                    <h2>Foto atual</h2><div class="listFt"><img src="../image/<?php echo $row['foto'];?>" alt="Foto contato"></div>
                </div>
            </section>
        </article>
    </main>
    <footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>