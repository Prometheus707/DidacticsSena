<?php
session_start();
 ?>

<?php
   require_once("../conexiondb.php");


  $busqueda=strtolower($_REQUEST['busqueda']);
   if(empty($busqueda)){
     header("location: tdaEquipos.php");
   }

/* codigo de cerrar sesion */
  if(($_SESSION['idUsuario'])!=''){
   ?>
   <?php
   /* capturar variable por método GET */
   if (isset($_GET['pos']))
     $ini=$_GET['pos'];
   else
     $ini=1;
   ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>administrador</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">


    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

<link href="../css/plantillaAdmin.css" rel="stylesheet">
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
  background-color: #FFC529;
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
	  width:20%;

	  
	  font-size:3vh;
	  font-weight: 400;
	 
  }
  .t3{
	  width:45%;

	  
	   font-size:3vh;
	  font-weight: 400;
	   
  }
  .t4{
	  width:15%;

	  
	   font-size:3vh;
	  font-weight: 400;
	   
  }
  .t5{
	  width:15%;

	  font-family:  "Latin Modern Roman 10";
    font-size:3vh;
	  font-weight: 400;
	   
  }
</style>
 
<script type="text/javascript">
        $(function() {
          $('#padre > a').hover(function() {
            $('#otro_div').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div').css('color', '');
          });
        });
    </script>  <script type="text/javascript">
        $(function() {
          $('#padre2 > a').hover(function() {
            $('#otro_div2').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div2').css('color', '');
          });
        });
    </script><script type="text/javascript">
        $(function() {
          $('#padre3 > a').hover(function() {
            $('#otro_div3').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div3').css('color', '');
          });
        });
    </script>
	<script type="text/javascript">
        $(function() {
          $('#padre4 > a').hover(function() {
            $('#otro_div4').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div4').css('color', '');
          });
        });
    </script>
	<script type="text/javascript">
        $(function() {
          $('#padre5 > a').hover(function() {
            $('#otro_div5').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div5').css('color', '');
          });
        });
    </script>   <script type="text/javascript">
        $(function() {
          $('#padre6 > a').hover(function() {
            $('#otro_div6').css('color', 'white');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div6').css('color', '');
          });
        });
    </script>
</head>				<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center"><img src="../imagenes/usuarioD.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h5 class="m-0"> <?php   echo  ''  .$_SESSION['nombre']." <br> ".$_SESSION['apellido']; ?></h5>
        <p class="font-weight-light text-muted mb-0">Instructor</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Navegación</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item" id="padre4" >
      <a  href="instructor.php" id="miBoton" class="nav-link   ">
                <i  id="otro_div4" class="fa fa-th-large mr-3  fa-fw navimmg"></i>
                Técnicas Didácticas
            </a>
    </li>
    <li class="nav-item" id="padre5" >
      <a href="quintoBoton.php"  id="miBoton" class="nav-link ">
                <i  id="otro_div5"  class="far fa-file-alt  mr-3  fa-fw navimmg " style=""></i>
                        Descubra más aquí
            </a>
    </li>  <li class="nav-item" id="padre6">
      <a href="https://epcagropecuariocauca.blogspot.com" target="_blank" id="miBoton" class="nav-link ">
                <i   id="otro_div6"   class=" fa fa-globe  mr-3  fa-fw navimmg "></i>
                Banco de Recursos Didácticos 
            </a>
    </li>
    <li class="nav-item" id="padre">
      <a href="datosUsuario.php" id="miBoton" class="nav-link ">
                <i   id="otro_div"  class="fa fa-address-card  mr-3  fa-fw navimmg "></i>
                Mis Datos
            </a>
    </li>




    <li class="nav-item " id="padre2" >
      <a href="sugerencia.php"  id="miBoton"   class="nav-link  ">
                <i id="otro_div2" class="fa fa-cubes mr-3  fa-fw navimmg"></i>
                Sugerencias
            </a>
    </li>

  </ul>
</div>
<!-- End vertical navbar -->
<body>

<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->

    <div style="background:white; margin-top:-32px;" class="bg-red p-5 rounded ps  shadow-sm ">
	  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">menú</small></button>

        <p class="lead mb-0 text-muted">
   <h4 class="" style="float:left; font-size:5vh;font-size:2.5vw;   " > Formas De Conformar Grupos</h4>
	  <a href="grupos.php"> <button style="float:right" width="60%" class="btn btn-danger text-light " > &nbsp&nbsp&nbsp Volver &nbsp&nbsp&nbsp </button></a>

