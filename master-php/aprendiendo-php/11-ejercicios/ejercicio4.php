<?php

/*
Ejercicio 4 Recojer dos numeros por la url(parametros get)
 * operaciones basicas de un calculadora(suma,resta,division,multiplicador)
 * de esos numeros
*/


if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    echo "Suma: ".($numero1 + $numero2)."<br/>";
    echo "Resta: ".($numero1 - $numero2)."<br/>";
    echo "Division: ".($numero1 / $numero2)."<br/>";
    echo "Multiplicacion: ".($numero1 * $numero2)."<br/>";

}else{
    echo "<h1>Introduce correctamente los valores por la URL</h1>";
}
?>

