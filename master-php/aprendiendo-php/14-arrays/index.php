<?php

/*
ARRAYS
 Un array es una coleccion o un conjunto de datos/valores, bajo un unico
 nombre. Para acceder a esos valores podemos usar un indice numerico o 
 alfanumerico
*/

$pelicula = "Batman";
$peliculas = array('Batman','superman','Wonderwoman');
$cantantes = ['2pac','Drake','Lopez'];

//array asociativo
$personas = array(
    'nombre'=> 'Stefan',
    'apellidos'=> 'Robles',
    'web'=>'cobreska.es'
);
//Recorrer con FOR
echo "<h1>Listado de peliculas</h1>";

echo "<ul>";
for($i = 0; $i < count($peliculas);$i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";

//Recorrer con Foreach
echo "<h1>Listado de cantantes</h1>";

echo "<ul>";
foreach ($cantantes as $cantante){
    echo "<li>".$cantante."</li>";
}
echo "</ul>";
?>