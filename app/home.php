  <?php 
     
    include '../../coneccion/coneccion.php';
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
                       <strong><h4 class="text-themecolor">Bienvenido <?php  echo $_SESSION['nombre'];?></h4></strong> 
                    </div>
                    
                </div>
                
                 <div class="row">
                    <!-- Column -->
                    
                    <!-- Column -->
                    <div class="col-lg-6">
                        <div class="card">
                         
                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col-6">
                                        <h3>Certificados 2021</h3>
                                       </div>
                                    <div class="col-6 align-self-center display-6 text-right">
                                        <h2 class="text-success"><?php echo $row;  ?> Certificado</h2></div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center"># RUT</th>
                                            <th>Nombre y apellido</th>
                                            <th>Curso</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if ($row) {
                                                while ($info = pg_fetch_assoc($sql)) {
                                            echo 
                                        '<tr>
                                                <td>'.$info['rut'].'</td>
                                                <td>'.$info['nombre'].' '.$info['apellido'].'</td>
                                                <td>'.$info['curso'].'</td>
                                                
                                                
                                                </tr>  ';
                                             }
                                               }else{

                                                }
                                             ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>