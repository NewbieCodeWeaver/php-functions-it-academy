<?php

$numeroUsuario = 20;


contar($numeroUsuario);


function contar($a) {

for ($i= 0; $i<= $a; $i++) {

    if ($i % 2 == 0) {

        echo $i;

                    }

    }


}

?>