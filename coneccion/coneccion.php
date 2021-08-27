<?php  
	$user = 'qcmudxxlfkvced';
	$passwd = '62ffad1dd6f0a3b0fcf93a8dcb9ad9c9e8e6b9bdda14689ee30f44642e4de520';
	$db = 'desvj6e5h57r3r';
	$port = 5432;
	$host = 'ec2-18-235-4-83.compute-1.amazonaws.com';
	$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
	$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());

?>

