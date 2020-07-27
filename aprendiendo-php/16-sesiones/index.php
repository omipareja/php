<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//iniciar sesion

session_start();

//variable local
$variable_normal = "soy una cadena de texto";

// variable de sessionn

$_SESSION['variable_persistente'] = "Hola soy una sesion activa";

echo $variable_normal ."<br>";
echo $_SESSION['variable_persistente'];