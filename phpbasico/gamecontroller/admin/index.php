<?php 
require_once("Classes/Conexao.php");
require_once("Classes/DALAdmin.php");







if(isset($_POST['btLogin'])){


    $conexao = new Conexao();
    $dal = new DALAdmin($conexao);

    $email = $_POST['txtEmail'];
    $senha = md5($_POST['txtSenha']);
    $result = $dal->listarAdminLogin($email, $senha);



    if(!empty($result)){
        session_start();
        $_SESSION['liberado'] = true;
        $_SESSION['nome'] = $result->getNome();
        header("location: painel.php");
    }else{
        header("location: index.php");
    }

}
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login - VCSjunior Sistemas</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">
    <!-- Bootstrap core CSS -->
    <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <!-- FontWaesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- Custom login css -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <form class="form-signin" method="post" action="#">
        <div class="text-center mb-4">
            <img class="mb-4" src="imagens/sistema/geral/login.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Área Restrita</h1>
            <p>Para ter acesso ao painel, identifique-se!</p>
        </div>
            <div class="card border-success mb-4">            
                <div class="card-body text-success">              
                <p class="card-text text-center"><i class="fas fa-exclamation-triangle"></i> Deslogado com sucesso</p>
                </div>
            </div>

        <div class="form-label-group">
            <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email address"  >
            <label for="txtEmail">Email address</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="txtSenha" name="txtSenha" class="form-control" placeholder="Password" >
            <label for="txtSenha">Password</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="btLogin">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
    </form>
</body>

</html>