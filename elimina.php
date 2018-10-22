<?php


	$id = $_GET['id'];
	$mysqli = new mysqli("localhost", "id7569327_root", "veterinaria", "id7569327_bdpersona");		
	$sql = $mysqli->query("delete from tbcontactos where id='$id'");	
	echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=listar.php'>";



?>
<SCRIPT LANGUAGE="javascript"> 
alert("DATO ELIMINADO"); 
</SCRIPT> 
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=listar.php">