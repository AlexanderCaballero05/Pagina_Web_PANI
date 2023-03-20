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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Raleway:wght@600&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="Plugins/animate/animate.min.css">    
    <link rel="stylesheet" href="Plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">

    

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
        <!--<li class="nav-item">
        <a class="nav-link" href="" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Sorteos</a>

            <?php 
            /*
            if($_SERVER['REQUEST_URI'] == '/Sitio_PANi/Pagina_Web_PANI/index.php'){
              echo '<a class="nav-link" href="#Sorteos">Sorteos</a>';
            }else{
            echo  '<a class="nav-link" href="index.php">Sorteos</a>';
            }
            */

            
            ?>
        </li>-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sorteos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Recién Jugado</a></li>
            <li><a class="dropdown-item" href="#" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#sorteoAjugar">Próximo a jugar</a></li>
          </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#exampleModal">Premios</a>
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
                    Secretaria
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
                    <li><a class="dropdown-item" href="autoridades.php">Unid. de Informática</a></li>
                    <?php
                    $option = 1;
                    '<li><a class="dropdown-item" href="autoridades.php">Unid. de Informática</a></li>'
                    ?>
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


   <!--CODIGO CONSULTA DE PREMIOS LOTERIA MAYOR Y MENOR-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Consulta de premios</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
        <div class="modal-body">
          <div class="form-group">
            <!--input tipo Loteria-->
              <div class="input-group">
                <div class="input-group-prepend">
                  <span style="width: 80px;" class="input-group-text">
                     Loteria
                  </span>
                </div>
                  <select class="form-control" id ="select-tipo-sorteo">
                    <option selected disabled>--Seleccione--</option>
                    <option value = "1">Mayor</option>
                    <option value = "2">Menor</option>
                  </select>
              </div>
            <!--input sorteo-->
              <div class="input-group"  style = "margin-top:8px">
                <div class="input-group-prepend">
                  <span style="width: 80px;" class="input-group-text" >
                      Sorteo
                   </span>
                </div>
                <input type = "numer" class = "form-control" min = "1" max = "9999" id="sorteo-premio" >
              </div>
            <!--input billete-->
              <div id= 'show-cambio-inputs'>
                <div class="input-group"  style = "margin-top:8px">
                  <div class="input-group-prepend">
                    <span style="width: 80px;" class="input-group-text" >
                        Billete
                    </span>
                  </div>
                   <input type = "numer" class = "form-control" min = "0" max = "99999" id="billete-premio" >
                </div>
              </div>
            <!--Button-->
                 <span id = 'btn-consulta-premio' class = 'btn btn-success' style = 'margin-top:10px; width:100%' onclick="consultar_premio()">Consultar Premio <i class="" id="icon_consultar"></i> </span>
          </div>
        </div>
        <div class="modal-footer">
           <div class="container" id="respuesta-consulta-premio"></div>
         </div>
  </div>
</div>
</div>
<!--fIN DE CODIGO CONSULTA DE PREMIOS LOTERIA MAYOR Y MENOR-->


<!-------------------------------------------------------------------------------------------------------
  ------------------------------------------------CONSULTA DE SORTEOS RECIEN JUGADOS-------------------
--------------------------------------------------------------------------------------------------------->
<!-- Example Code -->
<div class="modal fade" id="exampleModalToggle" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Sorteos Jugados</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Elegi una loteria para ver los billetes ganadores
          </div>
         
          <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#loteriaMayor" data-bs-toggle="modal">Loteria Mayor</button>
            <button class="btn btn-primary" data-bs-target="#loteriaMenor" data-bs-toggle="modal">Loteria Menor</button>
          </div>
         
        </div>
      </div>
    </div>
  
    <div class="modal fade" id="loteriaMayor" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">SORTEO: 1256   |   FECHA: 15-05-23</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
                <div class="card" style="width: 100%;">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">An item</li>
            
                  </ul>
                  <div class="card-footer">
                    Card footer
                  </div>
                </div>
          </div>
          <div class="modal-footer">
            <a href="index.php"><button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Regresar</button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="loteriaMenor" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Sorteo 3417</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              Hide this modal and show the first with the button below.
              Hide this modal and show the first with the button below.
              Hide this modal and show the first with the button below.
              Hide this modal and show the first with the button below.
              Hide this modal and show the first with the button below.
              Hide this modal and show the first with the button below.
              v
              v
              Hide this modal and show the first with the button below.Hide this modal and show the first with the button below.v

              Hide this modal and show the first with the button below.
              Hide this modal and show the first with the button below.
              Hide this modal and show the first with the button below.
              Hide this modal and show the first with the button below.
              v
              Hide this modal and show the first with the button below.
              Hide this modal and show the first with the button below.
              Hide this modal and show the first with the button below.
            
              Hide this modal and show the first with the button below.
              Hide this modal and show the first with the button below.

              Hide this modal and show the first with the button below.

              
              
            </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Regresar</button>
        </div>
      </div>
    </div>
  </div>
<!--FIN DE CONSULTA DE SORTEOS RECIEN JUGADOS-->


<!-------------------------------------------------------------------------------------------------------------------------
  ------------------------------------------------CONSULTA DE SORTEOS A JUGAR-----------------------------------------------
-------------------------------------------------------------------------------------------------------------------------->

<div class="modal fade" id="sorteoAjugar" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Sorteos proximos a jugar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Elegi una loteria para ver los premios a jugar
          </div>
         
          <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#loteriaMayorJugar" data-bs-toggle="modal">Loteria Mayor</button>
            <button class="btn btn-primary" data-bs-target="#loteriaMenorJugar" data-bs-toggle="modal">Loteria Menor</button>
          </div>
         
        </div>
      </div>
    </div>



  
<!--Scripts del sitio web-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="zSsNCouo"></script>
    <script src="js/bootnavbar.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="Plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="jquery/codigoSweetAlert2.js"></script>
    <script src="js/main.js"></script>
    <script> new bootnavbar();</script>
<!--Scripts del sitio web-->


<script type="text/javascript">
function consultar_premio(){
  //alert("se envio el dato");
  
  tipo_loteria = document.getElementById('select-tipo-sorteo').value;
sorteo = document.getElementById('sorteo-premio').value;

  if (tipo_loteria == 1) {

billete = document.getElementById('billete-premio').value;
numero  = 0;
serie   = 0;

}else{

billete = 0;
numero  = document.getElementById('numero-premio').value;
serie   = document.getElementById('serie-premio').value;

}


  consulta = 'consultar_premio.php?ts='+tipo_loteria+'&sort='+sorteo+'&b='+billete+'&n='+numero+'&s='+serie;
  $("#respuesta-consulta-premio").load(consulta);
  
}

</script>

<script src="jquery/jquery-3.3.1.min.js"></script>

</body>
</html>