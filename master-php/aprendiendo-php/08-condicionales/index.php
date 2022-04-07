<?php

/*
//Condicional if
if(condicion){
 instrucciones
 }else{
 otras instrucciones
 }

//Operadeores de comparacion
== igual
=== identico
!= diferente
<> diferente
!== no identico
< menor que
> mayor que
<= menor igual que
>= mayor o igual que

// OPERADORES LOGICOS
&& AND Y 
|| OR O
! NOT NO
and, or

*/

//Ejemplo 1
$color = "verde";
if($color == "rojo"){
    echo "El color es rojo";
} else {
    echo "el color NO es rojo";    
}

echo "<br/>";

//Ejemplo 2
$year = 2022;

if($year != 2019){
    echo "Estamos en un año diferente a 2022";
} else {
    echo " estamos 2022";
}

//Ejemplo3

$edad = 42;
$mayoria_edad = 18;
$nombre = "Stefan Liviu Goran";
$ciudad = "Barcelona";
$continente = "Europa";

if($edad >= 18){
    echo "<h1>$nombre es mayor de edad</h1>";
    
    if($continente == "Europa"){
    echo "<h2>Y es $ciudad</h2>";
    } else {
        echo "No es Europeo";
    }
} else {
    echo "<h2>$nombre NO es mayor de edad</h2>";
}

echo "<br/>";

//Ejemplo 4
$dia = 3;
/*
if($dia == 1){
    echo "Es lunes";
} else {
    if($dia == 2){
        echo "Es martes";
    } else {
        if($dia == 3){
            echo "Es miercoles";
        } else {
            if($dia == 4){
                echo "Es jueves";
            } else {
                if($dia == 5){
                    echo "Es viernes";
                } else {
                    echo "Es fin de semana";
                }
            }
        }
    }
}
*/

if($dia == 1){
    echo "LUNES";
}elseif ($dia == 2) {
    echo "Martes";
}elseif ($dia == 3) {
    echo "Miercoles";
}elseif ($dia == 4) {
    echo "Jueves";
}elseif ($dia == 5) {
    echo "VIERNES";
}else{
    echo "Es fin de semana";
}

echo "<br/>";

//Ejemplo 5

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "ESTA EN EDAD DE TRABAJAR";
} else {
    echo "NO PUEDE TRABAJAR";
}

echo "<br/>";

//Switch
$dia = 4;

switch ($dia){
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "MIERCOLES";
        break;
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    default:
        echo "Es fin de semana";
}

echo "<br/>";

$pais = "Mexico";
if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
    echo "En este pais se habla Español";
}else{
    
}

//GOTO
goto marca;

echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

marca:
echo "<h1>Me he saltado 4 echos</h1>";

?>

