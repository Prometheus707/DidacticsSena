<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf-8">
		<title> Inicio </title>
	    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
					<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
						<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Helvetica">
						
							<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open%20Sans">
							
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
					
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 
				
			<link href="css/index.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script>
		$(document).ready(function(){
			$("#myBtn3").click(function(){
				$("#myModal3").modal({backdrop: "static"});
			});
		});
	</script>
  <!-- este es el script de velocidad de carrousel-->
  <script>
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 2000
    });
  });
</script>
		<script>
							// longitud de letras java
	function soloLetras(e){
		key = e.keyCode || e.which;
		tecla = String.fromCharCode(key).toLowerCase();
		letras = " ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnñopqrstuvwxyzáéíóú";
		especiales = "8-37-39-46";
		tecla_especial = false
		for(var i in especiales){
			if(key == especiales[i]){
				tecla_especial = true;
				break;
			}
		}
		if(letras.indexOf(tecla)==-1 && !tecla_especial){
			return false;
		}
	}
 </script>
<script>
// comparar claves
function habilitar()
{
var camp1 =document.getElementById("campo1");
var camp2 = document.getElementById("campo2");
var botn = document.getElementById("boton");

if (camp1.value != camp2.value)
{
	botn.disabled = true;
	$('#error2').text('LAS CLAVES NO COINCIDEN!').css("color", "red");


}
else
{
	botn.disabled = false;
	$('#error2').text('LAS CLAVES COINCIDEN!').css("color", "green");

}

}


</script>


<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<script>
jQuery.fn.extend({
    resaltar: function(busqueda, claseCSSbusqueda){
        var regex = new RegExp("(<[^>]*>)|("+ busqueda.replace(/([-.*+?^${}()|[\]\/\\])/g,"\\$1") +')', 'ig');
        var nuevoHtml=this.html(this.html().replace(regex, function(a, b, c){
            return (a.charAt(0) == "<") ? a : "<span class=\""+ claseCSSbusqueda +"\">" + c + "</span>";
        }));
        return nuevoHtml;
    }
});


function resaltarTexto(){
    $("#texto").resaltar(cajaTexto.value, "resaltarTexto");
}
</script>

<style>
.resaltarTexto{
    color: white;
    background-color: #Ff6b00;
}

body {
    font-family: Verdana;
}

</style>
</head>


<body id="texto" class="w3-light-grey" style="min-width:100%; max-width:100%;">

<div  >

<nav class="navbar navbar-expand-lg  navbar-dark nav3   ">
		<a class="navbar-brand" href="#">  <img src="images/logo33.png" width="215" alt="logo"> </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<ul class="navbar-nav " style=" margin-left:30px ;"  >
				<li class="nav-item active">
					<a   id="miBoton"    class="nav-link" href="#"> Inicio  </a>
						</li>
							<li class="nav-item active">
								<a   id="miBoton"  class="nav-link" href="tdaDef.php"> Técnicas Didácticas Activas</a>
							</li>  
        
      <!--   <center>  --> <form name="fr"  >    
		 <input   maxlength="15" name="caja1" style="width:160px;
    margin:10px;
    padding:5px 6px;
    border-radius:32px;
    outline:none;
    border:2px solid #ccd1d1;
    background:white;
    transition:all 0.5s; max-width:90%; min-width:40vh;margin-top:0.7%" type="text"    id="cajaTexto" required />	
<button id="btnEnviar" class="btn btn-outline-success text-dark"   style="max-width:100%; min-width:12vh; height:75%; margin-top:0.7%"  type="button" value="Buscar" onClick="resaltarTexto(); "  > Buscar</button>

<script>
<!--

function activarBoton() {
    if(verificar()) {
        btnEnviar.disabled=false
    }
    
}

function verificar() {
    if( caja1.value==="" )
        return false;
 
    return true;
}

var btnEnviar = document.getElementById("btnEnviar");
btnEnviar.disabled = true;
var caja1 = document.fr.caja1;

caja1.onkeyup  = activarBoton;


// -->


</script></form>
      
       </center>
	
			</ul>
	 </ul>
  
	  <div class="ingreso"  >
	  <button  type="button" class="btn btn-outline-success text-dark" onclick="document.getElementById('subscribe').style.display='block'"><img src="images/ingresar.png"  class="ingreso1">   Ingresar </button>
	 	 </div>
  </div>
