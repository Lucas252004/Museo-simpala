<?php
require_once('../models/C_db.php');
$conn = new Database();
$totems = $conn->getTotems();
$totems_recorridos = "";
if(isset($_POST['insertar_recorrido'])){
    $descripcion_recorrido = $_POST['nombre_recorrido'];
    foreach($totems as $totem){
        $totems_recorridos .= $_POST[$totem['idTotem']] ."; ";
    }
    $conn->insertarRecorrido($descripcion_recorrido, $totems_recorridos);
    header("Location: ../views/V_recorridos.php");
}
?>