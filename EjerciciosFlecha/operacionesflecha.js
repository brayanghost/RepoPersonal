//var x=prompt('Ingrese un número');
//document.write(x+" al cuadrado es"+(x*x));

var vec1 = [];
var vec = new Array();
// console.log(vec.length); //cantidad de elementos que tiene un arreglo
vec.push(100); //insertar un dato en el arreglo
// console.log(vec.length);
vec.push("hola");
// console.log(vec.length);

//var tam=prompt('Cuantos datos quiere almacenar');
// for (let i = 0; i < tam; i++) {
//     vec1.push(Math.round(Math.random()*100));
//     //vec[i]=Math.round(Math.random()*100);
// }

vec = new Array();
llenarVector(vec, 5);
console.log(vec);
// console.log("......" + vec.join());

console.log(sumaPares(vec));
console.log(sumaVector(vec));
console.log(restaVector(vec));
console.log(promedioVector(vec));
console.log(mayorVector(vec));
console.log(menorVector(vec));



//hoisting
function llenarVector(vector, tam) {
  for (let i = 0; i < tam; i++) {
    vector.push(Math.round(Math.random() * 100));
  }
  return vector;
}

var llenar = (vector, tam) => {
  for (let i = 0; i < tam; i++) {
    vector.push(Math.round(Math.random() * 100));
  }
  return vector;
}
// v=new Array();

// console.log(llenar(v,7));


function sumaPares(vector) {
  suma = 0;
  for (let i = 0; i < vector.length; i++) {
    if (vector[i] % 2 == 0) {
      suma += vector[i];
    }
  }
  return suma;
}


function sumaVector(vector) {
    sumas = 0;
    for (let i = 0; i < vector.length; i++) {
      
        sumas = sumas + vector[i];
    }
    return sumas;
  }



function restaVector(vector) {
    resta = 0;
    for (let i = 0; i < vector.length; i++) {
      
        resta = resta - vector[i];
    }
    return resta;
  }


function promedioVector(vector){
    sumaprom=0;
    for (let i=0; i < vector.length ; i++) { 
        sumaprom+=vector[i];
    }
    var promedio = sumaprom / vector.length;

    return promedio;
 }


function mayorVector(vector){
    mayor=0;
    for (let i=0; i < vector.length ; i++) { 
        if (vector[i]>mayor) 
        mayor=vector[i];{
        }
    }

    return mayor;
 }

 function menorVector(vector){
    menor=10000;
    for (let i=0; i < vector.length ; i++) { 
        if (vector[i]<menor) 
        menor=vector[i];{
        }
    }

    return menor;
 }

