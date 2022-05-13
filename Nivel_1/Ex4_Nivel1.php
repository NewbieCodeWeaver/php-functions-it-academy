<?php

 // $numeroUsuario = 50;
 $numeroPorDefecto = 20;

if (isset($numeroUsuario) == true) { 

contar($numeroUsuario);

} else {

contar($numeroPorDefecto);  }



function contar($a) {

for ($i= 0; $i<= $a; $i++) {

    if ($i % 2 == 0) {

        echo $i;

                    }

    }


}

?>