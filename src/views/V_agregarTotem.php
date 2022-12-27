<?php
require_once ("../models/C_db.php");
require("../controllers/C_agregarTotem.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>
<body>
<?php
  include ("../includes/header.php");
?>

            <!-- AGREGAR TOTEMS -->

<div align="center">          
<div class="modal-body col-6">
    
    <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre del totem</label>
                    <input id="nombre_totem" class="form-control" type="text" name="nombre_totem" placeholder="Nombre Totem" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">Autor</label>
                    <input id="autor" class="form-control" type="text" name="autor" placeholder="Autor" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cantidad">Ubicacion</label>
                    <input id="ubicacion" class="form-control" type="text" name="ubicacion" placeholder="Ubicacion" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="descripcion">Descripción Español</label>
                    <textarea id="descripcionespañol" class="form-control" name="descripcionespañol" placeholder="Descripción Español" rows="3" required></textarea>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="descripcion">Descripción Ingles</label>
                    <textarea id="descripcioningles" class="form-control" name="descripcioningles" placeholder="Descripción Ingles" rows="3" required></textarea>
                </div>
            </div>



            <div class="col-md-12">
                <div class="form-group">
                    <label for="descripcion">Descripción Portugues</label>
                    <textarea id="descripcionportugues" class="form-control" name="descripcionportugues" placeholder="Descripción Portugues" rows="3" required></textarea>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control" name="imagen" required>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" name='agregar_totem' type="submit">Agregar</button>
    </form>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>



    
    