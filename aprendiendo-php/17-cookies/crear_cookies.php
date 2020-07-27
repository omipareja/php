<?php


//crear cookie


//cookie basica
setcookie("micookie","valor de mi galleta");

//cookie con expiracion

setcookie("unyear","valor de mi cookie 365 dias",time()+(60*60*24*265));

?>

<a href="ver_cookies.php">Ver las galletitas </a>