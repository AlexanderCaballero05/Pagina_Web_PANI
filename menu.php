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
            Programa:         Menu del sitio web
            Fecha:            1/23/2023 
            Programador:      Arnold Alexander Caballero Garcia
            descripcion:      Elemento del index en donde se visualiza el menu general del sitio web.
            @versión 1.0
        -----------------------------------------------------------------------
          Historial de Cambio
        -----------------------------------------------------------------------
            Programador               Fecha                      Descripcion
          
        ----------------------------------------------------------------------->

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
         
  <nav class="navbar navbar-expand-md navbar-light bg-light fixed p-2" id="main_navbar">
    <div class="container-fluid">
   <a class="navbar-brand" href="" style="background-color: transparent !important;"><!--Referencia del logo de la empresa-->
    <img src="img/pani1.png" class="margin d-block" alt="logo-pani" width="160px">
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
      <ul class="navbar-nav mx-auto mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php">Sorteos</a>
            <?php 
            /*
            if($_SERVER['REQUEST_URI'] == '/Sitio_PANi/Pagina_Web_PANI/index.php'){
              echo '<a class="nav-link" href="#Sorteos">Sorteos</a>';
            }else{
            echo  '<a class="nav-link" href="index.php">Sorteos</a>';
            }
            */
            ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Premios</a>
        </li>

        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#"  role="button" data-bs-toggle="dropdown">
               Institución
              </a>
              <ul class="dropdown-menu">
                <li class="nav-item dropdown"><!--Quienes somos-->
                  <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    Quienes Somos
                  </a>
                  <ul class="dropdown-menu">
                    <!--<li><a class="dropdown-item" href="institucion.php">Historia</a></li>-->
                    <li><a class="dropdown-item" href="institucion.php">Misión/Visión</a></li>
                    <li><a class="dropdown-item" href="institucion.php">Valores</a></li>
                    <li><hr class="dropdown-divider"/></li>
                    <li><a class="dropdown-item" href="img/organigrama.jpg" target="_blank">Organigrama</a></li>   
                  </ul>
                </li><!--Quienes somos-->

                <li class="nav-item dropdown"><!--Direccion-->
                  <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    Direcciones
                  </a>
                  <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Dirección Ejecutiva</a></li>
                    <li><a class="dropdown-item" href="#">Sub dirección Ejecutiva</a></li>

                  </ul>
                </li><!--Direccion-->

                <li class="nav-item dropdown"><!--Secretaria-->
                  <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    Secretarias
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Secretaria General</a></li>
                    <li><a class="dropdown-item" href="#">Asesoría legal</a></li>
                  </ul>
                </li><!--Secretaria-->


                <li class="nav-item dropdown"><!--Unidades-->
                  <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    Unidades
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Unid. de Relaciones Públicas</a></li>
                    <li><a class="dropdown-item" href="#">Unid. de Planificación</a></li>
                    <li><a class="dropdown-item" href="#">Unid. de Informática</a></li>

                  </ul>
                </li><!--Unidades-->

                <li class="nav-item dropdown"><!--Gerencias-->
                  <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    Gerencias
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Gcia. de Imprenta</a></li>
                    <li><a class="dropdown-item" href="#">Gcia. de Comercialización</a></li>
                    <li><a class="dropdown-item" href="#">Gcia. Administrativa</a></li>
                    <li><a class="dropdown-item" href="#">Gcia. Financiera</a></li>


                  </ul>
                </li><!--Unidades-->

                
              </ul>
            </li>



        
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootnavbar.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script>
      new bootnavbar();


     $('.contraer').on('click', function(){
            $('.navbar-collapse').collapse('hide');
        }); 
    </script>

</body>
</html>