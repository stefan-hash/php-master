<?php

/* 
Ejercicio 5 hacer un programa que muestre todos los numeros entre dos numeros
 * que nos lleguen por una URL($_GET)
*/


if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
while($numero1 <= $numero2){
    echo $numero1;
       
    if($numero1 != $numero2){
        echo ", ";
    }
    
    $numero1++;
}

}else{
    echo "<h1>Introduce correctamente los valores por la URL</h1>";
}


?>
