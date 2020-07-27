<?php

$peliculas = array('goku','vegueta','gohan','trunks','goten','bulma');
$onepiece = ['luffy','drake','zoro'];

$personas = array ( //array asociativo
  'nombre'  => 'Juan',
  'apellido' => 'sanchez'

);

echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++){
    
    echo "<li>" . $peliculas[$i] . "</li>";
}
echo "</ul>";
echo "<hr>";

echo "<ul>";
foreach ($onepiece as $cantante ) {
    echo "<li>" . $cantante . "</li>";
}

echo "</ul>";

// multicidemencional

$contactos = array (
    array (
        
        'nombre' => 'antonio',
        'email' => 'antonio.com'
        
    ),
    
    array (
        
        'nombre' => 'luis',
        'email' => 'luis.com'
        
    ),
    
    array (
        
        'nombre' => 'juan',
        'email' => 'juan.com'
        
    ),
    
);


echo $contactos[1]['nombre'];


foreach ($contactos as $key => $contacto) {
    
    var_dump($contacto['nombre']);
    
}

