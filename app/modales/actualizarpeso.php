<?php
include '../../coneccion/coneccion.php';
include 'Errores/mostrar_errores2.php';
$idpersonaplan = $_GET['id'];

$sql2 = pg_query("SELECT * from certificado where id ='$idpersonaplan'");
$row2 = pg_fetch_assoc($sql2);

  echo '<form action="app/registrar/update_peso.php" method="post">
      
        <div class="form-group">
         <label for="recipient-name" class="control-label">Nombre</label>
           <input type="text" class="form-control"  id="recipient-name" name="nombre" value="'.$row2['nombre'].'">
       </div>
       <div class="form-group">
         <label for="recipient-name" class="control-label">Apellido</label>
           <input type="text" class="form-control"  id="recipient-name" name="apellido" value="'.$row2["apellido"].'">
       </div>
       <div class="form-group">
         <label for="recipient-name" class="control-label">RUT</label>
           <input type="text" class="form-control"  id="recipient-name" name="rut" value="'.$row2["rut"].'">
       </div>
       <div class="form-group">
         <label for="recipient-name" class="control-label">Curso</label>
           <input type="text" class="form-control"  id="recipient-name" name="curso" value="'.$row2["curso"].'">
       </div>
        
       
             <input type="hidden" name="idpersona" value="'.$idpersonaplan.'">
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </form>    '
          ?>                                            