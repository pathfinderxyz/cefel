<?php  
	include '../../coneccion/coneccion.php';


    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $rut = $_POST['rut'];
    $curso = $_POST['curso'];
    $idpersona = $_POST['idpersona'];

	
  
	
	$sql = pg_query("UPDATE certificado Set 

		nombre='$nombre',
		apellido='$apellido',
		rut='$rut',
		curso='$curso'

		Where id='$idpersona'");

	
	

    if ($sql) {
		header('Location: ../../dashboard.php?page=listadorefer');//Se guardo
	}

 
?>    