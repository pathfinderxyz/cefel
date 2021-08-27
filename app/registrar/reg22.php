<?php  
	include '../../coneccion/coneccion.php';


    $nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$rut = $_POST['rut'];
	$fecha = $_POST['fecha'];
	$curso = $_POST['curso'];
	
  
	
	$sql = pg_query("INSERT INTO certificado(nombre,apellido,rut,curso,fecha) 
		VALUES ('$nombre','$apellido','$rut','$curso','$fecha')");

 if ($sql) {
		header('Location: ../../dashboard.php?page=reg2&registro=exitoso');//Se guardo
	}else {
		header('Location: ../../dashboard.php?page=reg2&errorusuario=si');//No se guardo el correo o el pasaporte ya existe !
	}

 
?>          
