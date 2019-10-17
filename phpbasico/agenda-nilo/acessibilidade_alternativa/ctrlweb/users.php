<?php
require_once('../include/connectaBD.php');
require_once('../include/validar.php');

$sql = "SELECT idusers ,nome ,login FROM users ORDER BY nome ASC";
$result = $banco->query($sql);
include_once('include/inc_topo.php');
include_once('include/inc_menu.php');
?>

<main  class="row  d-flex justify-content-center">
      <h2 class="h1 text-center col-12">Listando todos os Usuarios</h2>
      <h3 class="h1 text-center col-12"><a href="usersAdd.php" class="font-weight-bold text-decoration-none text-dark">Cadastrar novos Usuários</a></h3>
      <div class="row  m-1""> 
      <?php while($row = mysqli_fetch_array($result)){ ?>
      <div class="card m-2" >
        <div class="card-body">
          <h5 class="card-title text-center"><?php echo $row['nome'];?></h5>
          <p class="card-text">Login: <?php echo $row['login']; ?> </p>
          <div class="row d-flex justify-content-center">
          <a href="usersUp.php?id=<?php echo $row['idusers'] ?>" class="btn btn-primary m-1">Editar</a>
          <a href="usersDel.php?id=<?php echo $row['idusers'] ?>" class="btn btn-primary m-1">Excluir</a>
          </div>
        </div>
      </div>
    <?php } ?>
    </div> 
</main>

<?php include_once('../include/inc_rodape.php')?>