	<?php
	require_once( 'classes/Conexao.php' );
	require_once( 'classes/DALJogo.php' );
	require_once( 'classes/DALUser.php');
	require_once( 'classes/ClasseBase.php' );

	$conexao = new Conexao();
	$dalJogo= new DALJogo($conexao);
	$dalUser= new DALUser($conexao);
	$resultJogo =  $dalJogo->Listar();
	$resultUser =  $dalUser->Listar();

								
    ?>




<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Usuários - VCSjunior Sistemas</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- FontWaesome -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- Custom login css -->
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <?php
		require_once("topo.php");
	?>
    <!--Inicio conteudo -->
    <div class="d-flex">
        <!--Inicio Menu -->
        <?php
			require_once("menulateral.php")
		?>
        <!--Fim menu -->
        <!--INICIO APRESENTAR CONTEUDO-->
        <div class="content p-3">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-1">
                        <h2 class="display-4 titulo-pagina">Cadastrar Usuário</h2>
                    </div>
                    <a href="cadastrar.html">
                        <div class="p-1">
                            <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-undo-alt"></i> Listar todos
                            </button>
                        </div>
                    </a>
                </div>
                <div class="dropdown-divider"></div>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Usuarios</label>
                           	<select name="usuario" class="form-control">
								
									<?php
								 		for($i=0; $i < count($resultUser); $i++ ) {
										$User = $resultUser[$i];
										?>
								
									<option value="<?php echo($User->getId());?>"><?php echo($User->getNome());?></option>
								
									<?php
											}
										?>
								
							</select>
							<label for="inputEmail4">Jogo</label>
                            	<select  name="jogo" class="form-control">
								
									<?php
								 		for($i=0; $i < count($resultJogo); $i++ ) {
										$jogo = $resultJogo[$i];
										?>
                                    <!-- evento de onchange   -->
									<option value="<?php echo($jogo->getId());?>#<?php echo($jogo->getNome());?>" onchange="AddTabela(value)"><?php echo($jogo->getNome());?></option>
								
									<?php
											}
										?>
								
							</select>
                        </div>
						
					<div class="form-row">
						 
						<div class="form-group col-md-6">
						
							<table class="table">
								
								<thead>
									<th>ID</th>
									<th>Nome</th>
								</thead>
								<tbody id="linhas">
									
									
									
								</tbody>
								
							</table>
						
						</div>
					</div>
                       
                    </div>
					
                   <button type="submit" class="btn btn-primary">Sign in</button>
                </form>






            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->
    </div>


    <script>
        function AddTabela(value){
            var str = value.split('#');

            var tr = document.createElement('tr');
            
            var tdId = document.createElement('td');
            var textoId = document.createTxtNode(str[0]);
            tdId.appendChild(tdId);
            tr.appendChild(textoId);

            var tdNome = document.createElement('td');
            var textoNome = document.createTxtNode(str[1]);       
            tdNome.appendChild(tdNome);
            tr.appendChild(textoNome);


            document.getElementById('linhas').appendChild(tr);
        }
    </script>
    <!--Fim conteudo -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>