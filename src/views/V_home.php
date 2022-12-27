<?php
  session_start();
  if(isset($_SESSION['id_user']) && isset($_SESSION['name']) && $_SESSION['name'] == "admin"){
    require_once('../controllers/C_horarios.php');
    require("../controllers/C_agregarGuia.php");
    require("../controllers/C_agregarTotem.php");
    require("../controllers/C_recorridos.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/styles_login.css"> -->
    <title>HOME</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'></head>
<body>
  <?php
    include("../includes/header.php")
  ?>
  <div align="center">
    <h1>Bienvenido <?php echo $_SESSION['name']; ?></h1><br>
  </div>
<!--TABLA CON LOS TOTEMS-->

<div align="center">
<div class="align-middle"> 
  <h1>Tabla de Totems</h1>   
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion Español</th>
        <th>Descripcion Ingles</th>
        <th>Descripcion Portugues</th>
        <th>Ubicacion</th>
        <th>Autor</th>
        <th>Imagen</th>
        <th>Editar</th>
        <th>Borrar</th>
      </tr>
    </thead>


    <tbody>     
      <?php
        foreach($totems as $totem){
          echo "
          <form action='../controllers/C_editar_totems.php' method='POST' enctype='multipart/form-data' autocomplete='off'>
          <tr>
            <td scope='row'><input type='text' style='width: 2rem; border:none' name='idTotem' readonly value='".$totem['idTotem']."'></td>
            <td><input type='text' style='width: 7rem; border:none;cursor:pointer  '   name='nombre_totem' value='".$totem['nombre_totem']."'></td>
            <td><input type='text' style='width: 9.5rem; border:none;cursor:pointer ' name='descripcionespañol' value='".$totem['descripcion_español']."'></td>
            <td><input type='text' style='width: 9.5rem; border:none;cursor:pointer ' name='descripcioningles' value='".$totem['descripcion_ingles']."'></td>
            <td><input type='text' style='width: 9.5rem; border:none;cursor:pointer ' name='descripcionportugues' value='".$totem['descripcion_portugues']."'></td>
            <td><input type='text' style='width: 9.5rem; border:none;cursor:pointer ' name='ubicacion' value='".$totem['ubicacion_totem']."'></td>
            <td><input type='text' style='width: 9.5rem; border:none;cursor:pointer' name='autor' value='".$totem['autor_totem']."'></td>
            <td><img src='".$totem['imagen']."' style='width: 40px;px; heigth: 40px;'></td>
            <td><input type='submit' name='editar' value='Editar' class='btn btn-warning'></td>
            <td><input type='submit' name='borrar' value='Borrar' class='btn btn-danger'></td>
          </tr>
          </form> 
          ";
        }
      ?>
    </tbody>
</table>
</div>

</div>



  <!--TABLA CON LOS HORARIOS-->

  
  <div align="center">
    <div class="col-6">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Hora</th>
            <th scope="col">Dia</th>
            <th scope="col">Guia</th>
            <th scope="col">Recorrido</th>
            <th scope="col">Cupos</th>
          </tr>
        </thead>
        <tbody>
          <h2>Tabla de Horarios</h2>
          <?php
            foreach($horarios as $horario){
              echo "
              <tr>
                <th scope='row'>".$horario['idhorario']."</th>
                <td>".$horario['hora']." hs</td>
                <td>".$horario['dia']."</td>
                <td>".$horario['nombre_guia']."</td>
                <td>".$horario['recorrido_idRecorrido']."</td>
                <td>".$horario['cupos']."</td>
              </tr> 
              ";
            }
          ?>
        </tbody>
      </table>
</table>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>
<?php
  }else{
    if(isset($_SESSION['id_user']) && isset($_SESSION['name']) && $_SESSION['name'] != "admin"){
      header("Location: ../../");

  }else{
    header("Location: ../controllers/C_logout.php");
    exit();
  }
}
?>