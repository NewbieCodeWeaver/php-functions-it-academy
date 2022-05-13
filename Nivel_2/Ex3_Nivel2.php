<?php 


$cantidadChocolates = 3;
$cantidadChicles = 2;
$cantidadCaramelos = 3;
$total;


function hayarCosteChocolates($cantidadChocolates) {

    $costeChocolates =  ($cantidadChocolates * 1);

    return  $costeChocolates;

}

function hayarCoteChicles($cantidadChicles) {

    $costeChicles = ($cantidadChicles * 0.50);

    return  $costeChicles;

}


function hayarCosteCaramelos($cantidadCaramelos) {


$costeCaramelos = ($cantidadCaramelos * 1.50);

return  $costeCaramelos;

}

 
echo $total = (hayarCosteChocolates($cantidadChocolates) + hayarCoteChicles($cantidadChicles) + hayarCosteCaramelos($cantidadCaramelos));