</nav>
  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large" >

		    <center>  


           <div class="container">
                  <div class="row">
                        <div class="col mt-3"> 
                          <!-- Sirve para crear secciones o agrupar contenidos (div)-->
                          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                              <!-- slide barra donde se ven la cantidad de imagenes -->
                              <!-- Listas ordenadas (ol) -->
                            
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/slideshow/equipo.jpg" alt="Trabajo en equipo">
                                  </div>
                              
                                <div class="carousel-item">    
                                    <img class="d-block w-100" src="images/slideshow/learning_education.jpg" alt="elearning">
                                </div>
                                <div class="carousel-item">    
                                    <img class="d-block w-100" src="images/slideshow/researcher_laboratory.jpg" alt="Biotecnologia">
                                </div>
                                
                                 <div class="carousel-item">    
                                    <img class="d-block w-100" src="images/slideshow/agricultura_iot.jpg" alt="Agricultura Didactics">
                                </div>
                                <div class="carousel-item">    
                                    <img class="d-block w-100" src="images/slideshow/organic.jpg" alt="cultivos">
                                </div>
                                
                                  
                                 <!--  <div class="carousel-item">
                                      <img src="images/tecnica.jpg" width="50%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/grupal.jpg" width="37.8%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img1.jpg" width="50%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img2.jpg" width="50%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img3.jpeg" width="66%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img4.jpg" width="56%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img5.jpg" width="50%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img6.jpg" width="50%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img7.jpg" width="50%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img8.jpg" width="90%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img9.jpg" width="50%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img10.jpg" width="64.8%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img11.webp" width="35%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img13.png" width="37.3%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img14.jpg" width="40%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img15.jpg" width="40%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img16.jpg" width="auto" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img17.jpg" width="64.8%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img18.png" width="64.8%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img19.jpg" width="64.8%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img20.jpg" width="64.8%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img21.png" width="64.8%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img22.jpg" width="64.8%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img23.jpg" width="64.8%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img24.jpg" width="64.8%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img25.jpg" width="64.8%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img26.png" width="64.8%" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img27.png" width="" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img28.jpg" width="" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img29.png" width="" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img30.png" width="" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img31.png" width="" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img32.png" width="" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img33.jfif" width="" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img34.jfif" width="" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img35.jfif" width="" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img36.jfif" width="" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img37.jfif" width="" alt="ggg">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/img38.jfif" width="" alt="ggg">
                                  </div>  -->



                            </div>
                              <!-- Iconos para cambiar de imagen -->
                              <!--<a href="#carouselExampleControls" class="carousel-control-prev" data-slide="prev" style="margin-left:3% ">
                                  <span style="background-color:black" class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span style="color:red;" class="sr-only">Anterior</span>
                              </a>
                              <a href="#carouselExampleControls" class="carousel-control-next" data-slide="next" style="margin-right:3%">
                                  <span style="background-color:black" class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Siguiente</span>
                              </a> -->
                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                          </div>
                     </div> 
                  </div><br>
                  
  <script>
      $('.carousel').carousel({
  interval: 5000
})
  </script>                

<style media="screen">
.carru img{
width: 50%;
height: 250px;
padding: 10px;
}
</style>


           </center>  
   <h2  class="w3-wide p1">Presentación</h2>
        <div class="w3-justify">

          <p >      <strong> Instructoras integrantes del equipo Pedagógico del Centro Agropecuario, SENA Regional Cauca,
		  </strong>presentan el resultado del Proyecto “Implementación de una Plataforma Tecnológica que facilite el uso de Didácticas para mejorar la práctica Pedagógica del Instructor SENA” denominado DIDACTICs.   Se han recopilado Técnicas Didácticas Activas – TDAs  y Estrategias  Interactivas para cada componente de la Guía de Aprendizaje a manera de una Caja de Herramientas para su utilidad en las sesiones de formación, en respuesta a una sentida necesidad de fortalecer la destreza pedagógica del instructor en  la interacción con el aprendiz.
</p>
 <p >
Se pretende con este  proyecto, que el instructor motive al aprendiz  para que disponga su atención e interés por el aprendizaje, pero sobre todo que tenga múltiples elementos para llevarlo a la práctica integral desde lo técnico, lo cognitivo y lo axiológico. Además, que tanto el instructor como el aprendiz se diviertan en el proceso.

