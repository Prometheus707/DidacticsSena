<?php

require_once("../conexiondb.php");
$id=$_GET['id'];

mysqli_set_charset($conecta,"utf8");

$sql = "DELETE FROM conformargpdf WHERE idConforPdf=".$id;

if ($conecta->query($sql) === TRUE){

	header('location: tdaEquipos.php?opcion8=true');
}
else
{
	echo "Error al ejecutar la consulta: ".$conecta->error;
}
$conecta->close();

?>