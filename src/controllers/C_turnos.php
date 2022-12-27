<?php
require_once('../models/C_db.php');
session_start();

$conn = new Database();
$dia = "";
$hora = "";
$i = "";
$id_user = $_SESSION['id_user'];
$turnos = $conn->getTurnos($id_user);
if(isset($_POST['enviar_reserva'])){
    $id_horario = $_POST['idhorario'];
    $conn->restarCupo($id_horario);
    $dia_hora = $conn->getHorarioTurno($id_horario);
    $id_recorrido = $conn->getIdRecorrido($id_horario);
    foreach($id_recorrido as $i){
        $i = $i['recorrido_IdRecorrido'];
    }
    foreach($dia_hora as $d){
        $dia = $d['dia'];
        $hora = $d['hora'];
    }
    $horario_turno = $dia." ".$hora;
    
    $conn->insertarTurno($horario_turno,$id_user,$id_horario,$i);
    header("Location: ../views/V_turno.php");
}
if(isset($_POST['borrar_turno'])){
    $id_turno = $_POST['idTurno'];
    $id_horario = $_POST['idHorario'];
    $conn->borrarTurno($id_turno);
    $conn->sumarCupo($id_horario);
    header("Location: ../views/V_turno.php");
}
?>