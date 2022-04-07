<?php

/* 
Variables locales: son las que se definen dentro de una funcion y no pueden ser
 * usadas fuera de la funcion, solo estan disponibles dentro. A no ser que 
 * hagamos un return.

variables globales: las que se declaran fuera de una funcion y estan dentro y
 * fuera de las funciones
 */
/*
//variable global
$frase = " esto es una frase";

echo $frase;

function holaMundo() {
    global $frase;
    echo $frase;
    
    echo "<h1>$frase</h1>";
    
    $year = 2022;
    echo "<h1>$year</h1>";
    
    return $year;
}

holaMundo();
*/
//funciones variables

function buenosDias(){
    return "hola!, buenos dias :)";
}

function buenasTardes(){
    return "hola!, buenas tardes :)";
}

function buenasNoches(){
    return "hola!, buenas noches :)";
}

$horario = "Noches";

$miFuncion = "buenas".$horario;

echo "buenas".$horario;

?>