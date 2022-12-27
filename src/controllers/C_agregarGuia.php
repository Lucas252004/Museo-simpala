<?php
require_once("../models/C_db.php");
$conn = new Database();
$guias = $conn->getGuias();

if (isset($_POST['agregarGuia'])) {
 
    $nombre_guia = $_POST['nombre_guia'];
    $conn->agregarGuia($nombre_guia);
    header('Location: ../views/V_agregarGuia.php'); 
          
}

if(isset($_POST['editar_guia'])){
    $id_guia = $_POST['id_guia'];
    $nombre_guia = $_POST['nombre_guia'];
    $conn->editarGuia($id_guia, $nombre_guia);
    header('Location: ../views/V_agregarGuia.php');
}
if(isset($_POST['borrar_guia'])){
    $id_guia = $_POST['id_guia'];
    $conn->borrarGuia($id_guia, $nombre_guia);
    header('Location: ../views/V_agregarGuia.php');
}
?>