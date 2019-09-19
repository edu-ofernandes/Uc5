<?php
require_once("../include/connectaBD.php");
require_once("../include/validar.php");


if(isset($_GET['id'])){
    $idAgendamentos = $_GET['id'];
    $sql = "DELETE  FROM agendamentos WHERE idagendamentos=".$idAgendamentos.";";
    $result = $banco->query($sql);
    header("location: event.php");
}
?>