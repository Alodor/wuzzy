<?php

$valor = $_POST['valor'];
$unidad1 = $_POST['from'];
$unidad2 = $_POST['to'];


if ($valor == "") {
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">Debe ingresar un valor</p>      
    </div>';
}


if (($unidad1 == "mg") && ($unidad2 == "mg")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mg = ' .$resultado. ' mg</p>      
    </div>';
}

if (($unidad1 == "mg") && ($unidad2 == "g")) {
    $resultado = $valor * 0.001;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mg = ' .$resultado. ' g</p>      
    </div>';
}

if (($unidad1 == "mg") && ($unidad2 == "kg")) {
    $resultado = $valor * 0.000001;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mg = ' .$resultado. ' kg</p>      
    </div>';
}

if (($unidad1 == "mg") && ($unidad2 == "oz")) {
    $resultado = $valor * 0.000035274;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mg = ' .$resultado. ' oz</p>      
    </div>';
}

if (($unidad1 == "mg") && ($unidad2 == "lb")) {
    $resultado = $valor * 0.0000022046;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mg = ' .$resultado. ' lb</p>      
    </div>';
}

if (($unidad1 == "mg") && ($unidad2 == "t")) {
    $resultado = $valor * 0.000000001;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mg = ' .$resultado. ' t</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "g") && ($unidad2 == "mg")) {
    $resultado = $valor * 1000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' g = ' .$resultado. ' mg</p>      
    </div>';
}

if (($unidad1 == "g") && ($unidad2 == "g")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' g = ' .$resultado. ' g</p>      
    </div>';
}

if (($unidad1 == "g") && ($unidad2 == "kg")) {
    $resultado = $valor * 0.001;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' g = ' .$resultado. ' kg</p>      
    </div>';
}

if (($unidad1 == "g") && ($unidad2 == "oz")) {
    $resultado = $valor / 28.35;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' g = ' .$resultado. ' oz</p>      
    </div>';
}

if (($unidad1 == "g") && ($unidad2 == "lb")) {
    $resultado = $valor / 450;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' g = ' .$resultado. ' lb</p>      
    </div>';
}

if (($unidad1 == "g") && ($unidad2 == "t")) {
    $resultado = $valor / 1000000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' g = ' .$resultado. ' t</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "kg") && ($unidad2 == "mg")) {
    $resultado = $valor * 1000000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' kg = ' .$resultado. ' mg</p>      
    </div>';
}

if (($unidad1 == "kg") && ($unidad2 == "g")) {
    $resultado = $valor * 1000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' kg = ' .$resultado. ' g</p>      
    </div>';
}

if (($unidad1 == "kg") && ($unidad2 == "kg")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' kg = ' .$resultado. ' kg</p>      
    </div>';
}

if (($unidad1 == "kg") && ($unidad2 == "oz")) {
    $resultado = $valor / 0.02835;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' kg = ' .$resultado. ' oz</p>      
    </div>';
}

if (($unidad1 == "kg") && ($unidad2 == "lb")) {
    $resultado = $valor / 0.453;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' kg = ' .$resultado. ' lb</p>      
    </div>';
}

if (($unidad1 == "kg") && ($unidad2 == "t")) {
    $resultado = $valor / 1000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' kg = ' .$resultado. ' t</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "oz") && ($unidad2 == "mg")) {
    $resultado = $valor / 0.000035274;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' oz = ' .$resultado. ' mg</p>      
    </div>';
}

if (($unidad1 == "oz") && ($unidad2 == "g")) {
    $resultado = $valor / 0.035274;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' oz = ' .$resultado. ' g</p>      
    </div>';
}

if (($unidad1 == "oz") && ($unidad2 == "kg")) {
    $resultado = $valor / 35.274;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' oz = ' .$resultado. ' kg</p>      
    </div>';
}

if (($unidad1 == "oz") && ($unidad2 == "oz")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' oz = ' .$resultado. ' oz</p>      
    </div>';
}

if (($unidad1 == "oz") && ($unidad2 == "lb")) {
    $resultado = $valor * 0.062500;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' oz = ' .$resultado. ' lb</p>      
    </div>';
}

if (($unidad1 == "oz") && ($unidad2 == "t")) {
    $resultado = $valor / 35274;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' oz = ' .$resultado. ' t</p>      
    </div>';
}
/*********************************************************************************************/



if (($unidad1 == "lb") && ($unidad2 == "mg")) {
    $resultado = $valor / 0.0000022046;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' lb = ' .$resultado. ' mg</p>      
    </div>';
}

if (($unidad1 == "lb") && ($unidad2 == "g")) {
    $resultado = $valor / 0.0022046;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' lb = ' .$resultado. ' g</p>      
    </div>';
}

if (($unidad1 == "lb") && ($unidad2 == "kg")) {
    $resultado = $valor / 2.2046;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' lb = ' .$resultado. ' kg</p>      
    </div>';
}

if (($unidad1 == "lb") && ($unidad2 == "oz")) {
    $resultado = $valor * 16;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' lb = ' .$resultado. ' oz</p>      
    </div>';
}

if (($unidad1 == "lb") && ($unidad2 == "lb")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' lb = ' .$resultado. ' lb</p>      
    </div>';
}

if (($unidad1 == "lb") && ($unidad2 == "t")) {
    $resultado = $valor / 2204.6;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' lb = ' .$resultado. ' t</p>      
    </div>';
}
/*********************************************************************************************/



if (($unidad1 == "t") && ($unidad2 == "mg")) {
    $resultado = $valor / 0.000000001;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' t = ' .$resultado. ' mg</p>      
    </div>';
}

if (($unidad1 == "t") && ($unidad2 == "g")) {
    $resultado = $valor / 0.000001;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' t = ' .$resultado. ' g</p>      
    </div>';
}

if (($unidad1 == "t") && ($unidad2 == "kg")) {
    $resultado = $valor / 0.001;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' t = ' .$resultado. ' kg</p>      
    </div>';
}

if (($unidad1 == "t") && ($unidad2 == "oz")) {
    $resultado = $valor * 35274;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' t = ' .$resultado. ' oz</p>      
    </div>';
}

if (($unidad1 == "t") && ($unidad2 == "lb")) {
    $resultado = $valor * 2204.6;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' t = ' .$resultado. ' lb</p>      
    </div>';
}

if (($unidad1 == "t") && ($unidad2 == "t")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' t = ' .$resultado. ' t</p>      
    </div>';
}