El contenido sin actividad, es monótono e infructífero. La actividad sin contenido es desperdicio. Lo que se enseña debe hacerse a través de una actividad adecuada, que contenga emociones que muevan el pensamiento y activen los neurotransmisores encargados de anclar la información en la memoria a largo plazo.
</p>
	<div class="tablaGrupo">

	<table class="width200">
			<thead>
			<tr>
      <th class="t5"> </th>
				<th class="t2">AUTORES </th>
				<th class="t3" >ROL</th>
				<th class="t4"  >CONTACTO</th>

			</tr>
			</thead>
			<tbody>
			<tr>
      <td class="centrarGr">
           <img src="imagenesAutores/doris.jpg" alt="Instructora Doris" class='zoom' width="50%"> 
           </td>
				<td class="centrarGr">DORIS MATILDE ORDOÑEZ LASO</td>
				<td class="centrarGr">INSTRUCTOR INVESTIGADOR AREA SISTEMAS</td>
				<td  class="centrarGr">dordonezl@sena.edu.co <br>
					3015442579
				</td>

			</tr>
			<tr>
       <td  class="centrarGr"> <img src="imagenesAutores/ximena.jpg" alt="Instructora Ximena" class='zoom' width="50%"> </td>
				<td  class="centrarGr" >XIMENA MUÑOZ CHACON</td>
				<td  class="centrarGr">INSTRUCTOR  INVESTIGADOR AREA PECUARIA-PEDAGOGIA</td>
				<td  class="centrarGr">xmunoz@sena.edu.co<br>
				3136027890
				</td>

			</tr>

			<tr>
      <td  class="centrarGr"> <img src="imagenesAutores/claudia.jpg" alt="Instructora Claudia" class='zoom' width="50%"> </td>
				<td  class="centrarGr">
      CLAUDIA CECILIA PERAFAN PAZ</td>
				<td  class="centrarGr" >INSTRUCTOR INVESTIGADOR AREA ADMINISTRACIÓN</td>
				<td  class="centrarGr" >cperafan@sena.edu.co<br>
				3013715977
				</td>

			</tr>

		 	<tr>
       <td class="centrarGr"> 
       <img src="imagenesAutores/dina.jpg" alt="Asesora Dina" class='zoom' width="50%">
       </td>
				<td  class="centrarGr" >
					DINA MARIA CAJAS PABON
					</td>
				<td  class="centrarGr" >ASESORA PEDAGOGICA APOYO INVESTIGACIÓN</td>
				<td  class="centrarGr" >cdina_maria@hotmail.com<br>
				3006559125

				</td>

			</tr>
				<tr>
        <td  class="centrarGr"> <img src="imagenesAutores/santiago.jpg" alt="Aprendiz Santiago" class='zoom' width="50%"> </td>
				<td  class="centrarGr" >
					ALEX SANTIAGO  GIL TAIMAL
					</td>
				<td  class="centrarGr" >APRENDIZ INVESTIGADOR PROGRAMA <br> ANALISIS Y DESARROLLO SISTEMAS DE INFORMACIÓN (ADSI)				</td>
				<td  class="centrarGr" >santiagotaimal2001@gmail.com<br>
				3147916883


				</td>

			</tr>

				<tr>
        <td  class="centrarGr"> <img src="imagenesAutores/miler.jpg" alt="Aprendiz Miler" class='zoom' width="50%"> </td>
				<td  class="centrarGr" >
					MILER YOHAO CERON TULANDE
					</td>
				<td   class="centrarGr"> APRENDIZ INVESTIGADOR PROGRAMA <br>ANALISIS Y DESARROLLO SISTEMAS DE INFORMACIÓN (ADSI)	</td>
				<td class="centrarGr">
				myceron8@misena.edu.co<br>
				3182018087


				</td>

			</tr>
			</tbody>
    </table>
 

<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});
</script>
	<!--	<button type="button" class="btn btn-primary"> Descargar formato del  proyecto pdf

 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
