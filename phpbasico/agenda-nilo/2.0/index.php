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
    <link rel="stylesheet" href="./css/folha.css" type="text/css">
    <script src="https://kit.fontawesome.com/8e7c1629c9.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <meta name="keywords" content="PokeAgenda">
    <meta name="autor" content="seu nome aqui">
    <meta name="description" content="Agenda de contatos e possíveis clientes">
</head>

<body>
    <?php include('include/inc_menu.php'); ?>
    <main>

            <section class="todos-contatos">
                
                <!-- loop 1 começa -->
                <?php if(empty($_GET['id'])){  ?>

                <div class="container titulo">
                    <h2>Lista de Contatos</h2>
                    <div class="add-contatos"><a href="contatoAdd.php"><i class="fas fa-user-plus"></i></a></div>
                </div>
                <div class="container tabela">
                    <div class="nome-tabela"><p>Nome</p></div>
                    <div class="tel-tabela"><p>Telefone</p></div>
                    <div class="email-tabela"><p>E-mail</p></div>
                    <div class="vazio"></div>
                </div>

                <?php while ($row = mysqli_fetch_array($resultado)) {?>
                <div class="container registros">
                    <div class="nomes-registros"><p><?php echo ($row['nome']); ?></p></div>
                    <div class="tel-registros"><p> <?php echo ($row['tel']); ?></p></div>
                    <div class="email-registros"><p><?php echo ($row['email']); ?></p></div>
                    <div class="botoes">
                        <a href="contatoUp.php?id=<?php echo ($row['idcontatos']) ?>"><i class="fas fa-user-edit"></i></a>

                        <?php if($row['favoritos'] != 0 ){?>
                        <a href="favoritar.php?id=<?php echo ($row['idcontatos']) ?>" class=""><i class="fas fa-star <?php echo "favorito-on";?>"></i></a>
                        <?php }else{ ?>
                        <a href="favoritar.php?id=<?php echo ($row['idcontatos']) ?>" class=""><i class="fas fa-star <?php echo '';?>"></i></a>
                        <?php }?>
                        <a href="contatoDel.php?id=<?php echo $row['idcontatos']; ?>"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            
                <?php } ?>
            <!-- loop termina -->
            </section>
                <!-- loop 2 começa -->
                <?php }else{ ?>

                <?php if(mysqli_num_rows($resultadoBuscaAlfa) != 0){  ?>

            <section class="todos-contatos lista-busca">
                <div class="container titulo titulo-busca">
                    <h2>Resultado da Pesquisa</h2>
                </div>


                <div class="container tabela">
                    <div class="nome-tabela"><p>Nome</p></div>
                    <div class="tel-tabela"><p>Telefone</p></div>
                    <div class="email-tabela"><p>E-mail</p></div>
                    <div class="vazio"></div>
                </div>

                <?php while($row3 = mysqli_fetch_array($resultadoBuscaAlfa)){ ?>
                
                    
                <div class="container registros">
                    <div class="nomes-registros"><p><?php echo ($row3['nome']); ?></p></div>
                    <div class="tel-registros"><p> <?php echo ($row3['tel']); ?></p></div>
                    <div class="email-registros"><p><?php echo ($row3['email']); ?></p></div>
                    <div class="botoes">
                        <a href="contatoUp.php?id=<?php echo ($row3['idcontatos']) ?>"><i class="fas fa-user-edit"></i></a>
                        
                        <?php if($row3['favoritos'] != 0 ){?>
                        <a href="favoritar.php?id=<?php echo ($row3['idcontatos']) ?>" class=""><i class="fas fa-star <?php echo "favorito-on";?>"></i></a>
                        <?php }else{ ?>
                        <a href="favoritar.php?id=<?php echo ($row3['idcontatos']) ?>" class=""><i class="fas fa-star"></i></a>
                        <?php }?>

                        <a href="contatoDel.php?id=<?php echo $row3['idcontatos']; ?>"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
                <?php  }?>
            </section>
                <?php } else {  ?> 
                    <h2>Nenhum resultado</h2>
                <?php }} ?>
                
                <!-- loop termina -->


                <section class="todos-contatos alfa-contatos alfa-lista">
                <ul class="alfabeto alfabeto-lista">
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
        
            </section>
    </main>
   
</body>

</html>