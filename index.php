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
/*
include_once "conexion.php";
  $query = "SELECT VALOR FROM TBL_EMPRESA WHERE NOMBRE = 'NOMBRE'; ";
  $Consulta =$conn->query($query);

  $objeto_consulta =mysqli_fetch_object($Consulta);
  $nombre = $objeto_consulta->VALOR;
  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>PANI-Instituto Nacional de la Infancia</title>
         <link rel="icon" href="img/pani1.png" type="image/png">
      
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="css/style.css" rel="stylesheet"/>

</head>
<body>
    <!---------------------------------------INICIO DE MENU--------------------------------------->
     <?php
     include "menu.php";
     ?>  
    <!---------------------------------------CIERRE DE MENU--------------------------------------->

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
        <h5></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/La_Grande_Web.png" class="d-block w-100" alt="panihonduras.">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/La_Chica.png" class="d-block w-100" alt="panihonduras">
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
  
    <h2 class="sorteo" id="Sorteos">Sorteos
    <hr size="4">
    </h2>
    <div class="conteiner-principal-sorteos">
      <div class="conteiner-sorteos">
        <div class="card border-0 rounded-0">
          <div class="card-body">
            <img src="img/1253.jpg" alt="" class="card-img-top">
          </div>
        </div>
        <div class="card border-0 rounded-0">
          <div class="card-body">
            <img src="img/1253.jpg" alt="" class="card-img-top">
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
           <a href="https://portalunico.iaip.gob.hn/#/homeLanding" target="_blank" style="background-color: transparent !important;"><img src="img/portal.png"></a>
           </div>
        </div> 
      </div>
    </div>
     
    <!---------------------------------------FINAL-PRODUCTOS--------------------------------------->

<!-------------------------------------------INICIO DE FOOTER-------------------------------------->
<?php
include "footer.php";
?>
<!-------------------------------------------FINAL DE FOOTER/-------------------------------------->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="zSsNCouo"></script>
            <script src="js/jquery-3.5.1.slim.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
</body>
</html>

