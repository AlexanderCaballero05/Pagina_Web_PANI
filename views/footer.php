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
            Programa:         Footer del sitio web
            Fecha:            1/23/2023 
            Programador:      Arnold Alexander Caballero Garcia
            descripcion:      Elemento del footer en donde se visualiza el copyright y otros elementos del sitio web.
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
    <link rel="icon" href="/template/img/pani1.png" type="image/png">

    <link rel="stylesheet" href="template/css/bootstrap.min.css">
    <link rel="stylesheet" href="template/css/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="template/css/style.css" rel="stylesheet"/>
</head>
<body>
<footer class="footer">
  <div class="grupo-1">
    <div class="box"><!--box del logo-->
      <figure>
        <a href="">
          <img src="template/img/pani2.png" alt="Logo Pani">
        </a>
      </figure>
    </div>
    <div class="box"><!--box de texto sobre pani-->
      <h2>Sobre el PANI</h2>
      <P class="text-justify"> Somos una institución del estado con autonomía técnica, administrativa y patrimonio propio, generando recursos para proyecto sociales. A través de la producción y comercialización de las loterías del Estado para el bienestar integral de la población.</P>
    </div>
    <div class="box"><!--box de redes sociales-->
      <h2>Redes Sociales</h2>
      <div class="red-social">
      <a href="https://www.facebook.com/panihonduras" target="_blank" style="background-color: transparent;"><i class="bi-facebook social"></i></a>
      <a href="https://www.instagram.com/loterianacionalpani/?hl=en" target="_blank" style="background-color: transparent;"><i class="bi-instagram social"></i></a>
      <a href="https://www.tiktok.com/discover/pani-honduras?lang=en" target="_blank" style="background-color: transparent;"><i class="bi-tiktok social"></i></a>
      </div>
    </div><!--Fin de box3-->
    <div class="box">
      <h2>App PANI</h2>
      <div class="">
        <!--Plugin de facebook en tiempo real-->
        <a href="https://play.google.com/store/apps/details?id=com.pani.honduras&hl=es" target="_blank">
        <img src="template/img/googleplay.png" alt="logo google play">
        </a>
        <!--Boton de subir al inicio-->
        <button class="toTop" id="toTop">
          <svg viewBox="0 0 24 24">
            <path d="m4 16 8-8 8 8"></path>
          </svg>
        </button>
      </div>
      
    </div>
           
  </div>
  
  <div class="grupo-2">
   <hr size="4">

    <small>Copyright &copy; PANI<b> 2023</b> - Todos los derechos reservados.</small>
  </div>
  
</footer>



             <script src="/js/jquery-3.5.1.slim.min.js"></script>
            <script src="/js/bootstrap.min.js"></script>

            <script>      
                const toTop = (() => {
                  let button = document.getElementById("toTop");
                  window.onscroll = () => {
                    button.classList[
                        (document.documentElement.scrollTop > 200) ? "add" : "remove"
                      ]("is-visible")
                  }
                  button.onclick = () => {
                    window.scrollTo({
                      top:0, behavior:"smooth"
                    })
                  }
                })();/*]]>*/
            </script>
</body>
</html>