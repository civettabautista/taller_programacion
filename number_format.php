<?php

$cantidad_1= 123123.42131;
$cantidad_2= 324324.24;

// number_format(cantidad,decimales,sep_decimal,sep_millar); //

$cantidad_1=number_format($cantidad_1,2);
echo $cantidad_1;