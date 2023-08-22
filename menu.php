<!----------------------------------------------------------------------------------------------------
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
        -----------------------------------------------------------------------
        Arnold Caballero             28/03/2023                Consumo de API-REST-PANI-LOTERIA-MAYOR-MENOR
        Arnold Caballero             05/04/2023                Consumo de API-REST-PANI-LOTERIA-MAYOR
      -------------------------------------------------------------------------------------------------->
   <?php
        /*Codigo php en donde se instancia la clase que obtiene
          la API-REST consulta-premios-mayor*/
        include_once 'Consumir-APIS/WS-API-CONSULTA-PREMIOS-MAYOR.php';
        $_PremiosMayor = new obtenerUrl;
        $datos = $_PremiosMayor->obtenerDatos();

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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Raleway:wght@600&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="Plugins/animate/animate.min.css">    
    <link rel="stylesheet" href="Plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
</head>
<body>

<!--Inicio, Items Header-->
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
          <a class="nav-link active" aria-current="page" href="index.php">
            Inicio
          </a>
        </li>
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
        <a class="nav-link" href="" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#ModalPremios">
          Premios</a>
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
                </li>              
              </ul>
            </li>

        <li class="nav-item">
          <a class="nav-link" href="contacto.php">
            Contacto
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav><!--Fin items del Header-->


   <!--CODIGO CONSULTA DE NUMEROS PREMIADOS LOTERIA MAYOR Y MENOR con Ventana Modales-->
<div class="modal fade" id="ModalPremios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 style ="display:none;" class="modal-title fs-5 text-center" id="Modallabel">Consulta de premios <strong> 'La Grande'</strong></h1>
        <h1 style ="display:none;" class="modal-title fs-5 text-center" id="Modallabe2">Consulta de premios <strong> 'La Chica'</strong></h1>
        <h1 class="modal-title fs-5 text-center" id="Modallabe" >Consulta de premios</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
        <div class="modal-body">
          <form id="formul">
          <div class="form-group">
            <!--input tipo Loteria-->
                <div class="form-floating mb-3">
                  <select class="form-select" id ="select-tipo-sorteo" aria-label="Floating label select example" style="background-image: url(img/40319.png)">
                    <option  autofocus selected disabled>--Seleccione--</option>
                    <option value = "1">Mayor</option>
                    <option value = "2">Menor</option>
                  </select>
                  <label for="floatingSelect">Loteria</label>
                </div>
            <!--input sorteo-->
                <div class="form-floating mb-3">
                  <input style ="display:none;" type = "number"  class="form-control" minlength="4" maxlength="4" id="sorteo-premio" name="sorteo-premio" placeholder="name@example.com">
                  <label style ="display:none;" for="floatingInput" id="sorteo-label">Sorteo</label>
                </div>
            <!--input billete-->
                <div class="form-floating mb-3">
                  <input style ="display:none;" type = "number" class="form-control" min = "0" max = "99999" id="billete-premio" placeholder="name@example.com" >
                  <label style ="display:none;"  for="floatingInput" id="billete-label">Billete</label>
                </div>
            <!--input numero-->
                <div class="form-floating mb-3">
                  <input style ="display:none;" type = "number" class="form-control" min = "1" max = "2" id="numero-premio" placeholder="name@example.com">
                  <label style ="display:none;" for="floatingInput" id="numero-label">Numero</label>
                </div>
            <!--input serie-->
                <div class="form-floating mb-3">
                  <input style ="display:none;" type="number" class="form-control" min = "0" max = "99999" id="serie-premio" placeholder="name@example.com">
                  <label style ="display:none;" for="floatingInput"  id="serie-label">Serie</label>
                </div>
            <!--Button-->
                    <span id='btn-consulta-premio' class="btn btn-primary" style='margin-top:10px; width:100%' onclick="consultar_premio()">CONSULTAR PREMIO <i class="bi-send"></i></span>
          </div>
          </form>
        </div>
        <div class="modal-footer">
           <div class="container" id="respuesta-consulta-premio"></div>
         </div>
  </div>
