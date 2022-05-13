<?php

$duracionLlamada = 4;


costeLlamada($duracionLlamada);


function costeLlamada($duracionLlamada) {

if ($duracionLlamada < 3) {

$costeLlamada = 10;

} else {

$costeLlamada = 10 + (($duracionLlamada - 3) * 5);

}

echo "La cantidad total a pagar son " . $costeLlamada . " céntimos.";


}

?>