<?php
    require_once ("../models/C_db.php");
    require("../controllers/C_agregarGuia.php");
?>

<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
<?php 
    include("../includes/header.php");
?>
<!-- AGREGAR GUIAS -->


    <form action="../controllers/C_agregarGuia.php" method="POST" enctype="multipart/form-data" autocomplete="off"> 
    
    <div class="row justify-content-center">
        
            <div class="col-md-5">   
            <br>    
                <div class="form-group">
                   
                    <input id="nombre_guia" class="form-control" type="text" name="nombre_guia" placeholder="Nombre del Guia" required>
                    <input style="background-color: blue; color:white; " id="agregarGuia" class="form-control" type="submit" name="agregarGuia" placeholder="Nombre del Guia" required>
                </div>
            </div>
   </div>
    </form>

<div class="row justify-content-center align-items-center   ">

<div class="col-md-5">
    <h2>Guias</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre del guia</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <?php
            foreach($guias as $guia){
                echo "
                <form action='../controllers/C_agregarGuia.php' method='POST' enctype='multipart/form-data' autocomplete='off'>
                    <tr>
                        <th scope='row'><input type='text' name='id_guia' readonly value='".$guia['id_guia']."'></th>
                        <td><input type='text' name='nombre_guia' value='".$guia['nombre_guia']."'></td>
                        <td><input type='submit' name='editar_guia' value='Editar' class='btn btn-warning'></td>
                        <td><input type='submit' name='borrar_guia' value='Borrar' class='btn btn-danger'></td>
                    </tr>
                </form> 
                ";
            }
        ?>
    </table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>




