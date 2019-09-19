<?php
// if(isset($_POST['btGo'])){
    

//     $mensagem = "Obrigador!<br>Mensagem enviada com sucesso!<br>Em breve entraremos em contato";
    

//     // verifica qual sistema operacional para ajustar cabeçalho
//     if(PATH_SEPARATOR == ";"){
//         // se for windows
//         $quebraLinha = "\r\n";

//     }else{
//         // se for outro sistema
//         $quebraLinha = "\n";
//     }


//     // recebendo os dados do form
//     $nome = utf8_decode($_POST['txtNome']);
//     $emailVisitante = utf8_decode($_POST['txtEmail']);
//     $telefone = utf8_decode($_POST['txtTel']);
    
//     $msg = utf8_decode($_POST['txtMsg']);
//     $destino = "fernandeseduardo93@gmail.com";

//     $email = "fernandeseduardo93@gmail.com";
//     $ip =  getenv("REMOTE_ADDR");

//     // montando msg a ser enviada no corpo do email
//     $mensagemHtml = 'Nome: '.$nome.'<br> E-mail: '.$emailVisitante.'<br> Telefone: '.$telefone.'<br> Mensagem: '.$msg;
//     $headers = "MIME-Version: 1.1" . $quebra_linha;
// 		$headers .= "Content-type: text/html; charset=iso-8859-1" . $quebra_linha;
// 		$headers .= "From: " . $email . $quebra_linha;
// 		$headers .= "Cc: " . $emailVisitante . $quebra_linha;
// 		$headers .= "Reply-To: " . $emailVisitante . $quebra_linha;
// 		//Note que o email do remetente será usado no campo Reply-To (responder para)
// 		if ( !mail( $destino, $mensagemHTML, $headers, "-r" . $email ) ) {		//se for postfix
// 			$headers .= "Return-Path: " .$destino . $quebra_linha;
// 			//se "não for postfix"
// 			mail( $destino, $mensagemHTML, $headers );
//         }
//         print($mensagem);
// }

//NAO ESTA FUNCIONANDO

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" name="formContato" id="formContao">
        <input type="text" name="txtNome" id="txtNome" placeholder="Nome" value="">
        <input type="number" name="txtTel" id="txtTel" placeholder="Telefone" value="">
        <input type="email" name="txtEmail" id="txtEmail" placeholder="E-mail" value="">
          
        <textarea name="txtMsg" id="txtMsg" cols="30" rows="10" placeholder="Mensagem"></textarea>

        <input type="submit" name="btGo" id="btGo" value="Enviar">
    </form>
</body>
</html>