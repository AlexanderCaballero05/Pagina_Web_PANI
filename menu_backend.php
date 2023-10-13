<?php

include_once 'Consumir-APIS/WS-API-CONSULTA-PREMIOS-MAYOR.php';
$_PremiosMayor = new obtenerEndPointMayor;
$datos = $_PremiosMayor->obtenerDatos();

        include 'Consumir-APIS/WS-API-CONSULTA-PREMIOS-MENOR.php';
        $_PremiosMenor = new obtenerEndPointMenor;
        $datosMenor = $_PremiosMenor->ObtenerDatosMenor();

        include 'Consumir-APIS/WS-API-CONSULTA-PREMIOS-LAGRANDE.php';
        $_PremiosLaGrande = new ObtenerEndPointLaGrande;
        $datosLaGrande = $_PremiosLaGrande->getDatosLaGrande();

$edicion = json_decode($datosLaGrande);
$modalities = implode(",",array_merge($edicion->results->modalities));

echo $modalities;
//echo gettype($modalities);

// $n_modalities = json_decode($modalities);
// $decena_millar = implode(",",array_column($n_modalities->modalities,'number'));
 
// echo $decena_millar;



// echo gettype($number_edicion);
// if (is_array($number_edicion) == true) 
// {
//  echo "is array";
// } else {
//  echo "is not array";
        
// }


// foreach ($edicion as $key) {
//         echo $number = $key['number'];
// };


