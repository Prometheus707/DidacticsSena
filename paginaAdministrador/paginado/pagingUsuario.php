<?php



/* variables */

$order="nombreTda ASC";
$url = basename($_SERVER ["PHP_SELF"]);
$limit_end = 5;
$init = ($ini-1) * $limit_end;

/* querys */
$count="SELECT COUNT(*) FROM usuario ";



  $num = $conecta->query($count);
  $x = $num->fetch_array();

  $total = ceil($x[0]/$limit_end);
  // se encarga de los caracteres //
 mysqli_set_charset($conecta,"utf8");
  echo "<table border='1' class=' table-bordered table-hover'>";
  echo "<thead>";
  echo "<tr >";


    echo "<th class='t2'>N.I</th>";
  echo "<th class='t3'>Nombre</th>";
  echo "<th class='t4'>Apellido</th>";
  echo "<th class='t5'>Teléfono</th>";
  echo "<th class='t5'>Correo</th>";
  echo "<th class='t6'>Estado</th>";
  echo "<th class='t7'>Rol</th>";
  echo "<th class='t8'>Permisos</th>";
  echo "<th class='t9'>Actualizar</th>";
  echo "<th class='t10'>Eliminar</th>";




  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";


  $select = "SELECT * FROM usuario inner join estado on estado.idEstado=usuario.estado inner join rol on rol.idRol=usuario.idRol ";
  $select .= " LIMIT $init, $limit_end";
  $c = $conecta->query($select);
  while($rows = $c->fetch_assoc())
  {
    echo "<tr style='text-align:center;'>";
    echo "<td class='t22' style='padding-bottom:4%;padding-top:4%'>".$rows['docUsuario']."</td>";
    echo "<td class='t33'>".$rows['nombreUsuario']."</td>";
    echo "<td class='t44'>".$rows['apellidoUsuario']."</td>
          <td class='t55'>".$rows['telefonoUsuario']."</td>
          <td class='t66'>".$rows['correoUsuario']."</td> ";

          if( $rows['nombreEstado'] == 'Activo' ) {

            echo "<td > <center> <button class='btn btn-success ' style='cursor: default; text.aling:center;' >".$rows['nombreEstado']." </center></button></td>";


            }

            if( $rows['nombreEstado'] == 'Inactivo' ) {

              echo "<td ><center> <button class='btn btn-danger ' style='cursor: default; text.aling:center;' >".$rows['nombreEstado']." </center></button></td>";


              }
              echo"

          <td>".$rows['nombreRol']."</td>
          <td class='t12'> <a href='permiso.php?id=".$rows["docUsuario"]."'> <input  class='btn tdasbtn' style='color: green;'  type='button' value=' Permiso'></a></td>
        	<td class='t12'> <a href='actualizarInstruc.php?id=".$rows["docUsuario"]."'> <input style='color: green;' class='btn tdasbtn'  type='button' value=' Actualizar'></a></td>
    			<td class='t12'> <a href='eliminarUsu.php?id=".$rows["docUsuario"]."'>  <button type='button' style='color: red;' class='btn tdasbtn'  onclick='return ConfirmDelet()'> eliminar </button> </a></td>";



    echo "</tr>";
  }

  echo "</tbody>";
  echo "<table><br>";

  /* numeración de registros [importante]*/
  echo "<div class='pagination'>";
  echo "<ul>";
  /****************************************/
  if(($ini - 1) == 0)
  {
    echo "<li style='background: #e2e2e2;'><a style='color:black' href='#'>&laquo;</a></li>";
  }
  else
  {
    echo "<li style='background: #e2e2e2'><a style='color:black' href='$url?pos=".($ini-1)."'><b>&laquo;</b></a></li>";
  }
  /****************************************/
  for($k=1; $k <= $total; $k++)
  {
    if($ini == $k)
    {
      echo "<li style='background: #e2e2e2'><a style='color:black' href='#'><b>".$k."</b></a></li>";
    }
    else
    {
      echo "<li style='background: #e2e2e2'><a style='color:black' href='$url?pos=$k'>".$k."</a></li>";
    }
  }
  /****************************************/
  if($ini == $total)
  {
    echo "<li  style='background: #e2e2e2'><a style='color:black' href='#'>&raquo;</a></li>";
  }
  else
  {
    echo "<li  style='background: #e2e2e2'><a style='color:black' href='$url?pos=".($ini+1)."'><b>&raquo;</b></a></li>";
  }
  /*******************END*******************/
  echo "</ul>";
  echo "</div>";

?>
<style>

@media screen and (max-width: 600px) {
       table {
           width:100%;
		     display: block;
       overflow-x: auto;
	     font-size:3vw;
   font-size:2vh;

       }


       thead {
           display: none;
		   	     font-size:3vw;
         font-size:2vh;
       }
       tr:nth-of-type(2n) {
           background-color: inherit;
       }
       tr td:first-child {
           background:  #Ff6b00;
		   color:white;
		   width:65vh;


       }
       tbody td {
           display: block;
           text-align:center;

   /* background:yellow; */
       }
       tbody tr:before {
           content: attr(data-th);
           display: block;
           text-align:center;
		    background: #Ff6b00;

	  font-style: oblique;
	  font-size:3vh;
	  font-weight: 500;


       }
	   		/* .table tr:nth-of-type(1):before { content: ""; } */

}
/* wstilo paginado*/



.pagination  ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

.pagination li {
  float: left;
}

.pagination li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 19px;
  text-decoration: none;
  font-size: 3vh;
}

#bo li a:hover {
  background-color: #FABC15;
  color: white;
}

th {
	    background: #Ff6b00;
}

 .t2{
	  width:8%;
    text-align: center;
	  font-size:3vh;
    font-weight: 400;

  }
  .t22{
	  width:8%;

	  font-size:2vh;


  }
  .t3{
	  width:9%;

    text-align: center;
	  font-size:3vh;
	  font-weight: 400;

  }
  .t33{
	  width:9%;


	  font-size:2vh;


  }
  .t4{
	  width:8%;

    text-align: center;
    font-size:3vh;
	  font-weight: 400;


  }
  .t44{
	  width:8%;


    font-size:2vh;
    word-break: break-all;


  }
  .t5{
	  width:5%;

    text-align: center;
	  font-size:3vh;
	  font-weight: 400;

  }.t55{
	  width:5%;

	  font-size:2vh;
    word-break: break-all;

  }.t6{
	  width:12%;

    text-align: center;
    font-size:3vh;
	  font-weight: 400;

  }
  .t66{
	  width:12%;
    font-size:2vh;
    word-break: break-all;




  } .t7{
	  width:10%;

    text-align: center;
	  font-size:3vh;
	  font-weight: 400;

  }
  .t8{
	  width:9%;

    text-align: center;
	  font-size:3vh;
	  font-weight: 400;

  }.t9{
	  width:7%;

   text-align: center;
   font-size:3vh;
	  font-weight: 400;

  }.t10{
	  width:7%;

	  text-align: center;
	  font-size:3vh;
	  font-weight: 400;

  }

  .t11{
	  width:7%;





  }
</style>
