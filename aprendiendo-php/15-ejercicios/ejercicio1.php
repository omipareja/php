<?php

$numeros = array (7,8,5,4,6,3,2,1);

//funcion mostrar arry

function mostrarArray ($numeros){
   
    $resultado = "";
    
    foreach ($numeros as $numero) {
    
    $resultado .= $numero . "<br>";
    
}

return $resultado;
   
}


// recorrer y mostrar 

echo mostrarArray($numeros);

echo "<hr>";

// ordenar y mostrar

sort($numeros);
echo mostrarArray($numeros);


echo "<hr>";

//mostrar longitud

echo count($numeros);

echo "<hr>";

if (isset($_GET['numero'])){

$busqueda = $_GET['numero'];

$search = array_search($busqueda, $numeros);
if (!empty($search)){
    echo "<h3>El numero si existe , indice $search </h3>"; 
}else {
    echo "<h3>El numero no existe </h3>"; 
}
    



}
