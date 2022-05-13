<?php

$notaEstudiante = 10;
$gradoEstudiante = "";


calcularNota($notaEstudiante);


function calcularNota($a)
{

    if ($a >= 60) {

        $gradoEstudiante = "El grado del estudiante es Primera division";
    } else if ($a >= 45 && $a <= 59) {

        $gradoEstudiante = "El grado del estudiante es Segunda division";
    } else if ($a >= 33 && $a <= 44) {

        $gradoEstudiante = "El grado del estudiante es Segunda division";
    } else if ($a < 33) {

        $gradoEstudiante = "El estudiante ha reprobado";
    }

    echo $gradoEstudiante;
}


?>