<?php

//debugear
$nombre = "Stefan";       
var_dump($nombre);

//fechas
echo date('s-m-Y');
echo"<br/>";
echo time();

//matematicas
echo"<br/>";
echo "Raiz cuadrada de 10: ". sqrt(10);

echo"<br/>";
echo "Número aleatorio entre 10 y 40: ". rand(10,40);

echo"<br/>";
echo "Número pi: ". pi();

echo"<br/>";
echo "Redondear: ". round(7.891234);

//más funciones generales
echo"<br/>";
echo gettype($nombre);

//detectar tipos
echo"<br/>";
if(is_string($nombre)){
    echo "Esa variable es un string";
}

echo"<br/>";
if(!is_float($nombre)){
    echo "La variable nombre no es un numero con decimales";
}
//comprobar si existe algo
echo"<br/>";
if(isset($edad)){
    echo "La variable existe";
}else{
    echo "La variable no existe";
}
//limpiar espacios
echo"<br/>";
$frase = " mi contenido ";
echo $frase;
var_dump(trim($frase));

//eliminar variables / indices
$year = 2020;
unset($year);

//comprobar variables vacias
$texto = " ff ";

if(empty(trim($texto))){
    echo "La variable texto esta vacio";
}else{
    echo "La variable de texto TIENE CONTENIDO";
}

//contar caracteres de un string
echo"<br/>";
$cadena = "12345";
echo strlen($cadena);

echo"<br/>";

//encontrar caracteres
$frase = "La vida es bella";
echo strpos($frase, "vida");

//Reemplazar palabras de un string
$frase = str_replace("vida","moto",$frase);
echo $frase;
echo"<br/>";

echo strtolower($frase);
echo"<br/>";
echo strtoupper($frase);
?>
