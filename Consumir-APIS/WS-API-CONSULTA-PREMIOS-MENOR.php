<?php

class obtenerEndPointMenor
{
    function ObtenerDatosMenor()
    {
        $url = "http://localhost:8080/WS-API-CONSULTA-PREMIOS-MAYOR-MENOR/ws_ListPremiosMenor.php";
        $json = file_get_contents($url);
        $datos = json_decode($json, true);

        return $datos;
    }
}
