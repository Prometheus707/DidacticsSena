<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>


<?php

require_once("../../conexiondb.php");
$formatos= array( '.pdf','.docx','.xls');
  if(isset($_POST['enviar'])){

 $nombre=$_POST['nombre'];
 $descripcion=$_POST['descripcion'];
 $fechaRegistroTda = $_POST['fechaRegTda'];



// este es el codigo de guardar diferentes tipos de archivos //

    $formatos= array('.jpg' , '.png' , '.pdf','.docx','.xls','.mp3','.mp4', '.gif');
 		$nombreArchivo     =$_FILES ['archivo'] ['name'];
 		$nombreTmpArchivo = $_FILES ['archivo'] ['tmp_name'];
 		$ext= substr($nombreArchivo, strrpos( $nombreArchivo, '.' ));
 		if ( in_array($ext, $formatos)){
 			if ( move_uploaded_file ( $nombreTmpArchivo , "../../pdf/$nombreArchivo" )) {
 				echo  "Felicitaciones, archivo $nombreArchivo subido exitosamente" ;
 			} else{
 				echo  'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"' ;
 			}
 		} else {
 			header('location: ../tdaReflexion.php?opcion7=true');
 		}

// cierre de codigo //
$formato= array( '.jpg' , '.png' , '.pdf','.docx','.xls','.mp3','.mp4', '.gif');
$nombreArchivos     =$_FILES ['enlace'] ['name'];
$nombreTmpArchivos = $_FILES ['enlace'] ['tmp_name'];
$exte= substr($nombreArchivos, strrpos( $nombreArchivos, '.' ));
if ( in_array($exte, $formato)){
  if ( move_uploaded_file ( $nombreTmpArchivos , "../../pdf/$nombreArchivos" )) {
    echo  "Felicitaciones, archivo $nombreArchivos subido exitosamente" ;
  } else{
    echo  'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"' ;
  }
} else {
  echo  'por favor elija un archivo de diferente extensión' ;
}





mysqli_set_charset($conecta,"utf8");
// codigo de hecer varios insert into en la base de datos //
$consulta = "SELECT * FROM tda WHERE nombreTda = '".$nombre."'";

$resultado = $conecta->query($consulta);
if($resultado->num_rows >= 0)
{

$checkbox=$_POST['momento'];
foreach ($checkbox as $llave => $valor) {
  $ficha2= "INSERT INTO tda set idTipoTdas='$valor', nombreTda='$nombre', descripcionTda='$descripcion', rutaPDF='$nombreArchivo', enlace='$nombreArchivos',fechaRegistroTda='$fechaRegistroTda' ";
  $ejecutar_insertar_ficha2=mysqli_query($conecta, $ficha2);
}






if($conecta->multi_query($consulta) === TRUE)
{
header('location: ../tdaReflexion.php?opcion1=true');

}
else
{
echo "Error: " . $consulta . "<br>" . $conecta->error;
}
}

$conecta->close();
}

?>
</body>
</html>
