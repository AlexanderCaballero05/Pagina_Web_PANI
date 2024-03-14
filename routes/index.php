<?php
class Route{
    function getRoutes()
    {
        /**================================================================================================
          *                                       MENU DEL SITIO
         =================================================================================================*/
        include "views/menu.php";
        include_once 'template/plantilla.php';

        /**================================================================================================
          *                                       RECURSOS DEL SITIO
         =================================================================================================*/
        //Si no se envia recurso en el endpoint o se envia el nombre de index, se cargara el inicio de la pagina
        if (!isset($_GET["recurso"]) || $_GET["recurso"] == "index" ): 
            include "views/inicio.php";
        endif; 
        // si se envia el recurso
        if(isset($_GET["recurso"])):
            $recurso = $_GET["recurso"]; //obtenemos el valor del recurso
            if( $recurso == "inicio" || 
                $recurso == "contacto" || 
                $recurso == "institucion" ||
                $recurso == "probidad-etica" ||
                $recurso == "nuevaLoteria"
                ):
               include_once "views/".$recurso.".php";
              
             elseif( $recurso == "direccion-ejecutiva"):
                include_once "views/estructura-organica/".$recurso.".php";

            endif;
        endif;
        /**================================================================================================
         *                                       FOOTER DEL SITIO
         =================================================================================================*/
        include "views/footer.php";
    }
}

