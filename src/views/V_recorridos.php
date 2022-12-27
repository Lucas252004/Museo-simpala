<?php
    session_start();
    if(isset($_SESSION['id_user']) && isset($_SESSION['name']) && $_SESSION['name'] == "admin"){
        require_once('../controllers/C_horarios.php');
        require_once ("../models/C_db.php");
        require("../controllers/C_recorridos.php");
    }
?>

<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
<?php 
    include("../includes/header.php");
?>
<!-- FORMULARIO PARA CREAR UN NUEVO RECORRIDO -->
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Añadir un Nuevo RECORRIDO</h5>
        </div>
            <div class="modal-body">
                <form action="../controllers/C_recorridos.php" method="post" enctype='multipart/form-data'>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Ingrese el nombre del recorrido:</label>
                        <input type="text" class="form-control" id="recipient-name" name='nombre_recorrido' placeholder='Nombre del Recorrido' required>
                    </div>
                    <div class="mb-3">
                    
                        <?php
                            foreach($totems as $totem){ 
                                echo "
                                <select id='' name='".$totem['idTotem']."' class='form-select' aria-label='Default select example'>";
                            foreach($totems as $totem){
                                echo"<option value='". $totem['nombre_totem'] ."'name='".$totem['idTotem']."' >". $totem['nombre_totem'] ."</option>";
                            }
                            echo"</select>
                            ";
                            }
                        ?>
                    </div>
        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <input type="submit" class="btn btn-primary"  name='insertar_recorrido' value="Añadir">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

