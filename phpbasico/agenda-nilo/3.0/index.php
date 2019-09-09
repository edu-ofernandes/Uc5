<?php
require_once("include/connectaBD.php");

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d');
$sqlAgendamentos = "SELECT * FROM agendamentos WHERE data='$data' ORDER BY idagendamentos ASC";
$result = $banco->query($sqlAgendamentos);


$sqlContatos = "SELECT * FROM contatos ORDER BY nome";
$resultContatos = $banco->query($sqlContatos);

if(isset($_POST[''])){
    
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
                <h2>Listando todos os Contatos</h2>
                <div id="search">
                    <form action="#" method="get" name="formBusca" id="formBusca">
                        <input type="text" name="txtBusca" id="txtBusca" placeholder="Que nome deseja ver">
                        <input type="submit" name="btSerach" id="btSearch" value="Buscar">
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

                    <?php while($row = mysqli_fetch_array($resultContatos)){?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['nome'];?></td>
                            <td><?php echo $row['tel'];?></td>
                            <td><?php echo $row['email'];?></td>
                        </tr>
                    </tbody>

                    <?php }?>

                </table> 

               

            </section>

            <section class="listAll back">
                <h2>Listando todos os Eventos de hoje</h2>
                <div id="search">
                    <form action="#" method="get" name="formBusca2" id="formBusca2">
                        <input type="text" name="txtBusca2" id="txtBusca2" placeholder="Dia desejado">
                        <input type="submit" name="btSerach2" id="btSearch2" value="Buscar">
                    </form>
                </div>

                

                <table class="table table-dark">
                    <thead>
                        <tr>
                            
                            <th scope="col">Titulo</th>
                            <th scope="col">Local</th>
                            <th scope="col">Observações</th>
                            <th scope="col">Concluido</th>
                        </tr>
                    </thead>
                
                <?php while($row = mysqli_fetch_array($result)){?>

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

            </section>
        </article>
    </main>
    <?php require_once("include/inc_rodape.php");?>
</body>

</html>