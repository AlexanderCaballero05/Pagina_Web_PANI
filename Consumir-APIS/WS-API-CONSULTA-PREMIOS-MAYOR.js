

// document.getElementById("button-loteria-mayor").onclick = function(){
//     consumirDatos();
// }


// function consumirDatos(){
//     fetch("http://localhost:80/WS-API-CONSULTA-PREMIOS-MAYOR/ws_getPremiosPorSorteo")
//     .then((res) => res.json())
//     .then((data) => {
//         mostrarDatos(data);
//     })

//     function mostrarDatos(data)
//     {
//         document.getElementById("lista-premios").innerHTML = "";

//         let element = [];

//         for (let datos of data) {
//             element = [datos][0];
//             if (element.length) {
//                 let sorteo = element[0].sorteos_mayores_id;
//                 document.getElementById("sorteo").innerHTML += `
//                 <span>${sorteo}</span>
//                 `;
//              }
//             }
           

//             let contador = 0;
//             element.forEach(premio => {
//                  contador ++;
//             document.getElementById("lista-premios").innerHTML += `
//                     <li class="list-group-item">Premio #${contador}, el numero ganador es ${premio.numero_premiado_mayor}, con un monto de ${premio.pago_premio}</li>
//                     `
//             console.log(premio.id);
//         });

       
//     }
// }
