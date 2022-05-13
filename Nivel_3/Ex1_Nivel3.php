<?php

 encontrarPrimos(2,30);

 function encontrarPrimos($a,$b) {

$arrayNumeros = array(); // creamos el array

for ($i = $a; $i <= $b; $i++) {


    array_push($arrayNumeros, $i); // incluimos los números comprendidos entre $a y $b

}


for ($i = $a; $i <= $b; $i++) { 

    for ($j = 2; $j <= 10; $j++) {

        $multiplos = ($i * $j);

        unset($arrayNumeros[($multiplos - 2)]); // excluimos del array los multiplos de los numeros enteros


    }

} print_r($arrayNumeros);} // mostramos los elementos restantes del array (numeros primos)
