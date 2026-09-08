<?php

$texto="Argentina";

$variable_1=$texto;
$variable_2= &$texto;

echo $variable_2;

$texti="Juan Alpaca";

echo $variable_2;