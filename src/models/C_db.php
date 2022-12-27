<?php
class Database{
    private $con; 
    //constructor
    public function __construct()
    {
        //me conecto a la base de datos bd_prueba
        $this->con = new mysqli('localhost', 'root', '', 'museo');
    }
    public function registrarUsuario($uname, $email, $pass){
        $sql = $this->con->query("INSERT INTO usuario (nombre_usuario, correo, password) VALUES ('$uname', '$email', '$pass')");
    } 
    public function getTotems(){
        //Guardo la consulta en una variable
        $query = $this->con->query("SELECT * FROM totem");
        $i = 0;
        $retorno = [];

        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;  //Almaceno los valores de la consulta en array
            $i++;
        }
        //devuelvo el array con los valores de la base de datos
        return $retorno;
    }
    public function insertarRecorrido($descripcion, $totems_recorridos){
        $sql = $this->con->query("INSERT INTO recorrido (descripcion_recorrido, totems) VALUES ('$descripcion', '$totems_recorridos')"); 
    }
    public function actualizarTotem($id_totem, $nombre_totem, $descripcionespañol, $descripcioningles, $descripcionportugues, $ubicacion, $autor){
        $sql = $this->con->query("UPDATE totem SET nombre_totem = '$nombre_totem', descripcion_español='$descripcionespañol', descripcion_ingles='$descripcioningles', descripcion_portugues='$descripcionportugues', ubicacion_totem='$ubicacion', autor_totem='$autor' WHERE idTotem = '$id_totem'");   
    }
    public function verificarUsuario($uname, $pass){
        //Guardo la consulta en una variable
        $query = $this->con->query("SELECT * FROM usuario WHERE nombre_usuario = '$uname' AND password = '$pass'");
        $i = 0;
        $retorno = [];

        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;  //Almaceno los valores de la consulta en array
            $i++;
        }
        //devuelvo el array con los valores de la base de datos
        return $retorno;
    }  

    public function verificarUsuarioExistente($uname, $email){

        $query = $this->con->query("SELECT * FROM usuario WHERE nombre_usuario = '$uname' OR correo= '$email'");
        $i = 0;
        $retorno = [];

        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;  //Almaceno los valores de la consulta en array
            $i++;
        }
        //devuelvo el array con los valores de la base de datos
        return $retorno;

    }
    public function insertarHorario($dia, $hora, $recorrido, $guia, $cupos, $idioma){
        $sql = $this->con->query("INSERT INTO horario (hora, dia, nombre_guia, Recorrido_idRecorrido, cupos, idioma_guia) VALUES ('$hora', '$dia', '$guia', '$recorrido', '$cupos', '$idioma')");
    }
    public function getGuias(){
        //Guardo la consulta en una variable
        $query = $this->con->query("SELECT * FROM guia");
        $i = 0;
        $retorno = [];

        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;  //Almaceno los valores de la consulta en array
            $i++;
        }
        //devuelvo el array con los valores de la base de datos
        return $retorno;
    }  
    public function getIdRecorrido($id_horario){
        //Guardo la consulta en una variable
        $query = $this->con->query("SELECT recorrido_IdRecorrido FROM horario WHERE idhorario = '$id_horario'");
        $i = 0;
        $retorno = [];

        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;  //Almaceno los valores de la consulta en array
            $i++;
        }
        //devuelvo el array con los valores de la base de datos
        return $retorno;
    }  
    public function getRecorridos(){
        //Guardo la consulta en una variable
        $query = $this->con->query("SELECT * FROM recorrido");
        $i = 0;
        $retorno = [];

        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;  //Almaceno los valores de la consulta en array
            $i++;
        }
        //devuelvo el array con los valores de la base de datos
        return $retorno;
    }
    public function getTurnos($id_user){
        //Guardo la consulta en una variable
        $query = $this->con->query("SELECT * FROM turno WHERE Usuario_idUsuario = '$id_user'");
        $i = 0;
        $retorno = [];

        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;  //Almaceno los valores de la consulta en array
            $i++;
        }
        //devuelvo el array con los valores de la base de datos
        return $retorno;    
    }
    public function borrarTurno($id_turno){
        $sql = $this->con->query("DELETE FROM turno WHERE idTurno = '$id_turno'");
    }
    public function insertarTurno($horario_turno,$id_usuario,$id_horario,$id_recorrido){
        $sql = $this->con->query("INSERT INTO turno (horario, Usuario_idUsuario, Horario_idhorario, id_recorrido) VALUES ('$horario_turno', '$id_usuario','$id_horario','$id_recorrido')"); 
    }
    public function getHorarios(){
        //Guardo la consulta en una variable
        $query = $this->con->query("SELECT * FROM horario");
        $i = 0;
        $retorno = [];

        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;  //Almaceno los valores de la consulta en array
            $i++;
        }
        //devuelvo el array con los valores de la base de datos
        return $retorno;
    }
    public function getHorarioTurno($id_horario){
        //Guardo la consulta en una variable
        $query = $this->con->query("SELECT * FROM horario WHERE idhorario = '$id_horario'");
        $i = 0;
        $retorno = [];

        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;  //Almaceno los valores de la consulta en array
            $i++;
        }
        //devuelvo el array con los valores de la base de datos
        return $retorno;
    }
    public function agregarTotem($nombre_totem, $foto, $descripcionespañol, $descripcioningles, $descripcionportugues, $ubicacion, $autor){
        $sql = $this->con->query("INSERT INTO totem (nombre_totem, imagen, descripcion_español, descripcion_ingles, descripcion_portugues, ubicacion_totem, autor_totem) VALUES ('$nombre_totem', '$foto', '$descripcionespañol', '$descripcioningles', '$descripcionportugues', '$ubicacion', '$autor')");
    }
    public function borrarTotem($id_totem){
        $sql = $this->con->query("DELETE FROM totem WHERE idTotem = '$id_totem'");
    }
    public function agregarGuia($nombre_guia){
        $sql = $this->con->query("INSERT INTO guia(nombre_guia) VALUES ('$nombre_guia')");
    }

    public function editarGuia($id_guia, $nombre_guia){
        $sql = $this->con->query("UPDATE guia SET nombre_guia = '$nombre_guia' WHERE id_guia = '$id_guia'");
    }
    public function borrarGuia($id_guia){
        $sql = $this->con->query("DELETE FROM guia WHERE id_guia = '$id_guia'");
    }
    
    public function getHorarioPorDia($dia){
        //Guardo la consulta en una variable
        $query = $this->con->query("SELECT * FROM horario WHERE dia = '$dia'");
        $i = 0;
        $retorno = [];

        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;  //Almaceno los valores de la consulta en array
            $i++;
        }
        //devuelvo el array con los valores de la base de datos
        return $retorno;
    }
    public function restarCupo($id_horario){
        $sql = $this->con->query("UPDATE horario SET cupos = cupos - 1 WHERE idhorario = '$id_horario'");   
    }
    public function sumarCupo($id_horario){
        $sql = $this->con->query("UPDATE horario SET cupos = cupos + 1 WHERE idhorario = '$id_horario'");      
    }
    }

?>