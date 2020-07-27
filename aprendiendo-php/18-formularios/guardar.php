<?php

if(isset($_POST['texto']) && isset($_GET['descripcion'])){
    echo $_POST['texto'] ."<br>";
    echo $_POST['descripcion'];
}else {
    echo "no existen";
}
