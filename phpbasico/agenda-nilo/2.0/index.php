<?php
// requerimento para conectar com o include
require_once('include/connectaBD.php');


$sql = "SELECT * FROM contatos";

$resultado = $banco->query($sql);

// $retorno = mysqli_fetch_assoc($resultado);
// echo $retorno['nome'];

if(isset($_GET['id'])){
    $sqlBuscaAlfa = "SELECT * FROM contatos WHERE nome LIKE '". $_GET['id']."%'";

    $resultadoBuscaAlfa = $banco->query($sqlBuscaAlfa);

}


?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PokeAgenda2.0 - AnDaNilo</title>
    <link rel="stylesheet" href="css/folha.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <meta name="keywords" content="PokeAgenda">
    <meta name="autor" content="seu nome aqui">
    <meta name="description" content="Agenda de contatos e possíveis clientes">
</head>

<body>
    <header>
        <?php include('include/inc_topo.php'); ?>
    </header>
    <nav>
        <?php include('include/inc_menu.php'); ?>
    </nav>
    <main>
        <article>
            <h1>Agenda de clientes/contato</h1>
            <section id="menuAlfabeto">
                <div id="alfabeto">
                    <ul>
                        <li><a href="index.php?id=A">A</a></li>
                        <li><a href="index.php?id=B">B</a></li>
                        <li><a href="index.php?id=C">C</a></li>
                        <li><a href="index.php?id=D">D</a></li>
                        <li><a href="index.php?id=E">E</a></li>
                        <li><a href="index.php?id=F">F</a></li>
                        <li><a href="index.php?id=G">G</a></li>
                        <li><a href="index.php?id=H">H</a></li>
                        <li><a href="index.php?id=I">I</a></li>
                        <li><a href="index.php?id=J">J</a></li>
                        <li><a href="index.php?id=K">K</a></li>
                        <li><a href="index.php?id=L">L</a></li>
                        <li><a href="index.php?id=M">M</a></li>
                        <li><a href="index.php?id=N">N</a></li>
                        <li><a href="index.php?id=O">O</a></li>
                        <li><a href="index.php?id=P">P</a></li>
                        <li><a href="index.php?id=Q">Q</a></li>
                        <li><a href="index.php?id=R">R</a></li>
                        <li><a href="index.php?id=S">S</a></li>
                        <li><a href="index.php?id=T">T</a></li>
                        <li><a href="index.php?id=U">U</a></li>
                        <li><a href="index.php?id=V">V</a></li>
                        <li><a href="index.php?id=W">W</a></li>
                        <li><a href="index.php?id=X">X</a></li>
                        <li><a href="index.php?id=Y">Y</a></li>
                        <li><a href="index.php?id=Z">Z</a></li>
                        <li><a href="index.php">Favoritos</a></li>
                    </ul>
                </div>
            </section>
            <section id="listar">
                <h2>Listando todos os Contatos</h2>
                <h3><a href="contatoAdd.php">Cadastrar Contato</a></h3>
                <!-- incio do loop -->

                <?php if(empty($_GET['id'])){ while ($row = mysqli_fetch_array($resultado)) { ?>

                    <div class="list">

                        <div class="listNome">Nome: <?php echo ($row['nome']); ?></div>
                        <div class="listTel">Telefone: <?php echo ($row['tel']); ?></div>
                        <div class="listEmail">Email: <?php echo ($row['email']); ?></div>
                        <div class="star"><a href="favoritar.php">Favoritar</a></div>
                        <div class="up"><a href="contatoUp.php">Editar</a></div>
                        <div class="del"><a href="contatoDel.php?id=<?php echo ($row['idcontatos']) ?>">Excluir</a></div>
                    </div> <br>

                <?php } ?>
                <!-- fim do loop -->
            </section>

            <!-- loop começa -->
            <?php }else{ ?>
                
                    
            <?php if(mysqli_fetch_array($resultadoBuscaAlfa) != 0){?>
                <h2>Resultado da busca pelas letras</h2>



            <?php while($row3 = mysqli_fetch_array($resultadoBuscaAlfa)){ ?>
                <div class="list"> 
                    <div class="listNome">Nome: <?php echo ($row3['nome']); ?></div>
                    <div class="listTel">Telefone: <?php echo ($row3['tel']); ?></div>
                    <div class="listEmail">Email: <?php echo ($row3['email']); ?></div>
                    <div class="star"><a href="favoritar.php">Favoritar</a></div>
                    <div class="up"><a href="contatoUp.php">Editar</a></div>
                    <div class="del"><a href="contatoDel.php?id=<?php echo ($row3['idcontatos']) ?>">Excluir</a></div>
                </div> <br>

            <?php }} else { (mysqli_fetch_array($resultadoBuscaAlfa) == 0) ?> 
                    <h2>Nenhum resultado</h2>
            <?php       
                        }
                    
                
                }
            ?>
        
                
            


            <!-- loop termina -->
        </article>
    </main>
    <footer><?php include('include/inc_rodape.php'); ?></footer>
</body>

</html>