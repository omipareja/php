<?php

if (isset($_GET['numero1']) &&  isset($_GET['numero2']) ){
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    echo " suma :" . ($numero1 + $numero2);
}else {
    echo "no existe";
}