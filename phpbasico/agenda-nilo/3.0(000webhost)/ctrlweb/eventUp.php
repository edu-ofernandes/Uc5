<?php
require_once("../include/connectaBD.php");
require_once("../include/validar.php");

if(isset($_GET['id'])){
    $idagendamentos = $_GET['id'];
    $sql = "SELECT * FROM agendamentos WHERE idagendamentos=".$idagendamentos;
    $result = $banco->query($sql);
    $row = mysqli_fetch_array($result);

    if(isset($_POST['btCad'])){
        $users_iduserss = $_SESSION['idusers'];
        $titulo = $_POST['txtTitulo'];
        $data = $_POST['txtData'];
        $hora = $_POST['txtHora'];
        $local = $_POST['txtLocal'];
        $endereco = $_POST['txtEnd'];
        $obs = $_POST['obs'];
        $concluido = $_POST['selConcluido'];

        $sql = "UPDATE agendamentos SET idagendamentos=".$idagendamentos.", titulo='".$titulo."', 
        data='".$data."', hora='".$hora."', local='".$local."', endereco='".$endereco."', obs='".$obs."', 
        concluido='".$concluido."', users_idusers=".$users_iduserss." WHERE idagendamentos=".$idagendamentos.";";

        $resultUpdate = $banco->query($sql);
        header("location: event.php");
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
                <h2>Alterando Eventos</h2>

                <?php if(isset($_GET['id'])){ ?>

                <form action="#" method="post" name="formEvent" id="formEvent">
                    <input type="text" name="txtTitulo" id="txtTitulo" placeholder="Titulo" value="<?php echo $row['titulo'];?>">
                    <label for="txtData">Data</label>
                    <input type="date" name="txtData" id="txtData" placeholder="Data" value="<?php echo $row['data'];?>">
                    <input type="text" name="txtHora" id="txtHora" placeholder="Hora" value="<?php echo $row['hora'];?>">
                    <input type="text" name="txtLocal" id="txtLocal" placeholder="Local" value="<?php echo $row['local'];?>">
                    <input type="text" name="txtEnd" id="txtEnd" placeholder="Endereço" value="<?php echo $row['endereco'];?>">
                    <textarea name="obs" id="obs" cols="30" rows="10" placeholder="Observações"><?php echo $row['obs'];?></textarea>
                    <select name="selConcluido" id="selConcluido" >
                        <option value="<?php echo $row['concluido'];?>"></option>
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                    <input type="hidden" name="keyEvent" id="keyEvent" value="<?php echo $row['idagendamentos'];?>">
                    <input type="submit" name="btCad" id="btCad" value="Cadastrar">
                </form>

                <?php }?>

            </section>
        </article>
    </main>
    <footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>