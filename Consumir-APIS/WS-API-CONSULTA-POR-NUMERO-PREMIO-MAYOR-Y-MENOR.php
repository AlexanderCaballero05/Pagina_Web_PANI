<?php
//Consumo de la API por el metodo GET sin enviar token de autorizacion
// require_once '../conexion.php';

// $tipo_loteria = $_GET['ts'];
// $sorteo           = $_GET['sort'];
// $billete          = $_GET['b'];
// $numero           = $_GET['n'];
// $serie            = $_GET['s'];
// $Valor_premio_menor = 0;
// $Valor_premio_mayor = 0;

// if($tipo_loteria == 1){
//    $url = "http://localhost:8080/CODES_WEB_SITE_PANI/apirest_pani/ws_getpremio_mayor.php?sorteo=".$sorteo."&numero=".$billete."";
//    $json = file_get_contents($url);//obtener el contenido del archivo
//    $datos= json_decode($json,true);//descodificar a un array asociativo

//    if(isset($datos[0]["total"])):
//       $Valor_premio_mayor =  $datos[0]["total"];
//    else:
//       $Valor_premio_mayor =  0;
//    endif;

// }elseif($tipo_loteria == 2){
//    $url ="http://localhost:8080/CODES_WEB_SITE_PANI/apirest_pani/ws_getpremio_menor.php?sorteo=".$sorteo."&numero=".$numero."&serie=".$serie."";
//    $json= file_get_contents($url);
//    $datos = json_decode($json, true);
   
//    if(isset($datos[0]["netopayment"])):
//       $Valor_premio_menor = $datos[0]["netopayment"];
//    else:
//       $Valor_premio_menor = 0;
//    endif;

// }else{

//    }

//    ?>

<!-- <!DOCTYPE html>
<html lang="en">
<body>
   <!--Loteria Mayor-->
   <!-- <?php if($Valor_premio_mayor == 0 && $tipo_loteria == 1):?>
      <div class ="alert alert-warning"><p align="center"> El billete No. <?= $billete ?> <strong> no tiene premio.</strong> </p></div>
   <?php elseif($Valor_premio_mayor > 0 && $tipo_loteria == 1): ?>
      <div class = 'alert alert-success' ><p align = 'center'> El billete No. <?= $billete ?> tiene un premio de:<br> <strong>L <?= number_format($Valor_premio_mayor, 2 ) ?></strong> </p></div>
   <?php endif ?> -->

   <!--Loteria Menor-->
   <!-- <?php if($Valor_premio_menor == 0 && $tipo_loteria == 2):?>
      <div class="alert alert-warning"><p align="center"> El número <?= $numero ?>, con serie No. <?= $serie ?>, <strong> no tiene premio.</strong></p></div>
      <?php elseif($Valor_premio_menor > 0 && $tipo_loteria == 2): ?>
         <div class="alert alert-success"><p align="center"> El número <?= $numero ?>, con serie No. <?= $serie ?>, tiene un premio de:<br><strong>L<?= number_format($Valor_premio_menor, 2)?> </strong></p></div>
         <?php endif; ?> -->

</body>
</html>
 -->





