        <!-- 
        -----------------------------------------------------------------------
                PATRONATO NACIONAL DE LA INFANCIA (PANI)
                        Gobierno de la Republica
                      Departamento de Informatica
              Analisis, diseño y programacion de sitio web
                             Año 2023

          Equipo:
          1) Licdo. Arnold Alexander Caballero Garcia  
             APORTO EN: (Analisis y diseño del sistema, Analisis de base de datos, programación)
          2) Ing. Luis Fernando Cambar Vallecillo 
             APORTO EN: (Analisis y diseño del sistema, Analisis de base de datos)

          Revisado y aprobado por:
          Ing. Luis Fernando Cambar Vallecillo

        ---------------------------------------------------------------------
            Programa:         index del sitio web
            Fecha:            1/23/2023 
            Programador:      Arnold Alexander Caballero Garcia
            descripcion:      Index del sitio web, muestra el menu, los sorteos
            @versión 1.0
        -----------------------------------------------------------------------
          Historial de Cambio
        -----------------------------------------------------------------------
            Programador               Fecha                      Descripcion
          
        ----------------------------------------------------------------------->
<?php

include_once "conexion.php";
// //Sorteo Mayor
//   $query_mayor = "SELECT imagen FROM tbl_imagen where estado = 'ACTIVO' and TIPO_CATEGORIA_IMAGEN = '1';";
//   $consulta_mayor =$conn->query($query_mayor);
//   $objeto_consulta_mayor =mysqli_fetch_object($consulta_mayor);
//   $imagen_mayor = $objeto_consulta_mayor->imagen;
// //Sorteo Menor
//   $query_menor = "SELECT imagen FROM tbl_imagen where estado = 'ACTIVO' and TIPO_CATEGORIA_IMAGEN = '2';";
//   $Consulta_menor =$conn->query($query_menor);
//   $objeto_consulta_menor =mysqli_fetch_object($Consulta_menor);
//   $imagen_menor = $objeto_consulta_menor->imagen;
// //Carrucel 1
//   $query_carrucel1 = "SELECT imagen FROM tbl_imagen WHERE estado = 'ACTIVO' and TIPO_CATEGORIA_IMAGEN = '3' AND NUMERO_SORTEO = 1;";
//   $consulta_carrucel1 = $conn->query($query_carrucel1);
//   $objeto_consulta_carrucel1 = mysqli_fetch_object($consulta_carrucel1);
//   $imagen_carrucel1 = $objeto_consulta_carrucel1->imagen;
// //carrucel 2
//   $query_carrucel2 = "SELECT imagen FROM tbl_imagen WHERE estado = 'ACTIVO' and TIPO_CATEGORIA_IMAGEN = '3' AND NUMERO_SORTEO = 2;";
//   $consulta_carrucel2 = $conn->query($query_carrucel2);
//   $objeto_consulta_carrucel2 = mysqli_fetch_object($consulta_carrucel2);
//   $imagen_carrucel2 = $objeto_consulta_carrucel2->imagen;
// //carrucel 3
//   $query_carrucel3 = "SELECT imagen FROM tbl_imagen WHERE estado = 'ACTIVO' and TIPO_CATEGORIA_IMAGEN = '3' AND NUMERO_SORTEO = 3;";
//   $consulta_carrucel3 = $conn->query($query_carrucel3);
//   $objeto_consulta_carrucel3 = mysqli_fetch_object($consulta_carrucel3);
//   $imagen_carrucel3 = $objeto_consulta_carrucel3->imagen;
  //comite SIELHO
 /*  $query_carrucel3 = "SELECT imagen FROM tbl_imagen WHERE estado = 'ACTIVO' and TIPO_CATEGORIA_IMAGEN = '3' AND NUMERO_SORTEO = SIELHO;";
  $consulta_carrucel3 = $conn->query($query_carrucel3);
  $objeto_consulta_carrucel3 = mysqli_fetch_object($consulta_carrucel3);
  $imagen_carrucel3 = $objeto_consulta_carrucel3->imagen; */
