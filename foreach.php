<?php

$laptop=["Acer Nitro 5", "Windows 11", "AMD Ryzen 4600H", "SSD 256GB", "RAM 24GB"];
$frutas=[
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=>17,
    "Manzanas"=>9,
];
foreach($frutas as $clave => $valor){
    echo " Hay". $valor." ". $clave. "en el inventario."."<br>";
}