</div>
</div>
<!--fIN DECODIGO CONSULTA DE NUMEROS PREMIADOS LOTERIA MAYOR Y MENOR con Ventana Modales-->

<!-------------------------------------------------------------------------------------------------------
----------CONSULTANDO API-REST-PANI DE LOS NUMEROS PREMIADOS DE LOS SORTEOS RECIEN JUGADOS---------------
--------------------------------------------------------------------------------------------------------->
    <div class="modal fade" id="exampleModalToggle" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Sorteos Jugados</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             Elige una lotería para ver los números premiados 
          </div>
         
          <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#loteriaMayor" data-bs-toggle="modal">Lotería Mayor</button>
            <button class="btn btn-primary" data-bs-target="#loteriaMenor" data-bs-toggle="modal">Lotería Menor</button>
          </div>
        </div>
      </div>
    </div><!--Fin Modal primario de loterias-->
  
    <div class="modal fade" id="loteriaMayor" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Información del sorteo Lotería Mayor</h1>
            <a href="index.php"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
          </div>
          <div class="modal-body">
            <div class="card">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><?= "N. Sorteo: " .$datos['sorteo']. " || Fecha de sorteo: " .$datos['fecha_sorteo'];?></li>
                <li class="list-group-item"><?= "Fecha de vencimiento: " .$datos['vencimiento_sorteo'];?></li>
                    <?php
                      $n_premios = 0;
                      foreach ($datos as $sorteo => $dato):
                        foreach ($dato as $premio => $valor):
                          $n_premios ++;
                          $numero_ganador=  $valor['numero'];
                          $valor_premio  =  $valor['pago_premio'];
                          $tipo_premio  =  $valor['tipo'];
                    ?>
                <?php if($tipo_premio == "ESPECIES"): ?>
                <li class="list-group-item"><?= "#".$n_premios ?> premio: <h6 style="display: inline-block;"><?= $numero_ganador?></h6> numero , con <h6 style="display: inline-block;"><?= $valor_premio?></h6></li>
                <?php else: ?>
                <li class="list-group-item"><?= "#".$n_premios?> premio: <h6 style="display: inline-block;"><?= $numero_ganador?></h6> numero, con <strong><h6 style="display: inline-block; color:green;"><?= $valor_premio?></h6></strong> Lempiras</li>                
                <?php endif; ?>
               </ul>
               <?php
                      endforeach;
                    endforeach;
               ?>
            </div>
          </div>
                           
          <div class="modal-footer">
            <a href="index.php"><button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Cerrar</button></a>
          </div>
        </div>
      </div>
    </div><!--Fin modal loteria Mayor-->

          <?php

          ?>

    <div class="modal fade" id="loteriaMenor" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Sorteo 3417</h1>
            <a href="index.php"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
          </div>
            <div class="modal-body">
              <div class="card" style="width: 18rem;">
                <div class="card-header">
                  Featured
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">An item</li>
                  <li class="list-group-item">A second item</li>
                  <li class="list-group-item">A third item</li>
                </ul>
              </div>
            </div>
            <div class="modal-footer">
              <a href="index.php">  <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Cerrar</button></a>
            </div>
      </div>
    </div>
  </div><!--fin modal loteria Menor-->
<!--FIN DE CONSULTA DE SORTEOS RECIEN JUGADOS-->


<!-------------------------------------------------------------------------------------------------------
----------CONSULTANDO API-REST-PANI DE LOS NUMEROS PREMIADOS DE LOS SORTEOS A JUGAR---------------
--------------------------------------------------------------------------------------------------------->
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
    </div><!--FIN DE CONSULTA DE SORTEOS A JUGAR-->

    <div class="modal fade" id="loteriaMayorJugar" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Premios del proximo sorteo a jugar</h1>
            <a href="index.php"> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
          </div>
          <div class="modal-body">
            <div class="card">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">#premio 1</li>
              </ul>
            </div>
          </div>
                           
          <div class="modal-footer">
            <a href="index.php"><button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Cerrar</button></a>
          </div>
        </div>
      </div>
    </div><!--Fin mod

