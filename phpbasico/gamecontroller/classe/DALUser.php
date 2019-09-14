<?php
require_once("ClasseBase.php");
require_once("Usuario.php");
require_once("Conexao.php");

class DALUser{
	private $conexao;
	public function DALUser($cx){
		$this->conexao = $cx;
	}
	
	public function Inserir($Usuario){
		$sql = "INSERT INTO usuarios VALUES (NULL,";
		$sql = $sql."'".$Usuario->GetNome()."'";
		$sql = $sql."'".$Usuario->getFoto()."'";
		$sql = $sql."'".$Usuario->GetBio()."'";
		$sql = $sql.",'".$Usuario->GetEmail()."'";
		$sql = $sql.",'".$Usuario->GetSenha()."')";
		$banco = $this->conexao->GetBanco();
		$banco->query($sql);
		header("Location:listarUsuario.php");
	}
	
	public function CarregarUsuario($id){
		$sql = "select * from usuarios where id = ".$id.";";
		$banco = $this->conexao->GetBanco();
		$result = $banco->query($sql);
		$obj = new Usuario();
		while ($row = mysqli_fetch_array($result)){
			$obj->SetId($row['id']);
			$obj->SetNome($row['nome']);
			$obj->SetNome($row['foto']);
			$obj->SetNome($row['bio']);
			$obj->SetEmail($row['email']);
		}
		return $obj;
	}
		
	public function Alterar($cat){
		$sql ="UPDATE usuarios SET nome = '".$cat->GetNome()."', bio = '".$Usuario->GetBio()."', foto = '".$Usuario->getFoto()."',  email = '".$cat->GetEmail()."', senha = '".$cat->GetSenha()."' WHERE id = ".$cat->GetId().";";
		$banco = $this->conexao->GetBanco();
		$banco->query($sql);
		header("Location:listarUsuario.php");
	}
	
	public function ListarTabelaUsuarios(){
		$sql = "select * from usuarios";
		$banco = $this->conexao->GetBanco();
		return $banco->query($sql);	
	}
	
	public function Listar(){
		$sql = "select * from usuarios";
		$banco = $this->conexao->GetBanco();
		$result = $banco->query($sql);
		$vetor = array();
		while ($row = mysqli_fetch_array($result)){
			$obj = new Usuario();
			$obj->SetId($row['id']);
			$obj->SetNome($row['nome']);
			$obj->SetFoto($row['foto']);
			$obj->SetBio($row['bio']);
			$obj->SetEmail($row['email']);
			$vetor[]=$obj;
		}
		return($vetor);
	}
	public function excluir($id){
		$sql = "DELETE FROM usuarios WHERE id = $id";
		$banco = $this->conexao->GetBanco();
		$banco->query($sql);
	}

}
?>