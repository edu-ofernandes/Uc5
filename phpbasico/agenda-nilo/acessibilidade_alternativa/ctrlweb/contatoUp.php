<?php
require_once('../include/connectaBD.php');
require_once('../include/validar.php');

$id = $_GET['id'];

//seleciona o contado clicado no editar                               //junta duas ou mais tabelas
$sql = "SELECT idcontatos, contatos.nome as nomeContato, tel, email, foto, users_idusers FROM contatos INNER JOIN users ON contatos.users_idusers = users.idusers where idcontatos = '$id';";

$resultado = $banco->query($sql);
$row = mysqli_fetch_assoc($resultado);


  if(isset($_POST['btCad'])){
    
    $data = date('d-m-YH:i:s');
    $sup = $_FILES['upFt']['size'];
    if($sup != 0){
      $nome = $_FILES[ 'upFt' ][ 'name' ];
      $completo = $nome . "_" . $data;
      $path_parts = pathinfo($nome);
      $targetPath = 0;
      
      //converte para MD5
      $nome_foto_md5 = md5($completo);
      
      //agora vai juntar nome em md5 com a extensão
      $nome_final = $nome_foto_md5 . "." . $path_parts[ 'extension' ];
      
      //pega o nome do arquivo com ele já modificado
      $targetFile = str_replace('//', '/', $targetPath) . $nome_final;
      $temporario = $_FILES[ 'upFt' ][ 'tmp_name' ];
      $diretorio = "../image/".$targetFile;
      move_uploaded_file( $temporario, $diretorio );
      $foto = $targetFile;
    }else{
      $default = $_POST['velhaFoto'];
      $foto = $default;
    }
    
    $keyCod = $_POST['keyContato'];
    $nome = $_POST['txtNome'];
    $tel = $_POST['txtTelefone'];
    $email = $_POST['txtEmail'];
    
    $idUser = '1';
    
  $sqlUP = "UPDATE contatos SET idcontatos = '$keyCod', nome = '$nome', tel = '$tel', email = '$email', foto = '$foto', users_idusers = '$idUser'
       WHERE idcontatos = '$keyCod'";
    
  if(mysqli_query($banco, $sqlUP)){
    header("location:contatos.php");
    
  }else{
    echo "Erro ao alterar" . mysqli_error($banco);
  }
}

include_once('include/inc_topo.php');
include_once('include/inc_menu.php');
?>






<main class="container login-container">
            <div class="row d-flex justify-content-center" >
                <div class="col-md-8 login-form-2">
                    <h3>Alterar Contato</h3>
                    <form action="#" method="post" name="formCad" id="formCad" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="txtNome" required id="txtNome" placeholder="Nome" value="<?php echo $row['nomeContato'];?>">
                        </div>
                        <div class="form-group">
                           <input type="tel" class="form-control" name="txtTelefone" required id="txtTelefone" placeholder="Telefone" value="<?php echo $row['tel'];?>">
                        </div>

                          <div class="form-group">
                            <input type="email" name="txtEmail" class="form-control" required id="txtEmail" placeholder="E-Mail" value="<?php echo $row['email'];?>">
                        </div>

              <div class="form-group">
                          <input type="file" class="form-control" name="upFt" id="upFt" placeholder="Foto" value="<?php echo $row['foto'];?>">
                        </div>
                        <input type="hidden" name="velhaFoto" id="velhaFoto" value="<?php echo $row['foto'];?>">
                        <input type="hidden" name="keyContato" id="keyContato" value="<?php echo $row['idcontatos'];?>">
                        <div class="form-group">
                           <input type="submit" class="btnSubmit" name="btCad" id="btCad" value="Alterar">
                        </div>
                    </form>
                </div>
            </div>
</main>
<?php include_once('../include/inc_rodape.php')?>