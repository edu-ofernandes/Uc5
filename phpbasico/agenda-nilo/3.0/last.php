<?php
require_once("include/connectaBD.php");
//require_once("../include/validar.php");


// arrumar validaçao de redefinimento de senha, data de entrega no planner
$verificacao = false;
if(isset($_POST['btCad'])){
    $nome = addslashes($_POST['txtNome']);
    $login = addslashes($_POST['txtNomeUsuario']);
    $sql1 = "SELECT * FROM users WHERE nome ='$nome' AND login='$login'";
    $result1 = $banco->query($sql1);
    
    if(mysqli_fetch_assoc($result1)){
        $verificacao = true;
    }else{
        echo "voce nao existe";
    }
}

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PokeAgenda3.0 - AnDaNilo - Controle</title>
    <link rel="stylesheet" href="css/folha.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
    
    
    <main>
        <article>
            <section id="listar">
                <h2>Redefinir Senha</h2>

     
                
                <form action="#" method="post" id="formUser" name="formUser">
                    <?php if($verificacao === false){?>
                        <input type="text" name="txtNome" id="txtNome" placeholder="Nome" value="">
                        <input type="text" name="txtNomeUsuario" id="txtNomeUsuario" placeholder="Nome de usuario" value="">
                    <?php }?>

                    <?php if($verificacao === true){?>
                        <input type="password" name="txtSenha" id="txtSenha" placeholder="Senha" value="">
                        <input type="password" name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Confirmar Senha" value="">
                    <?php }?>

                    <input type="submit" name="btCad" id="btCad" value="Confirmar">

                </form>
            </section>
        </article>
    </main>
    <footer>Desenvolvido por seres supremos &reg; &copy;</footer>

</body>

</html>