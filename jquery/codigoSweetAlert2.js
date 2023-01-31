
//funcion para collapsar el menu de institución
$('.contraer').on('click', function(){
       $('.navbar-collapse').collapse('hide');
   }); 

//Prueba de alert
$("#botonprueba").click(function(){
    Swal.fire({
        type:'Info',
        title:'mensaje',
        text:'prueba'
    });
});