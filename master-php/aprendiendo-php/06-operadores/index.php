<?php

//Operadores aritmeticos
$numero1 = 55;
$numero2 = 33;

echo 'Suma: '.($numero1+$numero2).'<br/>';
echo 'Resta: '.($numero1-$numero2).'<br/>';
echo 'Multiplicacion: '.($numero1*$numero2).'<br/>';
echo 'Division: '.($numero1/$numero2).'<br/>';
echo 'Resto: '.($numero1%$numero2);

//Operadores incremento y decremento
$year = 2022;

//Incremento
$year++;

//Decremento
$year--;

//Pre-incremento
++$year;

//Pre-decremento
--$year;

echo "<h1>$year</h1>";


//Operadores de asignacion
$edad = 25;

echo $edad.'<br/>';

//$edad = $edad + 5;
echo ($edad+=5);


?>

