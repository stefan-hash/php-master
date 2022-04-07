<?php

/*
Ejercico 6, imprimir por pantalla una tabla de html con las tablas de  
 *multiplicar del 1 al 10

*/

echo "<table border = '1'> <tr>";//inicio de la tabla

echo "<tr>";//fila 1 de celda

for($cabecera = 1; $cabecera <= 10; $cabecera++){
    echo "<td>Tabla del $cabecera</td>";
}
echo "</tr>";//ciere de la fila 1


echo "<tr>";//fila 2 de celda

for($i = 1; $i <= 10; $i++){
    echo "<td>";
    
    for($x = 1; $x <= 10; $x++){
        echo "$i x $x = ".($i*$x)."<br/>";
    }
    echo "</td>";
}

echo "</tr>";//ciere de la fila 2

echo "</table>";


?>