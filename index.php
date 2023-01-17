<?php
include_once "conexion.php";
  $query = "SELECT VALOR FROM TBL_EMPRESA WHERE NOMBRE = 'NOMBRE'; ";
  $Consulta =$conn->query($query);

  $objeto_consulta =mysqli_fetch_object($Consulta);
  $nombre = $objeto_consulta->VALOR;

  $query1 = "SELECT imagen FROM TBL_EMPRESA WHERE ID =1; ";
  $Consulta1 =$conn->query($query1);

  $objeto_consulta1 =mysqli_fetch_object($Consulta1);
  $imagen1 = $objeto_consulta1->imagen;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title><?php echo $nombre; ?></title>
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
  <div class="carousel-indicators w-100">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner mx-auto w-auto">
    <div class="carousel-item active w-100">
      <img src="img/Institucional.png" class="d-block w-100" alt="panihonduras" >
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
      </div>
    </div>
    <div class="carousel-item w-100">
      <img src="img/La_Grande_Web.png" class="d-block w-100" alt="panihonduras.">
      <div class="carousel-caption d-none d-md-block">
        <h5>Honduras</h5>
      </div>
    </div>
    <div class="carousel-item w-100">
      <img src="img/La_Chica.png" class="d-block w-100" alt="panihonduras">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
    <!---------------------------------------CIERRE DE CARRUSEL--------------------------------------->

    <!---------------------------------------INICIO-PRODUCTOS--------------------------------------->
    <section>
     

      <h2 class="sorteo" id="Sorteos">Sorteos</h2>
      <hr>
        <div class="container">
          <div class="row mt-5 mb-5">
            <div class="col-sm-4">
              <div class="card border-0 rounded-0">
                <div class="card-body">
                 <img src="img/1253.jpg" class="card-img-top">
                 <h2 class="text-center">Imagen 1</h2>
                </div>               
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card border-0 rounded-0">
                <div class="card-body">
                 <img src="img/1253.jpg" class="card-img-top">
                 <h2 class="text-center">Imagen 1</h2>
                </div>               
              </div>
            </div>        
            <div class="col-sm-4">
              <div class="card border-0 rounded-0">
                <div class="card-body">
                 <img src="img/1253.jpg" class="card-img-top">
                 <h2 class="text-center">Imagen 1</h2>
                </div>               
              </div>
            </div>
          </div>
        </div>
      </section>
    <!---------------------------------------FINAL-PRODUCTOS--------------------------------------->

<!-------------------------------------------INICIO DE FOOTER-------------------------------------->
<?php
include "footer.php";
?>
<!-------------------------------------------FINAL DE FOOTER/-------------------------------------->

            <script src="js/jquery-3.5.1.slim.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
</body>
</html>

