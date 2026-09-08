<?php

function promedio_alumnos($nota1, $nota2, $nota3){
    $promedio=($nota1 + $nota2 + $nota3)/3;
    return $promedio;
}

$promedio=promedio_alumnos(7,8,7);
echo "Promedio de los alumnos es de ". $promedio . "<br>";