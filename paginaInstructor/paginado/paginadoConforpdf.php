<?php
require_once("../conexiondb.php");


/* variables */

$order="nombreTda ASC";
$url = basename($_SERVER ["PHP_SELF"]);
$limit_end = 3;
$init = ($ini-1) * $limit_end;

/* querys */
$count="SELECT COUNT(*) FROM conformargpdf";




  $num = $conecta->query($count);
  $x = $num->fetch_array();

  $total = ceil($x[0]/$limit_end);
  // se encarga de los caracteres //
 mysqli_set_charset($conecta,"utf8");
  echo "<table border='1'  class='table table-bordered table-hover'>
                  <thead> <tr>
                   <th class='nt2' >Nombre</th>
                   <th class='nt3'>Descripción</th>
                	<th class='nt4'>Gráfica</th>

                  </tr>
				      </thead>";
  echo "<tbody>";
  $rs = mysqli_query($conecta, "SELECT DISTINCT  MAX(idConforPdf) FROM conformargpdf");
  if ($row = mysqli_fetch_row($rs)) {
  $id = trim($row[0]);
  
  
  }

  $select = "SELECT * FROM conformargpdf order by idConforPdf desc";
  $select .= " LIMIT $init, $limit_end";
  $c = $conecta->query($select);
  while($rows = $c->fetch_assoc())
  {

    if($id == $rows['idConforPdf']) {

      echo "<tr>";
      echo "<td>".$rows['nombreConforPdf']."<button  class='btn btn-success content' style='cursor: default; float:right; margin-top:7vh;   background:green; width:40%; color:white;   '> Nuevo </button></td>";
      echo "<td>".$rows['descripcionCoPdf']."</td>
  
      <td><a href=../pdf/".$rows["pdfConfor"]."><img src='../images/ver.png'></a></td>";
  
  
      echo "</tr>";
    }
    
    if($rows['idConforPdf'] < $id  ) {

      echo "<tr>";
      echo "<td>".$rows['nombreConforPdf']."</td>";
      echo "<td>".$rows['descripcionCoPdf']."</td>
  
      <td><a href=../pdf/".$rows["pdfConfor"]."><img src='../images/ver.png'></a></td>";
  
  
      echo "</tr>";
    }
   
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
		   width:100%;

      
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

 .nt2{
	background:#Ff6b00;
    font-size:3vh;
     font-weight: 400;
	width:20%;
}.nt3{
	background:#Ff6b00;
    font-size:3vh;
     font-weight: 400;
	width:60%;
}.nt4{
	background:#Ff6b00;
    font-size:3vh;
     font-weight: 400;
	width:20%;
}


img.zoom {
   max-width: 90%;
   min-width: 80%;
    max-height: 30vh;   
min-height: 10vh;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
}
 
.transition {
    -webkit-transform: scale(1.8); 
    -moz-transform: scale(1.8);
    -o-transform: scale(1.8);
    transform: scale(1.8);
}
</style>

<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeOut(1500);
    },1296000);
 

});
</script>