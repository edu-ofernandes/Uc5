<?php
require_once("../include/connectaBD.php");
require_once("../include/validar.php");


if(isset($_GET['id'])){
    $idAgendamentos = addslashes($_GET['id']);
    $idAgendamentos = mysqli_escape_string($banco, $idAgendamentos);
    $sql = "DELETE  FROM agendamentos WHERE idagendamentos=".$idAgendamentos.";";
    $result = $banco->query($sql);
    header("location: event.php");
}
?>