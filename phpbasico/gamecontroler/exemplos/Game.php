<?php
require_once("ClasseBase.php");
class Game extends ClasseBase{
	private $categoriaId;
	
	public function Game(){
		parent::ClasseBase();
	}
	
	public function getCategoriaId(){
		return($this->categoriaId);
	}
	
	public function setCategiaId($value){
		$this->categoriaId = $value;
	}
}
?>
