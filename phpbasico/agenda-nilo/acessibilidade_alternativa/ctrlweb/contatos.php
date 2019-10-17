<?php
require_once('../include/connectaBD.php');
require_once('../include/validar.php');

$sql = "SELECT * FROM contatos";
$resultado = $banco->query($sql);

include_once('include/inc_topo.php');
include_once('include/inc_menu.php');
?>

<main>
  <article class="row">
      <h2 class="h1 text-center col-12">Listando todos os Contatos</h2>
      <h3 class="h1 text-center col-12"><a href="contatoAdd.php" class="font-weight-bold text-decoration-none text-dark">Cadastrar Contato</a></h3>
      <div class="col-12 d-flex justify-content-around flex-wrap""> 
      <?php while($row = mysqli_fetch_array($resultado)){ ?>
      <div class="card m-2">
        <img src="../image/<?php echo $row['foto']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['nome'];?></h5>
          <p class="card-text">Telefone: <?php echo $row['tel']; ?> <br> Email: s<?php echo $row['email']; ?> </p>
          <div class="row d-flex justify-content-center">
          <a href="contatoUp.php?id=<?php echo $row['idcontatos'];?>" class="btn btn-primary m-1">Editar</a>
          <a href="contatoDel.php?id=<?php echo $row['idcontatos'];?>" class="btn btn-primary m-1">Excluir</a>
          </div>
        </div>
      </div>
    <?php } ?>
    </div> 
  </article>
</main>

<?php include_once('../include/inc_rodape.php')?>