<?php
require_once('../controllers/C_turnos.php');

if(isset($_SESSION['id_user']) && isset($_SESSION['name'])){
require_once('../controllers/C_horarios.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>Reserva tu visita</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="../htmlsimpala/index.html">Museo Simpala</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    </ul>
                </div>
            </div>
        </nav>

<body>
    <div align="center">
        <h1>Reserva tu visita al museo</h1>
        <a href="../controllers/C_logout.php" class="btn btn-danger">Cerrar Sesion</a>
        <br><form action="../controllers/C_turnos.php" method="post" class="col-6 p-3" style="background-color: #E7E7E7; border-radius: 5px;" >
            <h5>Seleccione un horario disponible</h5>
            <select class="form-select" name='idhorario' aria-label="Default select example">
                <!-- <option selected>Seleccione Dia y Horario</option> -->
                <?php
                foreach($horarios as $i){
                    if($i['cupos'] > 0){
                        echo "<option value='". $i['idhorario'] ."' >". $i['dia'] ." | " . $i['hora'] ."hs | ". $i['idioma_guia'] ." | ".$i['nombre_guia']."</option>";
                    }
                }
                ?>
            </select><br>
            <input type="submit" name="enviar_reserva" value="Reservar" class="btn btn-primary"> 
        </form>
        <h2>Tus turnos</h2>
        <div class="col-6">
        <h2>Tabla de Totems</h2>
        <table class="table">
        <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Dia y hora</th>
        <th scope="col">Id Horario</th>
        <th scope="col">Cancelar</th>
        </tr>
        </thead>
        <?php
        foreach($turnos as $turno){
            echo "
            <form action='../controllers/C_turnos.php' method='POST' enctype='multipart/form-data' autocomplete='off'>
            <tr>
            <th scope='row'><input type='text' name='idTurno' readonly value='".$turno['idTurno']."'></th>
            <td><input type='text' name='dia_hora' readonly value='".$turno['horario']."'></td>
            <td><input type='text' name='idHorario' readonly value='".$turno['Horario_idhorario']."'></td>
            <td><input type='submit' name='borrar_turno' value='Cancelar Turno' class='btn btn-danger'></td>
            </tr>
            </form> 
            ";
        }
        ?>
    </div>
</body>
</html>
<?php
}else{
    header("Location: ../controllers/C_logout.php");
    exit();
}
?>