<?php



define('nombre', 'Juan sanchez');
define('web','juan.com');

echo '<h1>'. nombre . '</h1>';
echo '<h1>'. web . '</h1>';


// constantes pre definidas

echo PHP_OS . '<br>' ;
echo PHP_VERSION . '<br>';

$X =1;
$y = 2;

echo 'suma ' . ($X + $y);
?>