<?php
$conn = new Database();
$totems = $conn->getTotems();
if (isset($_POST['agregar_totem'])) {
    
        $nombre_totem = $_POST['nombre_totem'];
        $autor = $_POST['autor'];
        $ubicacion = $_POST['ubicacion'];
        $descripcionespañol = $_POST['descripcionespañol'];
        $descripcioningles = $_POST['descripcioningles'];
        $descripcionportugues = $_POST['descripcionportugues'];
        $file = $_FILES['imagen'];
        $carpeta = "../htmlsimpala/assets/imgs/";
        $ruta_provisional = $file['tmp_name'];
        $nombre_imagen = $file['name'];
        $src = $carpeta.$nombre_imagen;
        move_uploaded_file($ruta_provisional, $src);
        $imagen = '../htmlsimpala/assets/imgs/'.$nombre_imagen; 
        $sql = $conn->agregarTotem($nombre_totem, $imagen, $descripcionespañol, $descripcioningles, $descripcionportugues, $ubicacion, $autor);
        header('Location: V_home.php'); 

               
}
?>