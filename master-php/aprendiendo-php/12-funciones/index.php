<?php

/*
Funciones: una funcion es un conjunto de instrucciones agrupadas bajo un nombre
 * concreto y que pueden reutilizarze solamente invocando a la funcion que 
 * queremos.
 * 
 * function nombreDeMiFunction(){
 *  //BLOQUE / CONJUNTO DE INSTRUCCIONES
 * }
 * 
 * nombreDeMiFunction($mi_parametro);
*/

/*
//Ejemplo
function muestraNombres(){
    echo "Stefan <br/>";
    echo "seed stun <br/>";
    echo "hau <br/>";
    echo "me aburro <br/>";
}

//Invocar funcion
muestraNombres();

//Ejemplo2
function tabla($numero){
    echo "<h3>Tabla de multiplicar del número: $numero</h3>";
    for($i =1;$i <= 10; $i++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br/>";
    }
}

if(isset($_GET['numero'])){
    
    tabla($_GET['numero']);
    
} else {
    echo "No hay numero para multiplicar";
}

for($i = 0; $i <= 10; $i++){
    tabla($i);
}
*/
//Ejercicio3

function calculadora($numero1,$numero2,$negrita = false) {
    //conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $divi = $numero1 / $numero2;
    $multi = $numero1 * $numero2;
    
    $cadena_texto = "";
    
    if($negrita != false){
        $cadena_texto.="<h1>";
    }
    
    $cadena_texto.= "Suma: $suma <br/>";
    $cadena_texto.= "Resta: $resta <br/>";
    $cadena_texto.= "Multiplicacion: $multi <br/>";
    $cadena_texto.= "Division: $divi <br/>";
    
    
    
    if($negrita != false){
        $cadena_texto.= "</h1>";
    }
    
    
    return $cadena_texto;
}
calculadora(10, 30, true);

function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function devuelveNombre($nombre, $apellidos) {
    $texto = getNombre($nombre)
            ."<br/>".
            getApellidos($apellidos);
    return $texto;
}

echo devuelveNombre("Stefan","liviu");

?>

