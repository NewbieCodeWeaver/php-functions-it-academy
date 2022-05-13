<?php


isBitten();


function isBitten() {

    $morder = rand(1, 2);

    if ($morder == 1) {

$mordida = "true";

    } else {

        $mordida = "false";
    
}

echo $mordida;

}

?>