</svg></button> -->
	 </div>

        </div>
      </div>






    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->

	   <div class="w3-white w3-margin">
        <div class="w3-container w3-padding color">
          <h4>Reflexión</h4>
        </div>
        <div class="w3-container w3-white">
          <p class="p4">“El alumno aprende mejor de la participación activa que de la recepción pasiva de contenidos”. <br>
 (Thiaggi, 2017)  </p>

        </div>
      </div>

      <hr>
  <!-- Posts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding color">
          <h4>Acceso Rápido</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <li class="w3-padding-16">

            <a href="tdaDef.php"> Definición de Técnicas Didácticas Activas</a>
            <br>
             <!-- Posts <span>Sed mattis nunc</span>  -->
          </li>
          <li class="w3-padding-16">
             <a href="#"  onclick="document.getElementById('subscribe').style.display='block'" ></i>Ingreso a caja de herramientas Técnicas Didácticas Activas</a>
            <br>
           <!-- Posts <span>Sed mattis nunc</span>  -->
          </li>


        </ul>
      </div>
  <hr>
      <!-- Inspiration -->
 <div class="w3-white w3-margin">
        <div class="w3-container w3-padding color ">
          <h4>Inspiración</h4>
        </div>
        <div class="w3-row-padding w3-white">
          <div class="w3-col s6">
		  <br>
            <p><img src="images/edu.png" alt="Jeans" style="width:100%">
           <center>  
                <a href="https://sites.google.com/a/misena.edu.co/aprendizaje-en-el-sena/estrategias-didacticas" target="_blank" > Estrategias Didácticas </a>   </center>  </p> 
            
            <p><img src="imagenes/edu.jpg" alt="Jeans" style="width:100%">
           <center> 
                <a href="https://www.orientacionandujar.es/wp-content/uploads/2015/03/Manual-estrategias-didacticas.pdf" target="_blank" > Manual Estrategias Didácticas </a>   </center>
            </p> 
          </div>
          <div class="w3-col s6">
         	  <br>
            <p><img src="images/edu2.png" alt="Jeans" style="width:100%; height:37.5vh;">
            
            <center>  
                <a href="https://www.researchgate.net/publication/319650749_Manual_de_Tecnicas_Didacticas_y_Evaluativas_para_el_Desarrollo_de_Competencias" target="_blank" > Manual Técnicas Didácticas Activas </a>   </center> 
            </p>
         </div>
        </div>
      </div>
      <hr>

      

      <!-- Subscribe -->


    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>


<!-- Footer -->
<div class="w3-container " style="padding:2%">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>Subir</a>

</div>
        <footer>

			 <div class="divFp">

				  <div class="div1F">
							<img src="imagenes/sena3.png"  class="imagfooter" >

			     </div>




				<div class="div3F">

              Centro Agropecuario Regional Cauca <br>
Dirección: Cr 9 No 71 N 60, Alto del Cauca - Kilómetro 7 vía a Cali<br>
Teléfono: (2) 8247678 IP: 22112 Fax: (2) 8247678<br>
Correo: agropecuario@misena.edu.co

      		     </div>

				 <div class="div2F">
                      	<img src="images/SENOVA.png"  class="imag2footer" >
				</div>
			</div>
   </footer>
<!-- END w3-content -->
 </div>

<div id="subscribe" class="w3-modal w3-animate-opacity" >
  <div class="w3-modal-content" style="padding:32px; width:30%;  background:rgba(240, 240, 240, 1); border-radius: 4px  4px  4px  4px  ;">
    <div class="w3-container "  style=" width:100%; ">

     <div class="tituloIn">  Iniciar Sesión  <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-right tamaño"></i> </div>
	 <br> <form action="validarUsuario/validarUsuario.php" method="POST">
				 	<center> 
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="userU"  class="form-control" placeholder="Usuario"  required maxlength="10" oninput="maxlengthNumber(this);" onkeypress='return event.charCode >= 48 && event.charCode <= 57' >
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password"   name="pass"  class="form-control" placeholder="Contraseñas"required>
						</div>

				 <!--	</center>  -->
          <br>

				 <a href="#" data-izimodal-open="#modal">   <input type="submit"  style="width: 48%; color:white; "  value="Ingresar" class="btn btn-success float-left   btn-sm">  </a>

				   </form>

			  <button  type="button"  style="width: 48%; background: #Ff6b00; color:white; "  class="btn float-right btn-sm" onclick="document.getElementById('subscribe2').style.display='block'">   Registrar  </button>



       </div>

  </div>
</div>
<div id="subscribe2" class="w3-modal w3-animate-opacity" >
  <div class="w3-modal-content" style=" margin-top:-6%; padding:38px; width:32%;  background:rgba(240, 240, 240, 1); border-radius: 4px  4px  4px  4px  ;">
    <div class="w3-container "  style=" width:100%; ">

     <div class="tituloIn">  Registrar Usuario  <i onclick="document.getElementById('subscribe2').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-right tamaño"></i> </div>
	  <form action="registroUsuario/guardarUsuarioCreado.php" method="POST">
				N° Documento: <input  class="form-control form-control"  type="text" name="id_identificacion"   required maxlength="10" oninput="maxlengthNumber(this);" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  />
				Nombre:	  <input  class="form-control form-control"  type="text" name="nombreUsuario" maxlength="30"  onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();" required />
						Apellidos:	  <input  class="form-control form-control"  type="text" name="ape_usuario" maxlength="30"  onkeypress="return soloLetras(event)" onKeyUp="this.value=this.value.toUpperCase();" required />
									Teléfono: <input  class="form-control form-control"  type="text" name="telefono" required maxlength="10" oninput="maxlengthNumber(this);" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  />
