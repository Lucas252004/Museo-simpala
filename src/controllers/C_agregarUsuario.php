<?php
session_start();
require_once('../models/C_db.php');
$conn = new Database();
if(isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['email'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $email= validate($_POST['email']);
    // $pass = md5($pass);
    if(empty($uname)){
        header("Location: ../views/V_registro.php?error=Nombre de usuario incorrecto");
        exit();
    }else if(empty($pass)){
        header("Location: ../views/V_registro.php?error=Contraseña incorrecto");
        exit();
    }else if(empty($email)){
        header("Location: ../views/V_registro.php?error=Correo incorrecto");
        exit();
    }else{
        $result = $conn->verificarUsuarioExistente($uname, $email);
        if(empty($result)){ 
            $conn->registrarUsuario($uname, $email, $pass);
            header("Location: ../views/V_login.php");
        }else{
            header("Location: ../views/V_registro.php?error=Nombre de usuario y/o correo en uso!");
        }
    }
}else{
    header("Location: V_registro.php?error=Error");
    exit();
}
?>