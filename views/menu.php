<!--Inicio, Items Header-->
 <nav class="navbar navbar-expand-md navbar-light bg-light fixed p-2" id="main_navbar">
    <div class="container-fluid">
   <a class="navbar-brand" href="" style="background-color: transparent !important;"><!--Referencia del logo de la empresa-->
    <img src="template/img/pani1.png" class="margin d-block" alt="logo-pani" width="160px">
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
      <ul class="navbar-nav mx-auto mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio">
            Inicio
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sorteos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#loteriaMayor">Lotería Mayor</a></li>
            <li><a class="dropdown-item" href="#" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#loteriaMenor">Lotería Menor</a></li>
            <li><button class="btn btn-primary" data-bs-target="#loteriaLaGrande" data-bs-toggle="modal" id="">Lotería La Grande</button></li>

            <li><a class="dropdown-item" href="#" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#">Lotería La Chica</a></li>
            <!-- <li><a href="menu_backend.php"><button class="btn btn-danger" data-bs-target="" data-bs-toggle="modal" id="Item-LaGrande">Menu prueba</button></a></li> -->
            
          </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#ModalPremios">
          Premios</a>
        </li>

        <li class="nav-item dropdown"><!-- Lista del Item Institución-->
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
                    <li><a class="dropdown-item" href="institucion">Misión/Visión</a></li>
                    <li><a class="dropdown-item" href="institucion">Valores</a></li>
                    <li><hr class="dropdown-divider"/></li>
                    <li><a class="dropdown-item" href="template/img/organigrama.jpg" target="_blank">Organigrama</a></li>   
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
                    // '<li><a class="dropdown-item" href="autoridades.php">Unid. de Informática</a></li>'
                    ?>
                  </ul>
                </li><!--Unidades-->

                <li class="nav-item dropdown"><!--Gerencias-->
                  <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    Gerencias
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Gcia. de Imprenta</a></li>
                    <li><a class="dropdown-item" href="#">Gcia. de Comercializaci&oacute;n</a></li>
                    <li><a class="dropdown-item" href="#">Gcia. Administrativa</a></li>
                    <li><a class="dropdown-item" href="#">Gcia. Financiera</a></li>
                  </ul>
                </li>    
                <li class="nav-item dropdown">
                 <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    COCOIN
                 </a>
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./cocoinView.php">Comit&eacute; control Interno</a></li>
                  </ul>
                 
                </li>
                <li class="nav-item dropdown"><!--Comite de probidad y etica-->
                 <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    Probidad
                 </a>
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./probaEticaView.php">Comit&eacute; de probidad y &eacute;tica</a></li>
                  </ul>
                </li>
                         
              </ul>
            </li><!--Final del item institucion-->

          

        <li class="nav-item">
          <a class="nav-link" href="contacto">
            Contacto
          </a>
        </li>
        <!-- Item Nueva Modalidad -->
        <li class="nav-item">
          <a class="nav-link animated-button1" href="nuevaLoteria.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Nueva-Modalidad
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav><!--Fin items del Header-->

