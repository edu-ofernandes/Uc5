<?php
	include_once('include/inc_topo.php');
?>


<main class="container login-container">
            <div class="row d-flex justify-content-center" >
                <div class="col-md-8 login-form-2">
                    <h3>Login</h3>
                    <form action="../include/verificaBD.php" method="post" name="formAdmin" id="formAdmin">
                        <div class="form-group">
                            <input type="text" class="form-control" name="txtLogin" id="txtAdmin" placeholder="Login" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Senha" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit col" name="btEntrar" id="btEntrar" value="Entrar" />
                        </div>
                        <div class="form-group">
                            <a href="../index.php" class="btnSubmit mt-3 col">Voltar</a>
                        </div>
                        <div class="form-group">
							<a href="last.php" class="ForgetPwd">Esqueci minha senha</a>
                        </div>
                    </form>
                </div>
            </div>
</main>
<?php include_once('../include/inc_rodape.php')?>