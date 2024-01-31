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
            descripcion:      Index del sitio web, muestra la nueva modalidad
            @versión 1.0
        -----------------------------------------------------------------------
          Historial de Cambio
        -----------------------------------------------------------------------
            Programador               Fecha                      Descripcion
          
        ----------------------------------------------------------------------->
<!---------------------------------------INICIO DE MENU--------------------------------------->
<?php
  include "template/menu.php";
  ?>
    <!---------------------------------------CIERRE DE MENU--------------------------------------->
  
<a href="https://api.whatsapp.com/send?phone=50433120275" class="btn-wsp" target="_blank">
	    <i class="fa fa-whatsapp icono"></i>
	</a>

<div class="container">
   <div lass="row mt-5 mb-5 justify-content-center mx-auto">
       <div class="col-sm-12 contacto mx-auto">
           <h2 class="text-center pt-5"><strong>Nueva Modalidad de Juego</strong></h2>

           <div class="accordion mt-5 mb-4 ps-3" id="accordionExample">
            <!-- ITEM 1 -->
             <div class="accordion-item">
               <h1 class="accordion-header">
                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                 Conocé una nueva modalidad 
                 </button>
               </h1>
               <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                 <div class="accordion-body align-content-center">
                   <strong>Te presentamos nuestra nueva modalidad de juego con la cual vos podés ser un nuevo millonario.</strong> 
                        <div class="fb-video" data-href="https://fb.watch/mBTNNt07QI/" data-width="600" data-show-text="false"></div>
                 </div>
               </div>
             </div>
             <!-- ITEM 2 -->
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

                   <div class="fb-video" data-href="https://fb.watch/mDqb6umplR/" data-width="600" data-show-text="false"></div>
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
                     <img id="myImg" src="template/img/vender-loteria.jpg" alt="PANI" style="width:100%;max-width:300px">
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
                 <strong><p>¿Ya sabés dónde comprar La Grande?</p></strong>
                 <strong><p>La encontrás como el #PuntoAmarillo que te convertirá en el próximo millonario con los siguientes elementos que te presentamos en este video.</p></strong>
                 <strong><a href="https://fb.watch/mEtrb99cSL/" target="_blank" style="text-decoration: none !important;"><p>Link del video</p></a></strong>          
               </div> 
             </div>
           </div>
           <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
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
     include "template/footer.php";
  ?>
  <!-------------------------------------------FIN DE FOOTER------------------------------------------------------------->    