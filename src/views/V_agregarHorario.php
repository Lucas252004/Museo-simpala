<!-- FORMULARIO PARA CREAR UN NUEVO HORARIO -->
<?php
    include("../controllers/C_horarios.php");
?>

<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
<?php 
    include("../includes/header.php");
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Añadir un Nuevo Horario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                <form action="../controllers/C_horarios.php" method="post" enctype='multipart/form-data'>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Ingrese dia:</label>
                        <input type="date" class="form-control" id="recipient-name" name='dia' placeholder='Nombre del Producto' required>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Horario:</label>
                        <input type="time" class="form-control" id="recipient-name" name='horario' placeholder='Precio' required>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Cantidad de cupos:</label>
                        <input type="number" class="form-control" id="recipient-name" name='cupos' placeholder='Cantidad' required>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Elegir recorrido:</label>
                        <!-- <input type="file" class="form-control" id="recipient-name" name='foto' multiple> -->
                        <select id="" name="lista_recorrido" class="form-select" aria-label="Default select example">
                            <?php
                                foreach($recorridos as $recorrido){
                                    echo "<option value='". $recorrido['idRecorrido'] ."' >". $recorrido['descripcion_recorrido'] ."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Elegir guia:</label>
                        <!-- <input type="file" class="form-control" id="recipient-name" name='foto' multiple> -->
                        <select id="" name="lista_guia" class="form-select" aria-label="Default select example">
                            <?php
                                foreach($guias as $guia){
                                    echo "<option value='". $guia['nombre_guia'] ."' >". $guia['nombre_guia'] ."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Elegir idioma:</label>
                        <select id="" name="lista_idioma" class="form-select" aria-label="Default select example">
                            <option value="ingles">Ingles</option>
                            <option value="espanol">Español</option>
                            <option value="portugues">Portugues</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary"  name='insertar' value="Añadir">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>