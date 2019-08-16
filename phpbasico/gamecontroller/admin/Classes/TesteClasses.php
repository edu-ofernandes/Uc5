<?php 
require_once("Conexao.php");
require_once("ClasseBase.php");
require_once("Admin.php");
require_once("Usuario.php");
require_once("Categoria.php");
require_once("Atividade.php");
require_once("Jogo.php");

// conexao com banco
$conexao = new Conexao();


$usuarios = new Usuario();
$admin = new Admin();
$jogos = new Jogo();
$categorias = new Categoria();
$atividades = new Atividade();





?>