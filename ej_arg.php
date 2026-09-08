<?php   

// $equipo_1 = "Argentina"
// $equipo_2 = "Algeria"
// $equipo_3 = "Austria"
// $equipo_4 = "Jordania"
$puntos_arg = 0;
$puntos_alg = 0;
$puntos_aus = 0;
$puntos_jor = 0;

$partidos_arg=array("4","3","2");
$partidos_alg=array("1","3","0");
$partidos_aus=array("1","2","1");
$partidos_jor=array("0","0","1");

$grupoJ=array("Argentina","Argelia","Austria","jordania");


// partidos Argentina
if ($partidos_arg[0]>$partidos_alg[0]) {
    $puntos_arg = $puntos_arg + 3;
    echo "Gano Argentina", "<br>";
}
else {
    $puntos_alg = $puntos_alg + 3;
    echo "Gano Argelia", "<br>";
};

if ($partidos_arg[1]>$partidos_aus[1]) {
    $puntos_arg = $puntos_arg + 3;
    echo "Gano Argentina", "<br>";
}
else {
    $puntos_aus = $puntos_aus + 3;
    echo "Gano Austria", "<br>";
};

if ($partidos_arg[2]>$partidos_jor[2]) {
    $puntos_arg = $puntos_arg + 3;
    echo "Gano Argentina", "<br>";
}
else {
    $puntos_jor = $puntos_jor + 3;
    echo "Gano Jordania", "<br>";
};


// partidos algeria
if ($partidos_alg[1]>$partidos_jor[1]) {
    $puntos_alg = $puntos_alg + 3;
    echo "Gano Argelia", "<br>";
}
else {
    $puntos_jor = $puntos_jor + 3;
    echo "Gano Jordania", "<br>";
};

if ($partidos_alg[2]>$partidos_aus[2]) {
    $puntos_alg = $puntos_alg + 3;
    echo "Gano Argelia", "<br>";
}
else {
    $puntos_aus = $puntos_aus + 3;
    echo "Gano Austria", "<br>";
};

if ($partidos_aus[0]>$partidos_jor[0]) {
    $puntos_aus = $puntos_aus + 3;
    echo "Gano Austria", "<br>";
}
else {
    $puntos_jor = $puntos_jor + 3;
    echo "Gano Jordania", "<br>";
};

// pasa o no

if ($puntos_arg > $puntos_alg or $puntos_aus or $puntos_jor) {
    echo "Argentina pasa a 16° con ", $puntos_arg, "<br>";
}
else {
    echo "Argentina no pasa a 16° con ", $puntos_arg, "<br>";
};
if ($puntos_alg > $puntos_arg or $puntos_aus or $puntos_jor) {
    echo "Argelia pasa a 16° con ", $puntos_alg, "<br>";
}
else {
    echo "Argelia no pasa a 16° con ", $puntos_alg, "<br>";
};
if ($puntos_aus > $puntos_alg or $puntos_arg or $puntos_jor) {
    echo "Austria pasa a 16° con ", $puntos_aus, "<br>";
}
else {
    echo "Austria no pasa a 16° con ", $puntos_aus, "<br>";
};
if ($puntos_jor > $puntos_alg or $puntos_arg or $puntos_aus) {
    echo "Jordania pasa a 16° con ", $puntos_jor, "<br>";
}
else {
    echo "Jordania no pasa a 16° con ", $puntos_jor, "<br>";
};