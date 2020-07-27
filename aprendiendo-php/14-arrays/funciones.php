<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$peliculas = array('goku','vegueta','gohan','trunks','goten','bulma');  

asort($peliculas); // organiza por orden alfavetico


//añadir elementos a un array

$peliculas [] = 'freezer';


//eliminar

array_pop($peliculas);
unset($peliculas[1]);


//aleatorio

$indice = array_rand($peliculas);
echo $peliculas[$indice];


// dar vuelta 

array_reverse($peliculas);
var_dump($peliculas);


// buscar

$resultado = array_search('bulma',$peliculas); 
var_dump($resultado);