Correo Electrónico:  <input class="form-control form-control " type="email"  name="correo_usu" required>
				 		<?php
	require ('conexiondb.php');
	mysqli_set_charset($conecta,"utf8");
  $sql = "SELECT DISTINCT * FROM  regional ORDER BY nombreRegional ASC";
  $result = $conecta->query($sql);
?><script language="javascript">
			$(document).ready(function(){
				$("#nom_programa").change(function () {

				$("#nom_programa option:selected").each(function () {
						id_programa = $(this).val();
						$.post("registroUsuario/getFicha.php", { id_programa: id_programa }, function(data){
							$("#num_Ficha").html(data);
						});
					});
				})
			});

		</script>
		Regional:     <select class="form-control  " name="Regional"  id="nom_programa">
				<option value="" disabled selected>Seleccione...</option>

				<?php while($row = $result->fetch_assoc()) { ?>
					<option value="<?php echo $row['idRegional']; ?>"><?php echo $row['nombreRegional']; ?></option>
				<?php } ?>
				</select>
				  Centro De Formación :        <select   class="form-control form-control " name="centro" id="num_Ficha"></select>

	<?php
	require ('conexiondb.php');
	mysqli_set_charset($conecta,"utf8");
  $sql2 = "SELECT DISTINCT * FROM  area ORDER BY nombreArea ASC";
  $result2 = $conecta->query($sql2);
/* ESTA ES PARA QUE PROGRAMA ARRASTRE LOS DATOS SEGUN EL AREA PERO POR MOTIVOS DE LA INGE A CARGO LO VAMOS A INHABILITAR<script language="javascript">
			$(document).ready(function(){
				$("#nom_programa2").change(function () {

				$("#nom_programa2 option:selected").each(function () {
						id_programa = $(this).val();
						$.post("registroUsuario/getFicha2.php", { id_programa: id_programa }, function(data){
							$("#num_Ficha2").html(data);
						});
					});
				})
			});

		</script> */
			 ?>	 Area:     <select class="form-control  " name="area"  id="nom_programa2">
				<option value="" disabled selected>Seleccione...</option>

				<?php while($row = $result2->fetch_assoc()) { ?>
					<option value="<?php echo $row['idArea']; ?>"><?php echo $row['nombreArea']; ?></option>
				<?php } ?>
				</select>
						<!--  Programa:        <select   class="form-control form-control " name="programa" id="num_Ficha2"></select>  -->
				 clave:		 <input class="form-control form-control" id="campo1" type="password"  name="contra_usu" minlength="6" maxlength="10"required></td></tr>
		Verifique clave:		 <input class="form-control form-control " id="campo2" minlength="6"  onkeyup="habilitar()" type="password" maxlength="10" required>  </td></tr>
		
   <center> 
 <span style="font-size:12px" id="error2" ></span>   </center> 


 <br>
				 <a href="#" data-izimodal-open="#modal">   <input type="submit" name ="registroUsu"  id="boton" style="width: 48%; "  value="Registrar" class="btn btn-success float-left   btn-sm">  </a>
				 <a href="index.php">   <input type="button"  style="width: 48%; "  value="Cancelar" class="btn btn-danger float-right   btn-sm">  </a>

				   </form>




       </div>

  </div>
</div>


</section>
<br>





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <script src="js/main.js"></script>


 <script>

	  <?php

if(isset($_GET['opcion22'])&& $_GET['opcion22'] == 'true'){

  echo 'swal.fire( "   Usted no se encuentra registrado o sus credenciales no son correctas.","","error")';
}
if(isset($_GET['opcion21'])&& $_GET['opcion21'] == 'true'){

  echo 'swal.fire( "   Usted se encuentra  en estado INACTIVO temporalmente.","","warning")';
}
if(isset($_GET['opcion1'])&& $_GET['opcion1'] == 'true'){
  echo 'swal.fire( "   Registro Exitoso.","","success")';

}if(isset($_GET['opcion2'])&& $_GET['opcion2'] == 'true'){

  echo 'swal.fire( "   Usted ya esta registrado.","","warning")';
}

?>

</script>


 </body>
 </html>


 </body>
 </html>
