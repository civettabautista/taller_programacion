<?php

$pc= ["SO", "SSD", "GPU", "RAM"];
foreach($pc as $componente){
    if($componente == "GPU"){
        continue;
    }
    echo $componente."<br>";
}