?>
    <!---------------------------------------INICIO DE MENU--------------------------------------->
    <?php
     include "menu.php";
     ?>  
    <!---------------------------------------CIERRE DE MENU--------------------------------------->
<body>
     <!---------------------------------------INICIO DE CARRUSEL--------------------------------------->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators ms-5">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
 
  <div class="carousel-inner mx-auto w-85">
    <div class="carousel-item active">
      <img src="img/Institucional.png" class="d-block w-100" alt="panihonduras" >
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  
    <div class="carousel-item">
      <img src="img/La_Chica.png" class="d-block w-100" alt="panihonduras" >
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="img/La_Grande_Web.png" class="d-block w-100" alt="panihonduras" >
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  
  <button class="carousel-control-prev w-25" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next w-25" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
    <!---------------------------------------CIERRE DE CARRUSEL--------------------------------------->

    <!---------------------------------------INICIO-PRODUCTOS--------------------------------------->
 <!--  <button class="btn btn-info" id="botonprueba" >Boton Prueba</button>-->
    <h2 class="sorteo animate__animated aanimate__bounce" id="Sorteos">Sorteos
    <hr size="4">
    </h2>
    <div class="conteiner-principal-sorteos">
      <div class="conteiner-sorteos">
        <div class="card border-0 rounded-0"><!--Imagen sorteo mayor-->
          <div class="card-body">
          <img src="img/1253.jpg" class="card-img-top" alt="panihonduras">
          </div>
        </div>
        <div class="card border-0 rounded-0"><!--Imagen sorteo menor-->
          <div class="card-body">
          <img src="img/3445.jpg" class="card-img-top" alt="panihonduras">
          </div>
        </div>          
      </div>
        

           <div class="face-social-pani">
            <div class="fb-page" data-href="https://www.facebook.com/panihonduras" data-tabs="timeline,messages" data-width="380" data-height="450" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/panihonduras" class="fb-xfbml-parse-ignore">
                  <a href="https://www.facebook.com/panihonduras">PANI Honduras</a>
              </blockquote>
            </div>
           </div>

           <div class="banner-panni">
            <div>
              <a href="https://www.salud.gob.hn/site/index.php/covid19" target="_blank" style="background-color: transparent !important;"><button type="button" class="btn btn-danger" style="padding: 12px !important;">Seguimiento covid-19 Honduras</button></a>
            </div>
           <div class="mx-auto">
           <a href="https://portalunico.iaip.gob.hn/portal=359" target="_blank" style="background-color: transparent !important;"><img src="img/portal.png"></a>
           </div>
        </div> 
      </div>
    </div>
    
    <div class="container-de-comites">
          <p>Comites PANI</p>
      <div class="container-comite">
          <div class="card">
            <a href="http://sielho.iaip.gob.hn" target="_blank" rel="noopener noreferrer"> <img src="img/SIELHO.png" alt="" class="card-img-top" width="30" height="30"></a>
           
          </div>
          <div class="card">
            <a href="http://honducompras.gob.hn" target="_blank" rel="noopener noreferrer"><img src="img/honducompras.png" alt="" class="card-img-top"></a>
            
          </div>

          <div class="card">
          <a href="http://onadici.gob.hn" target="_blank" rel="noopener noreferrer"><img src="img/ONADICI.png" alt="" class="card-img-top"></a>
          </div>

          <div class="card">
          <a href="http://tsc.gob.hn" target="_blank" rel="noopener noreferrer"><img src="img/TSC.png" alt="" class="card-img-top"></a>
          </div>
          <div class="card">
            <img src="img/etica.png" alt="" class="card-img-top">
          </div>
      </div>
    </div>
      
    <!---------------------------------------FINAL-PRODUCTOS--------------------------------------->

<!-------------------------------------------INICIO DE FOOTER-------------------------------------->

        <?php
        include "footer.php";
        ?>
  <!-------------------------------------------FINAL DE FOOTER/-------------------------------------->        
<script>$("#botonprueba").click(function(){
    Swal.fire({
        type:'info',
        title:'mensaje',
        text:'prueba'
    });
});</script>
</body>


