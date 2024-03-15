
<div class="container">
    <div class="contenedor-perfil-autoridad"> </div>
            <hr>
            <p class="titulo-funciones">Corresponde a direcci&oacute;n Ejecutiva:<br> <br></p>
    <div class="contenedor-funciones-autoridad">
        <div class="descripcion-funciones-autoridad"> </div>
    </div>
</div>

<script>
    /**
     * ----------------------------------------------Mostrar perfil de autoridades-----------------------------------------------------------------
     */

     const datosAutoridad = [
        {
            cod_autoridad: '1',
            nombre_autoridad: 'Ana Julia Arana Canales',
            profesion: 'Abogada',
            foto: './template/img/directora.jpeg',
            cargo_autoridad: 'Director Ejecutivo',
            descripcion_cargo: 'La Dirección Ejecutiva del PANI, por ley es la autoridad responsable de ejecutar las decisiones y disposiciones emitidas por el Consejo Directivo (CODIPANI), así como implementar políticas administrativas, financieras y personal que correspondan a las necesidades de la institución.'
        }


     ];
     
     const perfilAutoridades = document.querySelector('.contenedor-perfil-autoridad');
     
     //cada vez que se cargue la pagina
     window.addEventListener("DOMContentLoaded", () => {
         DisplayperfilAutoridades (datosAutoridad);
         // perfilAutoridades.style.visibility = 'visible';
        });
        
        function DisplayperfilAutoridades(itemDatosAutoridad)  
        {
            let displayPerfil = itemDatosAutoridad.map((item) => {
                return `<div class="imagen-perfil-autoridad">
                <img src="${item.foto}" alt="" srcset="" class="img-perfil">
                </div>
                <div class="datos-autoridad">
                <div class="descripcion-perfil-autoridad">
                <p></p>
                <p id="puesto">${item.cargo_autoridad}</p>
                <h3>${item.profesion} ${item.nombre_autoridad}</h3>
                <p>${item.descripcion_cargo}</p>
                </div>
                </div>`
                
            });
            displayPerfil = displayPerfil.join("");
            perfilAutoridades.innerHTML = displayPerfil;
            
            
        }


// ----------------------------------------------------------------Funciones autoridades-------------------------------------------------------------
        
        
             const funcionesAutoridad = [
                {
                    cod_funcion: '1',
                    codigo_cargo: '1',
                    descripcion_funcion: 'A) Ejercer la administración de la entidad conforme a esta ley y sus reglamentos y ejecutar las decisiones del consejo directivo;'
                },
        
                {
                    cod_funcion: '2',
                    codigo_cargo: '1',
                    descripcion_funcion: 'B) Someter anualmente a la aprobación del consejo directivo el balance general del pani, el proyecto de presupuesto por programas y las normas para la ejecución de este;'
                },
        
                {
                    cod_funcion: '3',
                    codigo_cargo: '1',
                    descripcion_funcion: 'C) Ejercer la representación legal del pani;'
                },
        
                {
                    cod_funcion: '4',
                    codigo_cargo: '1',
                    descripcion_funcion: 'D) Nombrar, suspender o remover, de acuerdo con las disposiciones legales y reglamentarias correspondientes, a los empleados de la institución;'
                },
        
                {
                    cod_funcion: '5',
                    codigo_cargo: '1',
                    descripcion_funcion: 'E) Informar mensualmente al consejo directivo sobre las actividades realizadas y preparar el informe a que se refiere el literal (i) del artículo 18;'
                },
        
                {
                    cod_funcion: '6',
                    codigo_cargo: '1',
                    descripcion_funcion: 'F) Asistir, con voz, pero sin voto, a las sesiones del consejo directivo y desempeñar la secretaria del mismo;'
                },
        
                {
                    cod_funcion: '7',
                    codigo_cargo: '1',
                    descripcion_funcion: 'G) Las demás contenidas en esta ley, sus reglamentos y en los acuerdos y resoluciones del consejo directivo;'
                },
                {
                    cod_funcion: '8',
                    codigo_cargo: '1',
                    descripcion_funcion: 'H) La aprobaci&oacute;n del plan de Inversiones'
                }
        
        
             ]
        

        const FuncionesAutoridad = document.querySelector('.descripcion-funciones-autoridad');

        window.addEventListener("DOMContentLoaded", () => {
            DisplayFuncionesAutoridad(funcionesAutoridad);
            // FuncionesAutoridad.style.visibility = 'visible';
        })

        function DisplayFuncionesAutoridad (itemfuncionesAutoridad)
        {
            let displayFunciones = itemfuncionesAutoridad.map((item) => {
                return `
                            <p>${item.descripcion_funcion}</p>
                        `
                });

                displayFunciones = displayFunciones.join("");
                FuncionesAutoridad.innerHTML = displayFunciones;
        }


</script>