</p>		</div><br>
  <div class="row ">





<div class="w3-content w3-white" style="width:100%; display:table">

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">
    
  <div style=" display: inline-block; width:100% ">
  <form action="buscarEquipos.php" method="get" >
       <input style="width:45% ; float:left ; margin-top:1%; "type="text" name="busqueda" id="busqueda" class="form-control mr-sm-2.5" placeholder="Buscar" aria-label="Buscar" required >&nbsp&nbsp
       <button style="float:left; margin-left:5px; margin-top:1%; " name="b1"  class="btn btn-outline-warning ">Buscar </button>   
        </form> 
        <a  href="grupos.php" >   <button style="float:left; margin-left:5px;  margin-top:-1.5%; "  type="button" class="btn btn-warning text-dark " > Mostrar todas </button></a>
</div><br><br>


      <div id="tablephp">
        <?php
                require_once("../conexiondb.php");
                mysqli_set_charset($conecta,"utf8");
                echo "<table border='1'  class='table table-bordered table-hover'>
                 <thead> <tr>
                   <th class='t2' >Nombre</th>
                   <th class='t3'>Descripción</th>
                   <th class='t4' >Gráfica</th>
                


                  </tr>
				      </thead>";
                ?>


              <?php


              $consulta = "SELECT * FROM conformarg
              where
              tituloConfor like '%$busqueda%' OR
              descripcionConf like '%$busqueda%'
              ";
              $resultado = $conecta->query($consulta);


              if ($resultado->num_rows > 0 ){
                  while($fila = $resultado->fetch_assoc()) {
                  echo "<tr>

                  <td> ".$fila["tituloConfor"]."</td>
                  <td> ".$fila['descripcionConf']."</td>
                  <td> <img    class='zoom' src='../images/".$fila["imagenConfor"]." '> </td>
                  
                  </tr>";
                  }
                } else {
            echo " <td colspan='5'  >
<div class='alert alert-warning' role='alert'>
   No hay resultado de la busqueda.
</div>
				  </td>  </tr>"
				  ;
                }

                echo "</table>";
                $conecta->close();
                ?>

      </div>


  <!-- END GRID -->
  </div>

<!-- END w3-content -->
 </div>


      

      <div class="bg-white p-0 rounded my-10 shadow-lg">
        <footer>

        <div class="divFp">

          <div class="div1F">
            <img src="../images/sena2.png" width="" class="imagfooter" >
          </div>




        <div class="div3F" style="font-size: 15px">

        Centro Agropecuario Regional Cauca <br>
        Dirección: Cr 9 No 71 N 60, Alto del Cauca - Kilómetro 7 vía a Cali<br>
        Teléfono: (2) 8247678 IP: 22112 Fax: (2) 8247678<br>
        Correo: agropecuario@misena.edu.co

        </div>

                 <div class="div2F">
                  <img src="../imagenes/SENOVA.png"  class="imag2footer" >
                </div>
          </div>

           </footer>
   </div>

  </div>

</div>




<!------- modal de añadir tdas ---------->



<div class="container mt-3">
  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Añadir Técnica Didáctica Activa</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" >


          <form  class="" enctype="multipart/form-data"  onSubmit="return validar();" action="añadirtda/añadirEquipos.php" method="post">

            <p style="font-size: 18px;"> Nombre:</p> <textarea name="nombre" style="width:100%; height:15%" rows="8" cols="80" required></textarea> <br>

            <p style="font-size: 18px;">    Descripción:</p><textarea name="descripcion" style="width:100%;height:20%" rows="8" cols="80" required></textarea>

            <p style="font-size: 18px;">    Gráfica:</p><input type="file" name="grafica" value="" required>


        </div>
        <div class="modal-footer">
          <input type="submit" style="margin-right: 3%" class='btn  btn-success' name="enviar" value="Agregar">
          </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</div>




<?php
}else{
  header("location:../index.php");
}
 ?>





</body>
</html>

<script src="JS/jquery-3.3.1.min.js"></script>
          <script src="JS/popper.min.js"></script>
            <script src="JS/bootstrap.min.js"></script>
<script>

$(function() {
  // Sidebar toggle behavior
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});

</script>


<script>
// script de sacar el modal
$(document).ready(function(){

  $("#myBtn3").click(function(){
    $("#myModal3").modal({backdrop: "static"});
  });
});
</script>
<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>
