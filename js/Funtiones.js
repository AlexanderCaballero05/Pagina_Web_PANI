mostrar(3,3);
function mostrar(a , b){
return a + b;
console.log(a + b);
}


resultado = mostrar(2,3);
console.log(resultado);

//funtion tipo expresion, asignandola a una variables
let sumar = function (a, b){ return a + b};
resultado = sumar (1, 3);
console.log(resultado);

//funtiones de tipo self invoking

(function(){
    console.log('ejecutando la fucion');
})();//esta funcion no puede ser reutilisable ya que no tiene un nombre

(function(a,b){
    console.log('ejecutando la funcion' + ' ' +(a + b));
})(2 ,3);//esta funcion no puede ser reutilisable ya que no tiene un nombre

//funciones como objetos dato: "las funciones y metodos son lo mismo"

//funciones tipo flecha
let sumarFunctionTipoFlecha = (a , b) => a + b;
resultado = sumarFunctionTipoFlecha(2,7);

console.log(resultado);

//que son los parametros y argumentos de las funciones
let suma = function (a,b){// (a , b) los parametros son la lista de valores que se dan al declarar la funcion
    console.log(arguments[0]); // (1 , 1) los argumetos son los valores que Yo doy al llamar la fucion
    console.log(arguments[1]);
    return a + b;
}
resultador = suma(1,1);
console.log(resultador);