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
            Programa:         Noticias del sitio web
            Fecha:            1/23/2023 
            Programador:      Arnold Alexander Caballero Garcia
            descripcion:      Pagina web en donde se visualizan las noticias de la institucionales.
            @versión 1.0
        -----------------------------------------------------------------------
          Historial de Cambio
        -----------------------------------------------------------------------
            Programador               Fecha                      Descripcion
          
        ----------------------------------------------------------------------->


<!--consulta php-->
<?php
/*  
 include_once "conexion.php";

 $query_titulo = "SELECT TITULO FROM TBL_NOTICIAS";
 $result_titulo =$conn->query($query_titulo);

 $query = "SELECT * FROM TBL_NOTICIAS";
 $result_query =$conn->query($query);
 */
?>
<!--fin consulta php-->
  <!---------------------------------------INICIO DE MENU--------------------------------------->
  <?php include "template/menu.php";?>
  
    <!---------------------------------------CIERRE DE MENU--------------------------------------->
<style>

html, body, * {
    padding: 0;
    margin: 0;
}
html {
    width: 100%;
    height: 100%;
    position: absolute;
}

#left1 { /*Estilos del left fix */
  margin-top: 70px;
    background: rgb(216 220 225 / 26%);;
    position: fixed;
    left: -15px;
    top: 0;
    bottom: 0;
    right: 78%;
    overflow-x:  scroll;
    padding: 2em;
}
#right1 { /*Estilos del right scrolling */
  margin-top: 70px;
    background:#fdfbfb ;
    position: absolute;
    left: 25%;
    top: 0;
    bottom: 0;
    right: 0;
    /*overflow-y: auto; */
    padding: 2.5em;
  min-height:1000px;
}

</style>

<body>
    
  
  
<!-------------------------------Inicio de seccion de Noticias------------------------------->
  

  <div id="container"><!--Container-->
    <div id="left1">&nbsp;<!--Div izquierdo left fix-->
            <h3 class="text-center">Menu</h3>
        <nav class="nav">
           <ul class="list">
             <li class="list__item">
                <div class="list__button">
                    <img src="assets/dashboard.svg" class="list__img">
                    <a href="#" class="nav__link">Inicio</a>
                </div>
             </li>

              <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="assets/docs.svg" class="list__img">
                    <a href="#" class="nav__link">Titulos de Noticias</a>
                    <img src="assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                        <!--PHP Traer los titulos desde la Base de datos-->
                        <?php 
                        /*
                            if($result_titulo->num_rows > 0){
                              while($row = $result_titulo->fetch_array()){
                                $titulos = $row['TITULO'];
                        */
                        ?>
                        <!--FIN PHP Traer los titulos desde la Base de datos-->
                     <li class="list__inside" id="listFocus">
                        <a href="#" class="nav__link nav__link--inside"><?php /* echo $titulos; */ ?></a>
                     </li>
                       <!--PHP Traer los titulos desde la Base de datos-->
                        <?php
                        /*
                               }
                             }
                        */     
                        ?>
                        <!--FIN PHP Traer los titulos desde la Base de datos-->
                </ul>
             </li>
          </ul>
        </nav>
                     <!--Banner de noticias-->
                     <div class="mx-auto" style="margin-top: 50px;">
                       <a href="https://www.salud.gob.hn/site/index.php/covid19" target="_blank" style="background-color: transparent !important;"><button type="button" class="btn btn-danger w-100" style="padding: 12px !important;">Seguimiento covid-19 Honduras</button></a>
                     </div>

                <div class="mx-auto" style="margin-top: 50px; margin-left: 60px !important;">
                   <a href="https://portalunico.iaip.gob.hn/#/homeLanding" target="_blank" style="background-color: transparent !important;"><img width="139" height="174" src="img/portal.png"></a>
                </div><!--Banner de noticias-->
                
    </div><!--fin de Div izquierdo-->

      <div id="right1">&nbsp;<!--Inicio Div right scrolling-->
      <h1><strong>Sección de Noticias Pani</strong></h1>
      <hr width="800" style="margin-bottom: 70px;">
         <div class="row"><!--Row-->
            <div class="col-sm-12"><!--column-->
                <!--PHP ARRAYS para traer los datos de las noticias-->
                        <?php 
                        /*
                            if($result_query->num_rows > 0){
                              while($row = $result_query->fetch_array()){
                                $titulo = $row['TITULO'];
                                $cuerpo = $row['CUERPO'];
                                $fecha =  $row['FECHA'];
                                $image =  $row['IMAGEN'];
                        */
                        ?>
                        <!--PHP ARRAYS para traer los datos de las noticias-->
                  <article><!--Etiqueta articulo donde se colocaran las noticias-->
                      <header class="post-info"><!--Titulo de la noticia-->
                          <h2 class="post-title titulo" id="titleFocus"><?php /* echo $titulo; */ ?></h2>
                        <ul class="info">
                          <li><?php /* echo $fecha; */ ?></li>
                          <li>Tegucigalpa</li>
                        </ul>
                      </header><!--Fin de Titulo de la noticia-->
                        <div><!--cuerpo de la noticia-->
                            <capture>
                              <img style="border-radius: 6px; box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);" width="800" height="400" src="data:image/jpeg;base64,<?php /*echo  base64_encode($image); */ ?>">
                            </capture>
                          <P style=" padding: 25px 0px 25px; max-width: 800px;"><?php /* echo $cuerpo; */ ?></P>
                        </div><!--Fin del cuerpo de la noticia-->
                  </article><!--Fin de Etiqueta articulo donde se colocaran las noticias-->
                    <hr width="800">
                    <br>
                        <!--PHP-->
                          <?php
                          /*
                                  }
                                }
                          */      
                          ?>
                        <!--FIN PHP ARRAYS-->
            </div><!--column-->
        </div><!--Row-->
      </div><!--Fin Div derecho-->
  </div><!--Fin de Container-->

<!-------------------------------Fin de seccion de Noticias------------------------------->

</body>
