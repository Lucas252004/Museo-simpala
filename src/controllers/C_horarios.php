<?php
require_once('../models/C_db.php');
$conn = new Database();
$guias = $conn->getGuias();
$recorridos = $conn->getRecorridos();
$horarios = $conn->getHorarios();
$horario_guias = array_merge($horarios, $guias);
$idioma_guia = "";
$dia = "";
if(isset($_POST['insertar'])){
    $dia = $_POST['dia'];
    $hora = $_POST['horario'];
    $cupos = $_POST['cupos'];
    $guia = $_POST['lista_guia'];
    $recorrido = $_POST['lista_recorrido'];
    $idioma = $_POST['lista_idioma'];
    $conn->insertarHorario($dia, $hora, $recorrido, $guia, $cupos, $idioma);
    header("Location: ../views/V_home.php");
}
?>