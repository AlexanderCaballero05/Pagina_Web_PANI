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
            Programa:         index del sitio web
            Fecha:            1/23/2023 
            Programador:      Arnold Alexander Caballero Garcia
            descripcion:      Index del sitio web, muestra el menu, los sorteos
            @versión 1.0
        -----------------------------------------------------------------------
          Historial de Cambio
        -----------------------------------------------------------------------
            Programador               Fecha                      Descripcion
          
        ----------------------------------------------------------------------->
<!---------------------------------------INICIO DE MENU--------------------------------------->
<?php
  include "menu.php";
  ?>
    <!---------------------------------------CIERRE DE MENU--------------------------------------->
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>

<div class="container">
   <div lass="row mt-5 mb-5 justify-content-center mx-auto">
       <div class="col-sm-12 contacto mx-auto">
           <h2 class="text-center pt-5"><strong>Nueva Modalidad de Juego</strong></h2>

           <div class="accordion mt-5 mb-4 ps-3" id="accordionExample">
             <div class="accordion-item">
               <h1 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                 Conocé una nueva modalidad 
                 </button>
               </h1>
               <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                 <div class="accordion-body align-content-center">
                   <strong>Te presentamos nuestra nueva modalidad de juego con la cual vos podés ser un nuevo millonario 🤑🤑🤑
                     ¡Con LaGrande sí que podés!.</strong> 
                   
                        <div class="fb-video" data-href="https://fb.watch/mBTNNt07QI/" data-width="600" data-show-text="false">

                        </div>
                 </div>
               </div>
             </div>
             <div class="accordion-item">
               <h2 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                 Como podés jugar y ganar
                 </button>
               </h2>
               <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                 <div class="accordion-body">
                   <strong>Así es como podés jugar y ganar con La Grande de la Lotería Nacional </strong> 
                   <p>¡Vos podés ser nuestro próximo millonario, con nuestra nueva modalidad de juego que te dará muchos premios! 🤑🎉.</p>

                   <div class="fb-post" data-href="https://www.facebook.com/photo/?fbid=679529490876178&amp;set=a.294808956014902&amp;__cft__[0]=AZVSGJpQQ6tuhIVlJTtqEZdhoN-Qe40Q6jgHqCEW01qs5KljgKTjx2FO5oGWTUvjEuuqRS44O6kfdOYPpMe1upCIAbYo4Tm7NKAJib7VjeI10_bvTBfC38uZBL9osOIBwqVi2AmpCxXRRKpkZ5sgbpLHIhZv2826KRgWY3EX_5lCDHR-DtiHpFfGISA5SXeoE-Y&amp;__tn__=EH-R" data-width="500" data-show-text="false">

                   </div>

                 </div>
               </div>
             </div>
           <!-- ITEM 3 -->

             <div class="accordion-item">
               <h2 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                   Forma parte de nuestros Vendedores
                 </button>
               </h2>
               <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                    <strong><p>¿Querés convertirte en un fabricante de millonarios y generar ingresos para ti o para tu negocio? 🤑🤑🤑</p></strong>
                    <strong><p>Contáctanos y adquiere tu Fábrica De Millonarios: 3312-0275 (ÚNICAMENTE WHATSAPP)</p></strong>
                    <strong><p>Correo de ayuda: ayuda@pani.hn 🤑🤑🤑</p></strong>
                    <!-- Imagen modal -->
                     <img id="myImg" src="img/vender-loteria.jpg" alt="PANI" style="width:100%;max-width:300px">
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                     <div id="caption"></div>
                    </div>
               </div>
             </div>
           </div>
           <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
           </div>
          <!-- ITEM 4 -->
             <div class="accordion-item">
               <h2 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                 Indumentaria de los vendedores
                 </button>
               </h2>
               <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                 <strong><p>Esta es la indumentaria de los vendedores que te llevarán la suerte y te convertirán a vos en nuestro próximo millonario. 🤑🤑🤑</p></strong>
               
                 <div class="fb-video" data-href="https://fb.watch/mBX8VugZIj/" data-width="600" data-show-text="false"> </div>
            
               </div> 
             </div>
           </div>
          <!-- ITEM 5 -->
             <div class="accordion-item">
               <h2 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                 Identificá los puntos de venta
                 </button>
               </h2>
               <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                 <strong><p>Esta es la indumentaria de los vendedores que te llevarán la suerte y te convertirán a vos en nuestro próximo millonario. 🤑🤑🤑</p></strong>
               
                 <div class="fb-video" data-href="https://fb.watch/mBX8VugZIj/" data-width="600" data-show-text="false"> </div>
            
               </div> 
             </div>
           </div>
           
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
           <div id="fb-root"></div>
           <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v17.0" nonce="dzE1Lwa1"></script>
        </div>
    </div>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
  <!-------------------------------------------INICIO DE FOOTER---------------------------------------------------------->
  <?php
        include "footer.php";
        ?>
        <!-------------------------------------------FIN DE FOOTER---------------------------------------------------------->






  
    