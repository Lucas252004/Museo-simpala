<?php
require_once('../models/C_db.php');
$conn = new Database();
if(isset($_POST['editar'])){
    $id_totem = $_POST['idTotem'];
    $nombre = $_POST['nombre_totem'];
    $descripcionespañol = $_POST['descripcionespañol'];
    $descripcioningles = $_POST['descripcioningles'];
    $descripcionportugues = $_POST['descripcionportugues'];
    $ubicacion = $_POST['ubicacion'];
    $autor = $_POST['autor'];
    $conn->actualizarTotem($id_totem, $nombre, $descripcionespañol, $descripcioningles, $descripcionportugues, $ubicacion, $autor);
    header("Location: ../views/V_home.php");
}
if(isset($_POST['borrar'])){
    $id_totem = $_POST['idTotem'];
    $conn->borrarTotem($id_totem);
    header("Location: ../views/V_home.php");
}
?>