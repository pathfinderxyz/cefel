<?php 
      include '../../Errores/mostrar_errores.php';
     
    ?>
<style type="text/css">
    .card-subtitle{
       font-weight: 500 !important;
       color: #212529 !important;
    }
    .wrapper{ 
     
       width:600px; 
       overflow-y:scroll; 
       position:relative;
       height: 300px;
}
</style>
<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <br><section id="wrapper">
        
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                    </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="card card-body">
                            <h4 class="card-title" style="text-align: center;font-size: 22px;font-weight: 600;">Registrar nuevo certificado</h4><br>
                    
                             <?php
                                 if ($_GET["errorusuario"]=="si"){
                             ?>
                                 <div class="alert"><strong style="color: #ffffff;background-color: #B71C1C;padding: 8px;border-radius: 3px;"> ¡El Rut ya existe!</strong></div>
                           <?php  
                               }elseif ($_GET["registro"]=="exitoso") {
                                ?>
                                  <div class="success"><strong style="color: #ffffff;background-color: #5baf30;padding: 8px;border-radius: 3px;">¡Registro exitoso! <a href="?page=listadorefer">ver certificado</a> </strong></div> <br>
                            <?php 
                                 }  
                             ?>
                            
                            <div class="row">
                                
                                <div class="col-sm-12 col-xs-12">
                                     <form  action="app/registrar/reg22.php" method="post">
                                    
                                        <div class="form-group">
                                            <label for="exampleInputName2"> &nbsp;&nbsp;Nombre</label>
                                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Apellido</label>
                                            <input type="text" class="form-control" name="apellido" id="apellido" required>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;RUT</label>
                                            <input type="number" class="form-control" name="rut" id="rut" required>
                                        </div>

                                         <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Nombre del curso</label>
                                            <input type="text" class="form-control" name="curso" id="curso" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail2"> &nbsp;&nbsp;Fecha</label>
                                            <input type="date" class="form-control" name="fecha" id="fecha">
                                        </div>
                                   
                                        <br><br>
                                                      
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        
                                    </form>

                                </div>
                                 
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-3 col-xs-12">
                    </div>
                     
                </div>
       

    </section>

</body>