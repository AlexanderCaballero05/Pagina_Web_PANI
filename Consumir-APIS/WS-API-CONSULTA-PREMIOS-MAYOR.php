<?php

class obtenerUrl{
    //funcion para consumir la API premios Loteria Mayor sorteo resien jugado        
    function obtenerDatos()
    { 
          $url = "http://localhost:8080/CODES_WEB_SITE_PANI/WS-API-CONSULTA-PREMIOS-MAYOR/ws_getPremiosPorSorteo";//esta esta hardcore corregir
    $json = file_get_contents($url);
    $datos = json_decode($json, true);
  
    return $datos;
      }
      //funcion para consumir la API premios loteria Mayor a Jugar        
      public function ObtenerPremiosAjugar()
      {
        $url = "http://localhost:8080/WS-API-CONSULTA-PREMIOS-MAYOR/ws_getPremiosSorteoSiguiente";//esta esta hardcore corregir
        $json = file_get_contents($url);
        $datos = json_decode($json, true);
      }
  
}
    
?>
              
    
    