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

// include_once "conexion.php";
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
include "template/menu.php";
?>  
<!---------------------------------------CIERRE DE MENU--------------------------------------->
<body>
<!-- plugin de whatsApp -->
<a href="https://api.whatsapp.com/send?phone=50433120275" class="btn-wsp" target="_blank" style="bottom:60px !important;"><i class="fa fa-whatsapp icono"></i></a>

<!---------------------------------------------------------------INICIO DE CARRUSEL--------------------------------------------------------------------------------->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators ms-5">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
 
  <div class="carousel-inner mx-auto w-85">
    <div class="carousel-item active">
      <img src="template/img/Institucional.png" class="d-block w-100" alt="panihonduras" >
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  
    <div class="carousel-item">
      <img src="template/img/La_Chica.png" class="d-block w-100" alt="panihonduras" >
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="template/img/La_Grande_Web.png" class="d-block w-100" alt="panihonduras" >
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
  <!----------------------------------------------------------------CIERRE DE CARRUSEL---------------------------------------------------------------------------->

    <!---------------------------------------------------------------INICIO-SORTEOS----------------------------------------------------------------------------------->
      <div class="conteiner-principal-sorteos"><!--Inicio contenedor sorteos-->
         <H2 class="sorteo" id="Sorteos">Sorteos</H2>
         <div class="bar-main">
           <div class="bar-hr-inner"></div>
         </div>
        <div class="conteiner-sorteos">
          <div class="card border-0 rounded-0"><!--Imagen sorteo mayor-->
            <div class="card-body">
            <img src="template/img/1253.jpg" class="card-img-top" alt="panihonduras">
            </div>
          </div>
          <div class="card border-0 rounded-0"><!--Imagen sorteo menor-->
            <div class="card-body">
            <img src="template/img/3445.jpg" class="card-img-top" alt="panihonduras">
            </div>
          </div>          
          <div class="card border-0 rounded-0">
            <div class="card-body">
              <div class="face-social-pani">
                <div class="fb-page" data-href="https://www.facebook.com/panihonduras" data-tabs="timeline,messages" data-width="380" data-height="450" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                  <blockquote cite="https://www.facebook.com/panihonduras" class="fb-xfbml-parse-ignore">
                      <a href="https://www.facebook.com/panihonduras">PANI Honduras</a>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!--Fin contenedor sorteos-->

        <!-- <div class="banner-panni">
            <div>
              <a href="https://www.salud.gob.hn/site/index.php/covid19" target="_blank" style="background-color: transparent !important;"><button type="button" class="btn btn-danger" style="padding: 12px !important;">Seguimiento covid-19 Honduras</button></a>
            </div>
           <div class="mx-auto">
             <a href="https://portalunico.iaip.gob.hn/portal=359" target="_blank" style="background-color: transparent !important;"><img src="template/img/portal.png"></a>
           </div>
        </div>  -->
    
    <!---------------------------------------------------------------INICIO-SERVICIOS Y TRAMITES----------------------------------------------------------------------------------->
    <div class="conteiner" style="background-color: #f9f9f9; padding-bottom: 50px !important;">
      <div class="row"><!--Cabecera de servicios-->
        <div class="col-lg-12">
          <h2 class="sorteo">Tr&aacute;mites y Servicios</h2>
            <div class="bar-main">
              <div class="bar-hr-inner"></div>
            </div>
        </div>
      </div>
      <div class="row margin-container"><!-- row Cuerpo de servicios-->
        <div class="row row-cols-1 row-cols-md-3 g-4"><!-- Col Cuerpo de servicios-->
          <div class="col">
            <div class="card">
              <img src="./template/img/SIELHO.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Horarios de venta de Loteria</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary">Leer m&aacute;s</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---------------------------------------------------------------INICIO-ENLACES----------------------------------------------------------------------------------->
    <div class="container" style="padding-bottom: 50px !important;">
      <div class="row"><!--Cabecera de enlaces-->
        <div class="col-lg-12">
          <h2 class="sorteo">Enlaces de Interes</h2>
            <div class="bar-main">
              <div class="bar-hr-inner"></div>
            </div>
        </div>
      </div>
      <div class="row margin-container"><!--Cuerpo de enlaces-->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="./template/img/SIELHO.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Ir <i class="bi bi-arrow-right-circle"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <!---------------------------------------------------------------INICIO SECCION PREGUNTAS FRECUENTES----------------------------------------------------------------------------------->
    <div class="conteiner" style="background-color: #f9f9f9; padding-bottom: 50px !important;">
      <div class="row"><!--Cabecera de servicios-->
        <div class="col-lg-12">
          <h2 class="sorteo">Preguntas Frecuentes</h2>
            <div class="bar-main">
              <div class="bar-hr-inner"></div>
            </div>
        </div>
      </div>
      <div class="row margin-container"><!-- row Cuerpo de servicios-->
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                ¿Como puedo vender Loteria?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!---------------------------------------FINAL-PRODUCTOS--------------------------------------->

<!-------------------------------------------INICIO DE FOOTER-------------------------------------->
        <?php
        include "template/footer.php";
        ?>
  <!-------------------------------------------FINAL DE FOOTER/-------------------------------------->        

 <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</body>


