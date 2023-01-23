
<!--INICIO DE QUERYS CON PHP-->
<?php 
    include_once "conexion.php";

    $query = "SELECT VALOR FROM TBL_EMPRESA WHERE ID= 3;";
    $Consulta =$conn->query($query);

    $query1 = "SELECT VALOR FROM TBL_EMPRESA WHERE ID= 4;";
    $Consulta1 =$conn->query($query1);

    $query2 = "SELECT VALOR FROM TBL_EMPRESA WHERE ID= 5;";
    $Consulta2 =$conn->query($query2);

    $query3 = "SELECT VALOR FROM TBL_EMPRESA WHERE ID= 6;";
    $Consulta3 =$conn->query($query3);

    $query4 = "SELECT VALOR FROM TBL_EMPRESA WHERE ID= 2;";
    $Consulta4 =$conn->query($query4);   
?>
<!--FIN DE QUERYS CON PHP-->

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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Raleway:wght@600&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    
    <!---------------------------------------INICIO DE MENU--------------------------------------->
  <?php
  include "menu.php";
  ?>
    <!---------------------------------------CIERRE DE MENU--------------------------------------->

        <!---------INICIO SECCION DE CONTACTO----------->
        <div class="container">
            <div class="row mt-5 mb-5 justify-content-center mx-auto">
                <div class="col-sm-12 contacto mx-auto">
                    <h2 class="text-center pt-3"><strong>CONTACTO</strong></h2>
                    <h4 class="mx-auto ps-4 pb-2">Datos de contacto</h4>
                <!--PHP CONTACTO -->
                    <?php  

                    $objeto_consulta = mysqli_fetch_object($Consulta);
                    $razon_social = $objeto_consulta->VALOR;

                    $objeto_consulta1 = mysqli_fetch_object($Consulta1);
                    $telefono = $objeto_consulta1->VALOR;

                    $objeto_consulta2 = mysqli_fetch_object($Consulta2);
                    $email = $objeto_consulta2->VALOR;
                    
                    $objeto_consulta4 = mysqli_fetch_object($Consulta3);
                    $web = $objeto_consulta4->VALOR;

                    $objeto_consulta5 = mysqli_fetch_object($Consulta4);
                    $direccion = $objeto_consulta5->VALOR;

                    ?>    
                <!--FIN PHP CONTACTO -->  
                    <ul>
                        <li class="text-justify"><strong> Razón Social: </strong><?php echo $razon_social;?></li>
                        <li class="datos-contacto"><strong> Teléfono: </strong><?php echo $telefono;?></i></li>
                        <li class="datos-contacto"><strong> Email: </strong> <?php echo $email;?></li>
                        <li class="datos-contacto"><strong> Sitio Web: </strong> <?php echo $web;?></li>
                        <li class="datos-contacto"><strong> Dirección:</strong> <?php echo $direccion;?></li>
                    </ul>
                        <hr>
                        <h4 class="mt-5 mb-2">Ubicación PANI</h4>
                    <iframe class="mx-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.5572688365055!2d-87.18515678555123!3d14.103292792851676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6fa2df6fb0366b%3A0x802c240caf286950!2sNational%20Child%20Welfare%20Agency!5e0!3m2!1sen!2shn!4v1672325485727!5m2!1sen!2shn"
                     width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                       
                    
                </div>
            </div>
        </div>
        <!--Fin de Contacto--> 

        <!-------------------------------------------INICIO DE FOOTER---------------------------------------------------------->
        <?php
        include "footer.php";
        ?>
        <!-------------------------------------------FIN DE FOOTER---------------------------------------------------------->


            <script src="js/jquery-3.5.1.slim.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <!--<script src="js/popper.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/main.js"></script>-->


</body>
</html>