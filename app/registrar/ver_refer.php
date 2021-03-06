<?php 
     
    include '../../coneccion/coneccion.php';
     include '../../Errores/mostrar_errores.php';
    $id = $_GET['id']; 

     
    $sql = pg_query("SELECT * FROM certificado");
    
    $row = pg_num_rows($sql);
    
?>
  <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Certificados registrados</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">Certificado</a>
                                </li>
                                <li class="breadcrumb-item active">Listado</li>
                            </ol>
                            <a href="?page=reg2"><button type="button" class="btn btn-warning d-none d-lg-block m-l-15">
                                <i class="icon-plus"></i> Añadir certificado</button></a>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-12">
                        
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Certificados</h4>
                                <h6 class="card-subtitle">Estos son todos tus certificados registrados</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                                <th>Acciones</th>
                                                <th>Nombre y Apellido</th>
                                                <th>RUT</th>
                                                <th>Nombre del curso</th>
                                                <th>Fecha</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                            if ($row) {
                                                while ($info = pg_fetch_assoc($sql)) {
                                            echo '<tr>
                                            <td>
                                             
                                                  <div class="btn-group">
                                                     <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="ti-settings"></i>
                                                     </button>
                                                     <div class="dropdown-menu animated flipInX">
                                                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal"  aria-haspopup="true" onClick="cmodalpeso ('.$info['id'].')" >Actualizar datos </a>
                                                        <!-- <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal"  aria-haspopup="true" onClick="cargamodal ('.$info['id'].')" >Agregar plan </a>-->
                                                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal"  aria-haspopup="true" onClick="cargamodaldelete ('.$info['id'].')" >Eliminar </a>
                                                   
                                                    </div>
                                                    </div>
                                                 </td>
                                                <td>'.$info['nombre'].' '.$info['apellido'].'</td>
                                                <td>'.$info['rut'].'</td>
                                                <td>'.$info['curso'].'</td>
                                                <td>'.$info['fecha'].'</td>
                                                
                                                </tr> 
                                                <div>
                                                     <div class="modal" id="modalpeso" tabindex="-1" role="">
                                                         <div class="modal-dialog" role="document">
                                                             <div class="modal-content">
                                                                 <div class="modal-header">
                                                                     <h4 class="modal-title" >Actualice los datos necesarios</h4>
                                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                 </div>
                                                                 <div class="modal-body">
                                                                      <div id="conte-modal3"></div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 <div>

                                                <div>
                                                    <div class="modal" id="modalclientes" tabindex="-1" role="">
                                                     <div class="modal-dialog" role="document">
                                                         <div class="modal-content">
                                                     <div class="modal-header">
                                                         <h4 class="modal-title" >Agregar Plan de entrenamiento</h4>
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                      </div>
                                                     <div class="modal-body">
                                                         <div id="conte-modal"></div>
                                                     </div>
                                                     </div>
                                                     </div>
                                                 </div>

                                                 <div>
                                                     <div class="modal" id="modaleliminar" tabindex="-1" role="">
                                                     <div class="modal-dialog" role="document">
                                                         <div class="modal-content">
                                                     <div class="modal-header">
                                                          <h4 class="modal-title" >Eliminar cliente</h4>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                     </div>
                                                     <div class="modal-body">
                                                         <div id="conte-modal2"></div>
                                                     </div>
                                                     </div>
                                                     </div>
                                                 <div>

                                              ' ;
                                             }
                                               }
                                             ?>



                                              
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                         </div>
                         
                        
                    </div>
                </div>
                
     </div>
     <script>
     function cmodalpeso(modal){
    var options = {
            modal: true,
            height:300,
            width:600
        };
    $('#conte-modal3').load('app/modales/actualizarpeso.php?id='+modal, function() {
        $('#modalpeso').modal({show:true});
    });    
    } 

    function cargamodal(modal){
    var options = {
            modal: true,
            height:300,
            width:600
        };
    $('#conte-modal').load('app/modales/ObtenerDatos.php?id='+modal, function() {
        $('#modalclientes').modal({show:true});
    });    
    } 

    function cargamodaldelete(modal){
    var options = {
            modal: true,
            height:300,
            width:600
        };
    $('#conte-modal2').load('app/modales/eliminar.php?id='+modal, function() {
        $('#modaleliminar').modal({show:true});
    });    
    } 
    
</script> 
           
 