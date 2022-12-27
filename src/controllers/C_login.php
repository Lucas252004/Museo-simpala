<?php
session_start();
require_once('../models/C_db.php');
$conn = new Database();
if(isset($_POST['uname']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    // $pass = md5($pass);
    if(empty($uname)){
        header("Location: ../views/V_login.php");
        exit();
    }else if(empty($pass)){
        header("Location: ../views/V_login.php");
        exit();
    }else{
        $result = $conn->verificarUsuario($uname, $pass);
        if(empty($result)){
            header("Location: ../views/V_login.php");
            exit();
        }else{
            foreach($result as $row){
                $_SESSION['name'] = $row['nombre_usuario'];
                // $_SESSION['email'] = $row['email'];
                $_SESSION['id_user'] = $row['idUsuario'];
                $_SESSION['time'] = time();
                header("Location: ../views/V_home.php");
                exit();
            }
        }
    }
}else{
    header("Location: V_login.php");
    exit();
}
?>