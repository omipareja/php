<?php


/*
 * crear arrAY con el contenido de la tabla
 * Accion Aventura  Deporte
 * GTA    Assassin  FIFA  
 * COD    CRASH     PES
 * PUG    GOD       MOTO GP  
 * 
 */

$tabla = array (
   "Accion" => array ( "GTA","COD","PUG"),
    "Aventura" => array ("Assassin", "Crash","GOD"),
    "Deporte" => array ("FIFA","PES","MOTO GP")
);


$categorias = array_keys($tabla);
//var_dump($categorias)
?>

<table border ="1">
    
    <?php include_once 'ejercicio4/encabezados.php'; ?>
    
    <tr>
        <?php include_once 'ejercicio4/primera.php'; ?>
    </tr>
    <tr>
        <?php include_once 'ejercicio4/segunda.php'; ?>
        
    </tr>
    <tr>
        <?php include_once 'ejercicio4/tercera.php'; ?>
        
    </tr>
</table>