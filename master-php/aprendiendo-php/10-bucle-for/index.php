<?php

/*
//FOR
for(expresion inicial, condicion, incremento contador){
    //bloque de instrucciones
}
*/

//Ejemplo
$resultado = 0;
for ($i = 0; $i <= 100; $i++){
    $resultado += $i;
    echo "<p>$resultado</p>";
}

echo "<h1>El resultado es: $resultado</h1>";

?>

