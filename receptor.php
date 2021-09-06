<?php 
$tam=$_POST['num'];
$numeros=array();
for ($i=0; $i < $tam; $i++) { 
    $numeros[$i]=rand(0,100);
    array_push($numeros,rand(0,100));
}
//for each
foreach ($numeros as $key) {
    echo $key.',  ';
}


function sumaVector($numeros){
    $sum=0;
    for ($i=0; $i <count($numeros) ; $i++) { 
            $sum+=$numeros[$i];
        }
    return $sum; 
}

function restaVector($numeros){
    $rest=0;
    for ($i=0; $i <count($numeros) ; $i++) { 
            $rest-=$numeros[$i];
        }
    return $rest;
    }

function promedioVector($numeros){
    $sum=0;
    for ($i=0; $i <count($numeros) ; $i++) { 
            $sum+=$numeros[$i];
        }
    return $sum/count($numeros); 
}

function multiplicaVector($numeros){
    $multi=0;
    for ($i=0; $i <count($numeros) ; $i++) { 
            $multi*=$numeros[$i];
        }
    return $multi;
    }

function numeroMayor($numeros){
  $mayor=0;
  foreach ($numeros as $i) {
    if ($i>$mayor)
     $mayor = $i;
  }
  return $mayor;
}

function numeroMenor($numeros){
  $menor=1000;
  foreach ($numeros as $i) {
    if ($i<$menor)
     $menor = $i;
  }
  return $menor;
}


// function divisionVector($vector){
//     $divi=0;
//     for ($i=0; $i <count($vector) ; $i++) { 
//             $divi/=$vector[$i];
//         }
//     return $divi;
//     }

    
// function medianaVector($vector){
//     $divi=0;
//     for ($i=0; $i <count($vector) ; $i++) { 
//             $divi%=$vector[$i];
//         }
//     return $divi;
//     }


// function mayorVector($vector){
//     $mayor=0;
//     for ($i=0; $i <count($vector) ; $i++) { 
//         }
//     }
    





// $vec=array();

// $vec2=[34,56,123,87,1];

// for ($i=0; $i < 10 ; $i++) { 
//     $vec[$i]=rand(0,100);
// }

// for ($i=0; $i <count($vec) ; $i++) { 
//     echo $vec[$i].', ';
// }

echo '<br><br> La suma de los numeros es es: <br> '.sumaVector($numeros);

echo '<br><br> La resta de los numeros es: <br>'.restaVector($numeros);

echo '<br><br> El promedio de los numeros es: <br>'.promedioVector($numeros);

echo '<br><br> La multiplicacion de los numeros es: <br>'.multiplicaVector($numeros);

echo '<br><br> El numero mayor es: <br>'.numeroMayor($numeros);

echo '<br><br> El numero menor es: <br>'.numeroMenor($numeros);


?>