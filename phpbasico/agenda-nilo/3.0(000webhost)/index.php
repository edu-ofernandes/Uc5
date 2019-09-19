<?php
require_once("include/connectaBD.php");

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d');
$sqlAgendamentos = "SELECT * FROM agendamentos WHERE data='$data' ORDER BY idagendamentos ASC";
$resultAgenda = $banco->query($sqlAgendamentos);


$sqlContatos = "SELECT * FROM contatos ORDER BY nome";
$resultContatos = $banco->query($sqlContatos);

if(isset($_POST['btBuscaNome'])){
    
    $nome = $_POST['txtBusca'];

    $sql = "SELECT * FROM contatos WHERE nome LIKE '%".$nome."%';";
    $resultBuscaNome = $banco->query($sql);

    
    if(mysqli_affected_rows($resultBuscaNome)){
        $buscaNome = true;
    }else{
        $buscaNome = false;
    }
}


if(isset($_POST['btSerach2'])){
    echo "botao 2";
}

?>

<!doctype html>
<html lang="pt-br">

<?php require_once("include/inc_topo.php");?>

<body>
    <?php require_once("include/inc_menu.php");?>
    <main>
        <article>
            
            <section class="listAll front">
                
                <div class="container">
                    <h2>Listando todos os Contatos <i class="fa fa-user"></i></h2>
                    <div id="search">
                        <form action="#" method="post" name="formBusca" id="formBusca">
                            <input class="form-control" type="text" name="txtBusca" id="txtBusca" placeholder="Que nome deseja ver">
                            <input class="btn btn-primary" type="submit" name="btBuscaNome" id="btBuscaNome" value="Buscar">
                        </form>
                    </div>
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>

                        <?php if(isset($_POST['btBuscaNome']) && $buscaNome===true){ while ($row = mysqli_fetch_array($resultBuscaNome)){ ?>

                        <tbody>
                            <tr>
                                <td><?php echo $row['nome'];?></td>
                                <td><?php echo $row['tel'];?></td>
                                <td><?php echo $row['email'];?></td>
                            </tr>
                        </tbody>

                        <?php }}elseif (isset($_POST['btBuscaNome']) && $buscaNome===false) { ?>

                                <h2>Nenhum resultado para "<em><?php echo $nome;?></em>"</h2>

                        <?php } elseif(!isset($_POST['btBuscaNome'])) {  while($row2 = mysqli_fetch_array($resultContatos)){ ?>

                        <tbody>
                            <tr>
                                <td><?php echo $row2['nome'];?></td>
                                <td><?php echo $row2['tel'];?></td>
                                <td><?php echo $row2['email'];?></td>
                            </tr>
                        </tbody>

                        <?php }}?>

                    </table> 
                </div>
               

            </section>

            <section class="listAll back">
                
                <div class="container">
                    <h2>Listando todos os Eventos de hoje <i class="fa fa-calendar-week"></i></h2>
                    <div id="search">
                        <form action="#" method="post" name="formBusca2" id="formBusca2">
                            <input class="form-control" type="text" name="txtBusca2" id="txtBusca2" placeholder="Dia desejado">
                            <input class="btn btn-primary" type="submit" name="btBuscaEvents" id="btBuscaEvents" value="Buscar">
                        </form>
                    </div>
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                
                                <th scope="col">Titulo</th>
                                <th scope="col">Local</th>
                                <th scope="col">Observações</th>
                                <th scope="col">Concluido</th>
                            </tr>
                        </thead>
                    
                    <?php while($row = mysqli_fetch_array($resultAgenda)){?>

                        <tbody>
                            <tr>
                                <td><?php echo $row['titulo'];?></td>
                                <td><?php echo $row['endereco'];?></td>
                                <td><?php echo $row['obs'];?></td>
                                <td><?php echo $row['concluido'];?></td>
                            </tr>
                        </tbody>

                        <?php }?>

                    </table> 
                </div>
            </section>
        </article>
    </main>
    <?php require_once("include/inc_rodape.php");?>
</body>

</html>