<!--Scripts del sitio web-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="zSsNCouo"></script>
    <script src="js/bootnavbar.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="Plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/main.js"></script>
    <script> new bootnavbar();</script>
<!--Scripts del sitio web-->



<script type="text/javascript">
//Muestra los inputs y sus labels segun el tipo de loteria que son 1 y 2
  $("#select-tipo-sorteo").change(function(){//se consigue utilizando el input select que es donde se elige el tipo de loteria que son 1 y 2
    if ($(this).val() === "1" ){
      //mostrar los campos del sorteo Mayor
      document.getElementById('sorteo-premio').style.display ="block";
      document.getElementById('billete-premio').style.display ="block";
      document.getElementById('serie-premio').style.display ="none";
      document.getElementById('numero-premio').style.display ="none";
      //limpiar los campos
      document.getElementById('sorteo-premio').value="";
      document.getElementById('serie-premio').value="";
      document.getElementById('numero-premio').value="";
      //Mostrar los labels
      document.getElementById('sorteo-label').style.display ="block";
      document.getElementById('numero-label').style.display ="none";
      document.getElementById('billete-label').style.display ="block";
      document.getElementById('serie-label').style.display ="none";
      document.getElementById('Modallabe').style.display ="none";
      document.getElementById('Modallabel').style.display ="block";
      document.getElementById('Modallabe2').style.display ="none";

    }else{
      //mostrar los campos del sorteo Mayor
      document.getElementById('sorteo-premio').style.display ="block";
      document.getElementById('billete-premio').style.display ="none";
      document.getElementById('serie-premio').style.display ="block";
      document.getElementById('numero-premio').style.display ="block";
      //limpiar los campos
      document.getElementById('sorteo-premio').value="";
      document.getElementById('billete-premio').value="";
     //Mostrar los labels
      document.getElementById('sorteo-label').style.display ="block";
      document.getElementById('numero-label').style.display ="block";
      document.getElementById('serie-label').style.display ="block";
      document.getElementById('billete-label').style.display ="none";
      document.getElementById('Modallabe').style.display ="none";
      document.getElementById('Modallabel').style.display ="none";
      document.getElementById('Modallabe2').style.display ="block";
   
    }
  });

</script>

<script type="text/javascript">
  //funcion para realizar la consulta de los premios
    function consultar_premio(){
      tipo_loteria = document.getElementById('select-tipo-sorteo').value;
      sorteo = document.getElementById('sorteo-premio').value;
      billete = document.getElementById('billete-premio').value;
      numero  = document.getElementById('numero-premio').value;
      serie   = document.getElementById('serie-premio').value;

      if (tipo_loteria == 1 && sorteo !="" && billete !="") {
        billete = document.getElementById('billete-premio').value;

        numero  = 0;
        serie   = 0;

      }else if(tipo_loteria == 2 && sorteo !="" && numero !="" && serie !=""){

        billete = 0;
        numero  = document.getElementById('numero-premio').value;
        serie   = document.getElementById('serie-premio').value;

      }else{
        
        Swal.fire({
            type: 'warning',
            title: 'Debe seleccionar todos los campos'
        });
        return false;
      }


        consulta = './Consumir-APIS/WS-API-CONSULTA-POR-NUMERO-PREMIO-MAYOR-Y-MENOR.php?ts='+tipo_loteria+'&sort='+sorteo+'&b='+billete+'&n='+numero+'&s='+serie;
        $("#respuesta-consulta-premio").load(consulta);
      
    }

    </script>

</body>
</html>