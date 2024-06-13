<?php


/* variables */

$order="nombreTda ASC";
$url = basename($_SERVER ["PHP_SELF"]);
$limit_end = 3;
$init = ($ini-1) * $limit_end;

/* querys */
$count="SELECT COUNT(*) FROM sugerencia";



  $num = $conecta->query($count);
  $x = $num->fetch_array();

  $total = ceil($x[0]/$limit_end);
  // se encarga de los caracteres //
 mysqli_set_charset($conecta,"utf8");
  echo "<table border='1' class='table table-bordered table-hover'>";
  echo "<thead>";
  echo "<tr style='text-align: center'>";
  echo "




                  <th class='t2' >#</th>
                  <th class='t3'>Sugerencia</th>
                  <th class='t4'>Fecha</th>
                  <th  class='t5'> Instructor</th>
                  <th class='t6'>Respuesta</th>
                  <th  class='t7'>Archivo</th>
                  <th  class='t8'>Atender</th>
				  <th  class='t9'>Eliminar</th>


  ";


  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";


  $select = "SELECT * FROM usuario inner join sugerencia on usuario.idUsuario=sugerencia.idUsuariofk order by idSugerencia DESC";
  $select .= " LIMIT $init, $limit_end";
  $c = $conecta->query($select);
  while($rows = $c->fetch_assoc())
  {
    echo "<tr style='text-align: center'>";
    echo "<td>".$rows['idSugerencia']."</td>";
    echo "<td>".$rows['sugerencia']."</td>";
    echo "<td>".$rows['fecha']."</td>
          <td>".$rows['nombreUsuario']."</td>
          <td>".$rows['comentario']."</td>
          <td><a href='../archivoInstruc/".$rows['pdfUsuario']."'>".$rows['pdfUsuario']."</a></td>
          <td  style='text-align: center'> <a href='atenderSugerencia.php?id=".$rows["idSugerencia"]."'>  <button style='color: green;' class='btn tdasbtn'  type='button'  '> Atender </button> </a></td>
          <td  style='text-align: center'> <a href='eliminarSugerencia.php?id=".$rows["idSugerencia"]."'>  <button style='color: red;' class='btn tdasbtn'  type='button'   onclick='return ConfirmDelet()'> Eliminar </button> </a></td>
        ";


    echo "</tr>";
  }

  echo "</tbody>";
  echo "<table>";

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
img{
	max-width:10vh;
	min-width:5vh;
}
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
		   	  font-family:  "Latin Modern Roman 10";
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
	  width:5%;

	  font-family:  "Latin Modern Roman 10";

	  font-size:3vh;
	  font-weight: 700;
	  text-align:center;
  }
  .t3{
	  width:10%;

	 
	  font-size:3vh;
	  font-weight: 400;
	   
  }
  .t4{
	  width:9%;

	 
	  font-size:3vh;
	  font-weight: 400;
	   
  }
  .t5{
	  width:10%;

	 
	  font-size:3vh;
	  font-weight: 400;
	   
  }.t6{
	  width:10%;

	 
	  font-size:3vh;
	  font-weight: 400;
	   
  }  .t7{
	  width:10%;

	 
   font-size:3vh;
	  font-weight: 400;
	   
  }
  .t8{
	  width:10%;

	 
   font-size:3vh;
	  font-weight: 400;
	   
  }.t9{
	  width:10%;

	 
	  font-size:3vh;
	  font-weight: 400;
	   
  }
</style>
