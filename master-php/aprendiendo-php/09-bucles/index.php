<?php

/*BUCLE WHILE
Estructura de control que itera o repite la ejecucion de una serie instrucciones
tantas veces como sea necesario, en una base a una condicion.

while(condicion){
    bloque de instrucciones
    otra instruccion
}
*/

$numero = 0;
while($numero <= 100){
    echo $numero;
       
    if($numero != 100){
        echo ", ";
    }
    
    $numero++;
}


//Ejemplo 1

if (isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

echo "<h1>Tabla del multiplicar del número $numero</h1>";
$contador = 0;
while ($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}

echo "<hr/>";
/*
//DO WHILE
do{
    
}while ();
*/

$edad = 18;
$contador =1;
do{
    echo "Tienes acceso al local privado $contador <br/>";
    $contador++;
}while ($edad >= 18 && $contador <= 10);

for($contador = 1; $contador <= 10; $contador++){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
}

?>

