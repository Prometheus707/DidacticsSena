<?php
session_start();


/*<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 */
   require_once("../conexiondb.php");

   /* creo las variables que vienen del formulario */
   $n_user=$_POST['userU'];
   $clave=$_POST['pass'];


   /* creo la consulta en estilos orientados en objetos*/
   $resultado=$conecta->query("SELECT * FROM usuario WHERE docUsuario='$n_user' AND claveUsuario='$clave' ");

   if ($resultado->num_rows > 0){
       
     /*si existen coincidencias entre usuario y clave en la base de datos, extraigo copn $fila[3]
     el tipo de usuario (administrador o empleado)*/
    // while ($fila = $resultado->fetch_row()){
         
     while($row = $resultado->fetch_assoc()) {
         
   //creo las variables de sesion//
   
   
        //if ($result->num_rows > 0) {
            
          // output data of each row
       //   while($row = $result->fetch_assoc()) {
        
           $_SESSION['nombre']=$row["nombreUsuario"];
           $_SESSION['apellido']=$row["apellidoUsuario"];
           $_SESSION['docUsuario']=$n_user;
           $_SESSION['claveUsuario']=$clave;
           $_SESSION['idUsuario']=$row["idUsuario"];
        
           /*
           $_SESSION['nombre']=$fila[6];
              $_SESSION['apellido']=$fila[7];
           $_SESSION['docUsuario']=$n_user;
           $_SESSION['claveUsuario']=$clave;
           $_SESSION['idUsuario']=$fila[0];
           */
           
   
            if ($row["estado"]=='1'){
            
                   if ($row["idRol"]==2)
                   {
                     header('location: ../paginaAdministrador/administrador.php');
                
                   }
            
            
                  if($row["idRol"]==1)
                  {
                    header('location: ../paginaInstructor/instructor.php');
            
                  }
            }
           else
             {header('location: ../index.php?opcion21=true');}

   }//cierre del while//
   
   //liberar el conjunto de resultado//
   $resultado->close();
   
   }
   else 
   {
       header("Location: ../index.php?opcion22=true");
       
   }
?>

<!--
  </body>
</html>
-->