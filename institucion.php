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
            Programa:         Información Institucion de la empresa
            Fecha:            1/23/2023 
            Programador:      Arnold Alexander Caballero Garcia
            descripcion:      Pagina web en donde se visualizan la información institucional del PANI
            @versión 1.0
        -----------------------------------------------------------------------
          Historial de Cambio
        -----------------------------------------------------------------------
            Programador               Fecha                      Descripcion
          
        ----------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
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
 
    <!------------------------------Seccion Institucion---------------------------------->
    <div class="container m-auto">
        <div class="row mt-5 mb-5 text-center m-auto">
            <div class="col-sm-12 parrafos-institucion m-auto">
                  <h2><strong>Patronato Nacional de la Infancia</strong></h2>
                <p><strong>MISIÓN :</strong> Somos la Institución del Estado de Honduras, que rectora y regula la producción, venta y distribución de la lotería nacional; controla, supervisa y facilita a operadores que ofrecen productos similares, con el fin de garantizar los recursos financieros para la ejecución de los programas y proyectos de inclusión Social del Estado, contribuyendo a reducir la brecha de desigualdad en la población hondureña.</p>
                <p><strong>VISIÓN : </strong> Ser la Institución líder, moderna, eficiente, con credibilidad, transparente y confiable, comprometida con la generación de ingresos financieros que garanticen la sostenible de los programas y proyectos de protección social, dirigidos a la población en situación de riesgo, vulnerabilidad y exclusión social..</p>
                <p><strong>Valores institucionales:</strong></p>
                 <p>
                    <strong><em>1 -</em></strong>
                      SENSIBILIDAD: Percibimos las necesidades sociales. 
                 </p>
                 <p>
                    <strong><em>2 - </em></strong>
                    SOLIDARIDAD: Mostramos adhesión con causas humanas y comunitarias. 
                 </p>
                 <p>
                    <strong><em>3 - </em></strong>
                    COOPERACION:  Realizamos contribución económicas y materiales en diversas áreas sociales y de la salud. 
                 </p>
                 <p>
                    <strong><em>4 - </em></strong>
                    TRANSPARENCIA: Sorteos limpios, operaciones organizadas con máximo control y transparencia frente a la sociedad.  
                 </p>
                 <p>
                    <strong><em>5 - </em></strong>
                    RESPONSABILIDAD: Damos fiel cumplimiento a nuestras obligaciones y principios filantrópicos que nos dieron origen.  
                 </p>
                 <p><strong>Objetivos estratégicos: </strong></p>
                 <p>
                    <strong><em>- </em></strong>
                    Maximizar la generación de recursos que asegure el funcionamiento adecuado de la institución.
                 </p>

                 <p>
                    <strong><em>- </em></strong>
                    Maximizar la generación de recursos, que asegure la sostenibilidad de la institución.                
                 </p>
                  
                
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row mb-5 pe-5">
      <img src="img/organigrama.jpg" alt="Organigrama_PANI">
      </div>
    </div>
    <!----------------------------------------Final seccion institucion---------------------------------->
    <!-------------------------------------------INICIO DE FOOTER-------------------------------------->
        <?php
        include "footer.php";
        ?>
<!-------------------------------------------FINAL DE FOOTER/-------------------------------------->
            <script src="js/jquery-3.5.1.slim.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
    
</body>
</html>