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
            Programa:         contacto del sitio web
            Fecha:            1/23/2023 
            Programador:      Arnold Alexander Caballero Garcia
            descripcion:      Pagina en donde se visualiza los datos de contacto.
            @versión 1.0
        -----------------------------------------------------------------------
          Historial de Cambio
        -----------------------------------------------------------------------
            Programador               Fecha                      Descripcion
          
        ----------------------------------------------------------------------->

<!--INICIO DE QUERYS CON PHP-->
<?php 

    include_once "conexion.php";

    $query = "SELECT CONTENIDO FROM TBL_EMPRESA WHERE CODIGO_TIPO_DATO = 1;";
    $Consulta =$conn->query($query);

    $query1 = "SELECT CONTENIDO FROM TBL_EMPRESA WHERE CODIGO_TIPO_DATO = 2;";
    $Consulta1 =$conn->query($query1);

    $query2 = "SELECT CONTENIDO FROM TBL_EMPRESA WHERE CODIGO_TIPO_DATO = 3;";
    $Consulta2 =$conn->query($query2);

    $query3 = "SELECT CONTENIDO FROM TBL_EMPRESA WHERE CODIGO_TIPO_DATO = 4;";
    $Consulta3 =$conn->query($query3);

    $query4 = "SELECT CONTENIDO FROM TBL_EMPRESA WHERE CODIGO_TIPO_DATO = 5;";
    $Consulta4 =$conn->query($query4);   

?>
<!--FIN DE QUERYS CON PHP-->
 <!---------------------------------------INICIO DE MENU--------------------------------------->
 <?php
  include "menu.php";
  ?>
    <!---------------------------------------CIERRE DE MENU--------------------------------------->
<body>
        <!---------INICIO SECCION DE CONTACTO----------->
        <div class="container">
            <div class="row mt-5 mb-5 justify-content-center mx-auto">
                <div class="col-sm-12 contacto mx-auto">
                    <h2 class="text-center pt-3"><strong>CONTACTO</strong></h2>
                    <h4 class="mx-auto ps-4 pb-2">Datos de contacto</h4>
                <!--PHP CONTACTO -->
                    <?php  
                    
                    $objeto_consulta = mysqli_fetch_object($Consulta);
                    $razon_social = $objeto_consulta->CONTENIDO;

                    $objeto_consulta1 = mysqli_fetch_object($Consulta1);
                    $telefono = $objeto_consulta1->CONTENIDO;

                    $objeto_consulta2 = mysqli_fetch_object($Consulta2);
                    $email = $objeto_consulta2->CONTENIDO;
                    
                    $objeto_consulta4 = mysqli_fetch_object($Consulta3);
                    $web = $objeto_consulta4->CONTENIDO;

                    $objeto_consulta5 = mysqli_fetch_object($Consulta4);
                    $direccion = $objeto_consulta5->CONTENIDO;
                
                    ?>    
                <!--FIN PHP CONTACTO -->  
                
                    <ul>
                        <li class="text-justify"><strong> Razón Social: </strong><?= $razon_social; ?></li>
                        <li class="datos-contacto"><strong> Teléfono: </strong><?= $telefono; ?></i></li>
                        <li class="datos-contacto"><strong> Email: </strong> <?= $email; ?></li>
                        <li class="datos-contacto"><strong> Sitio Web: </strong> <?= $web;?></li>
                        <li class="datos-contacto"><strong> Dirección:</strong> <?= $direccion; ?></li>
                    </ul>
                  <!--
                    <ul>
                        <li class="text-justify"><strong> Razón Social: </strong>Somos una institución del estado con autonomía técnica, administrativa y patrimonio propio, generando recursos para proyecto sociales. A través de la producción y comercialización 
                        de las loterías del Estado para el bienestar integral de la población.</li>
                        <li class="datos-contacto"><strong> Teléfono: </strong>2236-8636</i></li>
                        <li class="datos-contacto"><strong> Email: </strong> panihonduras@pani.hn</li>
                        <li class="datos-contacto"><strong> Sitio Web: </strong> panigob@gmail.com</li>
                        <li class="datos-contacto"><strong> Dirección:</strong> Avenida los Próceres, Tegucigalpa</li>
                    </ul>-->
                        <br>
                        <hr>
                        <h4 class="mt-5 mb-4 ps-3">Ubicación PANI</h4>
                    <iframe class="mx-auto ps-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.5572688365055!2d-87.18515678555123!3d14.103292792851676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6fa2df6fb0366b%3A0x802c240caf286950!2sNational%20Child%20Welfare%20Agency!5e0!3m2!1sen!2shn!4v1672325485727!5m2!1sen!2shn"
                     width="100%" height="450" style="border: solid 1px #fee;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                       
                    
                </div>
            </div>
        </div>
        <!--Fin de Contacto--> 

        <!-------------------------------------------INICIO DE FOOTER---------------------------------------------------------->
        <?php
        include "footer.php";
        ?>
        <!-------------------------------------------FIN DE FOOTER---------------------------------------------------------->
</body>
