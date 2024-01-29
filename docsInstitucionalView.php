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
  <?php include "menu.php";?>
  
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
    right: 88%;
    overflow-x:  scroll;
    padding: 2em;
}
#right1 { /*Estilos del right scrolling */
  margin-top: 70px;
    background:#fdfbfb ;
    position: relative;
    left: 12%;
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
  

    <div id="left1">&nbsp;<!--Div izquierdo left fix-->
            <h3 class="text-center">Buscar</h3>
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
                    <a href="#" class="nav__link">Año</a>
                    <img src="assets/arrow.svg" class="list__arrow">
                </div>

                <ul class="list__show">
                       
                     <li class="list__inside" id="listFocus">
                        <a href="#" class="nav__link nav__link--inside"><?php /* echo $titulos; */ ?></a>
                     </li>
                    
                </ul>
             </li>
          </ul>
        </nav>
                
    </div><!--fin de Div izquierdo-->

      <div id="right1">&nbsp;<!--Inicio Div right scrolling-->
      <h1><strong>Documentos de Interes Pani</strong></h1>
      <hr width="800" style="margin-bottom: 70px;">
         <div class="row"><!--Row-->
            <div class="col-sm-12"><!--column-->
                  <article><!--Etiqueta articulo donde se colocaran las noticias-->
                      <header class="post-info"><!--Titulo de la noticia-->
                          <h2 class="post-title titulo" id="titleFocus">Requesicion Pani</h2>
                        <ul class="info">
                          <li><?php /* echo $fecha; */ ?></li>
                          <li>Tegucigalpa</li>
                        </ul>
                      </header><!--Fin de Titulo de la noticia-->
                        <div><!--cuerpo de la noticia-->
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Tipo</th>
                                    <th>Nombre</th>
                                    <th>Año</th>
                                    <th>Fecha</th>
                                    <th>Archivo</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Pdf</td>
                                        <td>Requision Pani</td>
                                        <td>2023</td>
                                        <td>12 de abril</td>
                                        <td>descargar</td>
                                    </tr>

                                </tbody>
                        </table> 
                        </div><!--Fin del cuerpo de la noticia-->
                  </article><!--Fin de Etiqueta articulo donde se colocaran las noticias-->
                    
                    <br>
                  <article><!--Etiqueta articulo donde se colocaran las noticias-->
                      <header class="post-info"><!--Titulo de la noticia-->
                          <h2 class="post-title titulo" id="titleFocus">Requesicion Pani</h2>
                        <ul class="info">
                          <li><?php /* echo $fecha; */ ?></li>
                          <li>Tegucigalpa</li>
                        </ul>
                      </header><!--Fin de Titulo de la noticia-->
                        <div><!--cuerpo de la noticia-->
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Tipo</th>
                                    <th>Nombre</th>
                                    <th>Año</th>
                                    <th>Fecha</th>
                                    <th>Archivo</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Pdf</td>
                                        <td>Requision Pani</td>
                                        <td>2023</td>
                                        <td>12 de abril</td>
                                        <td>descargar</td>
                                    </tr>

                                </tbody>
                        </table> 
                        </div><!--Fin del cuerpo de la noticia-->
                  </article><!--Fin de Etiqueta articulo donde se colocaran las noticias-->
                   
                    <br>
                                   
            </div><!--column-->
        </div><!--Row-->
      </div><!--Fin Div derecho-->
  </div><!--Fin de Container-->

<!-------------------------------Fin de seccion de Noticias------------------------------->

</body>
