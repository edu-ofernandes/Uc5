<?php
require_once("include/connectaBD.php");
//require_once("../include/validar.php");


// arrumar validaçao de redefinimento de senha, data de entrega no planner
$verificacao = false;
if(isset($_POST['btValidar1'])){
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

if(isset($_POST['btValidar2'])){
    $nome = addslashes($_POST['txtNome']);
    $login = addslashes($_POST['txtNomeUsuario']);

    $senha = md5(addslashes($_POST['txtSenha']));
    $senhaConfirmar = md5(addslashes($_POST['txtConfirmarSenha']));

    if($senha === $senhaConfirmar){
        $sql = "UPDATE users SET senha='".$senhaConfirmar."' WHERE nome='$nome' AND login='$login';";

        $result = $banco->query($sql);
    }else{
        echo "Ambas as senhas precisam ser iguais!";
    }
    

}


// if($verificacao===true && isset($_POST['btValidar2'])){

//     echo "teste";
//     $senha = md5(addslashes($_POST['txtSenha']));
//     $senha = md5(addslashes($_POST['txtConfirmarSenha']));
    
//     $sql = "UPDATE users SET senha='$senha' WHERE nome='$nome' AND login='$login';";

//     echo $sql;
// }

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
                        <input type="text" name="txtNome" id="txtNome" placeholder="Nome" value="" required>
                        <input type="text" name="txtNomeUsuario" id="txtNomeUsuario" placeholder="Nome de usuario" value="" required>

                        <input type="submit" name="btValidar1" id="btValidar1" value="Confirmar" class="redefinirSenha" >
                        <a type="button" href="index.php" class="redefinirSenha">Voltar</a>
                    <?php }else{?>

                        <input type="text" name="txtNome" id="txtNome" placeholder="Nome" value="" required>
                        <input type="text" name="txtNomeUsuario" id="txtNomeUsuario" placeholder="Nome de usuario" value="" required>
                    
                        <input type="password" name="txtSenha" id="txtSenha" placeholder="Senha" value="" required>
                        <input type="password" name="txtConfirmarSenha" id="txtConfirmarSenha" placeholder="Confirmar Senha" value="" required>

                        <input type="submit" name="btValidar2" id="btValidar2" value="Confirmar" class="redefinirSenha">
                    <?php }?>

                    

                </form>
            </section>
        </article>
    </main>
    <footer>Desenvolvido por seres supremos &reg; &copy;</footer>

</body>

</html>