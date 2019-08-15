<?php
require_once("../include/connectaBD.php");


if(isset($_POST['btCad'])){
    $data = date('d-m-YH:i:s');
    $sup = $_FILES['upFt'] ['size'];

    if($sup != 0){
        $nomeFoto = $_FILES['upFt'] ['name'];
        $completo = $nome . "_" . $data;
        $path_parts = pathinfo($nomeFoto);
        $targetPath = 0;

        // converter para md5
        $nome_foto_md5 = md5($completo);

        // agora vai juntar em md5 com a extensao
        $nome_final = $nome_foto_md5.".".$path_parts['extension'];

        // pega o nome do arquivo com ele ja modificado
        $tagertFile = str_replace( '//', '/', $targetPath) . $nome_final;
        $temporario = $_FILES['upFt'] ['tmp_name'];
        $diretorio = "../image/".$tagertFile;
        move_uploaded_file($temporario, $diretorio);
        $foto = $tagertFile;
    }else{
        $default = "ftDefault.png";
        $foto = $default;
    }


    $nome = addslashes($_POST['txtNome']);
    $tel = addslashes($_POST['txtTelefone']);
    $email = addslashes($_POST['txtEmail']);
    $userId = '1';
    

    $sql = "INSERT INTO contatos VALUES (null, '$nome', '$tel', '$email', '$foto', '$userId')";

    if(mysqli_query($banco, $sql)){
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
                <h2>Novo cadastro</h2>
                <div id="newCad">
                    <!-- enctype="multipart/form-data" é para fazer upload de foto, ele separa em partes  -->
                    <form action="#" method="post" name="formCad" id="formCad" enctype="multipart/form-data"> 
                        <input type="text" name="txtNome" id="txtNome" placeholder="Nome">
                        <input type="text" name="txtTelefone" id="txtTelefone" placeholder="Telefone">
                        <input type="text" name="txtEmail" id="txtEail" placeholder="E-Mail">
                        <input type="file" name="upFt" id="upFt" placeholder="Foto">
                        <input type="submit" name="btCad" id="btCad" value="Cadastrar">
                    </form>
                </div>
            </section>
        </article>
    </main>
    <footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>