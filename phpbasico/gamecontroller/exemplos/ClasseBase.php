<?php
class ClasseBase{
	private $id;
	private $nome;
	public function ClasseBase(){
		$this->id = 10;
		$this->nome = "aaa";
	}
	
	public function getId(){
		return($this->id);
	}
	
	public function setId($value){
		$this->id = $value;
	}
	
	public function getNome(){
		return($this->nome);
	}
	
	public function setNome($value){
		$this->nome = $value;
	}
}
?>
