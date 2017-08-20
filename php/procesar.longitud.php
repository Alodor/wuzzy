<?php

$valor = $_POST['valor'];
$unidad1 = $_POST['from'];
$unidad2 = $_POST['to'];


if ($valor == "") {
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">Debe ingresar un valor</p>      
    </div>';
}


if (($unidad1 == "mm") && ($unidad2 == "mm")) {
    $resultado = $valor / 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mm = ' .$resultado. ' mm</p>      
    </div>';
}

if (($unidad1 == "mm") && ($unidad2 == "cm")) {
    $resultado = $valor / 10;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mm = ' .$resultado. ' cm</p>      
    </div>';
}

if (($unidad1 == "mm") && ($unidad2 == "m")) {
    $resultado = $valor / 1000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mm = ' .$resultado. ' m</p>      
    </div>';
}

if (($unidad1 == "mm") && ($unidad2 == "km")) {
    $resultado = $valor / 1000000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mm = ' .$resultado. ' km</p>      
    </div>';
}

if (($unidad1 == "mm") && ($unidad2 == "in")) {
    $resultado = $valor / 25.4;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mm = ' .$resultado. ' in</p>      
    </div>';
}

if (($unidad1 == "mm") && ($unidad2 == "ft")) {
    $resultado = $valor / 304.8;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mm = ' .$resultado. ' ft</p>      
    </div>';
}

if (($unidad1 == "mm") && ($unidad2 == "yd")) {
    $resultado = $valor / 914.4;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mm = ' .$resultado. ' yd</p>      
    </div>';
}

if (($unidad1 == "mm") && ($unidad2 == "mi")) {
    $resultado = $valor / 1609000.0;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mm = ' .$resultado. ' mi</p>      
    </div>';
}
/*********************************************************************************************/



if (($unidad1 == "cm") && ($unidad2 == "mm")) {
    $resultado = $valor * 10;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' cm = ' .$resultado. ' mm</p>      
    </div>';
}

if (($unidad1 == "cm") && ($unidad2 == "cm")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' cm = ' .$resultado. ' cm</p>      
    </div>';
}

if (($unidad1 == "cm") && ($unidad2 == "m")) {
    $resultado = $valor / 100;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' cm = ' .$resultado. ' m</p>      
    </div>';
}

if (($unidad1 == "cm") && ($unidad2 == "km")) {
    $resultado = $valor / 100000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' cm = ' .$resultado. ' km</p>      
    </div>';
}

if (($unidad1 == "cm") && ($unidad2 == "in")) {
    $resultado = $valor / 2.54;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' cm = ' .$resultado. ' in</p>      
    </div>';
}

if (($unidad1 == "cm") && ($unidad2 == "ft")) {
    $resultado = $valor / 30.48;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' cm = ' .$resultado. ' ft</p>      
    </div>';
}

if (($unidad1 == "cm") && ($unidad2 == "yd")) {
    $resultado = $valor / 91.44;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' cm = ' .$resultado. ' yd</p>      
    </div>';
}

if (($unidad1 == "cm") && ($unidad2 == "mi")) {
    $resultado = $valor / 160900.0;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' cm = ' .$resultado. ' mi</p>      
    </div>';
}
/*********************************************************************************************/



if (($unidad1 == "m") && ($unidad2 == "mm")) {
    $resultado = $valor * 1000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m = ' .$resultado. ' mm</p>      
    </div>';
}

if (($unidad1 == "m") && ($unidad2 == "cm")) {
    $resultado = $valor * 100;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m = ' .$resultado. ' cm</p>      
    </div>';
}

if (($unidad1 == "m") && ($unidad2 == "m")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m = ' .$resultado. ' m</p>      
    </div>';
}

if (($unidad1 == "m") && ($unidad2 == "km")) {
    $resultado = $valor / 1000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m = ' .$resultado. ' km</p>      
    </div>';
}

if (($unidad1 == "m") && ($unidad2 == "in")) {
    $resultado = $valor / 0.0254;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m = ' .$resultado. ' in</p>      
    </div>';
}

if (($unidad1 == "m") && ($unidad2 == "ft")) {
    $resultado = $valor / 0.3048;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m = ' .$resultado. ' ft</p>      
    </div>';
}

if (($unidad1 == "m") && ($unidad2 == "yd")) {
    $resultado = $valor / 0.9144;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m = ' .$resultado. ' yd</p>      
    </div>';
}

if (($unidad1 == "m") && ($unidad2 == "mi")) {
    $resultado = $valor / 1609;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m = ' .$resultado. ' mi</p>      
    </div>';
}
/*********************************************************************************************/



if (($unidad1 == "km") && ($unidad2 == "mm")) {
    $resultado = $valor * 1000000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' km = ' .$resultado. ' mm</p>      
    </div>';
}

if (($unidad1 == "km") && ($unidad2 == "cm")) {
    $resultado = $valor * 100000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' km = ' .$resultado. ' cm</p>      
    </div>';
}

if (($unidad1 == "km") && ($unidad2 == "m")) {
    $resultado = $valor * 1000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' km = ' .$resultado. ' m</p>      
    </div>';
}

if (($unidad1 == "km") && ($unidad2 == "km")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' km = ' .$resultado. ' km</p>      
    </div>';
}

if (($unidad1 == "km") && ($unidad2 == "in")) {
    $resultado = $valor / 0.0000254;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' km = ' .$resultado. ' in</p>      
    </div>';
}

if (($unidad1 == "km") && ($unidad2 == "ft")) {
    $resultado = $valor / 0.0003048;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' km = ' .$resultado. ' ft</p>      
    </div>';
}

if (($unidad1 == "km") && ($unidad2 == "yd")) {
    $resultado = $valor / 0.0009144;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' km = ' .$resultado. ' yd</p>      
    </div>';
}

if (($unidad1 == "km") && ($unidad2 == "mi")) {
    $resultado = $valor / 1.609;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' km = ' .$resultado. ' mi</p>      
    </div>';
}
/*********************************************************************************************/



if (($unidad1 == "in") && ($unidad2 == "mm")) {
    $resultado = $valor * 25.4;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' in = ' .$resultado. ' mm</p>      
    </div>';
}

if (($unidad1 == "in") && ($unidad2 == "cm")) {
    $resultado = $valor * 2.54;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' in = ' .$resultado. ' cm</p>      
    </div>';
}

if (($unidad1 == "in") && ($unidad2 == "m")) {
    $resultado = $valor * 0.0254;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' in = ' .$resultado. ' m</p>      
    </div>';
}

if (($unidad1 == "in") && ($unidad2 == "km")) {
    $resultado = $valor * 0.0000254;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' in = ' .$resultado. ' km</p>      
    </div>';
}

if (($unidad1 == "in") && ($unidad2 == "in")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' in = ' .$resultado. ' in</p>      
    </div>';
}

if (($unidad1 == "in") && ($unidad2 == "ft")) {
    $resultado = $valor * 0.0833333;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' in = ' .$resultado. ' ft</p>      
    </div>';
}

if (($unidad1 == "in") && ($unidad2 == "yd")) {
    $resultado = $valor * 0.0277778;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' in = ' .$resultado. ' yd</p>      
    </div>';
}

if (($unidad1 == "in") && ($unidad2 == "mi")) {
    $resultado = $valor * 0.000015783;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' in = ' .$resultado. ' mi</p>      
    </div>';
}
/*********************************************************************************************/



if (($unidad1 == "ft") && ($unidad2 == "mm")) {
    $resultado = $valor * 304.8;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ft = ' .$resultado. ' mm</p>      
    </div>';
}

if (($unidad1 == "ft") && ($unidad2 == "cm")) {
    $resultado = $valor * 30.48;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ft = ' .$resultado. ' cm</p>      
    </div>';
}

if (($unidad1 == "ft") && ($unidad2 == "m")) {
    $resultado = $valor * 0.3048;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ft = ' .$resultado. ' m</p>      
    </div>';
}

if (($unidad1 == "ft") && ($unidad2 == "km")) {
    $resultado = $valor * 0.0003048;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ft = ' .$resultado. ' km</p>      
    </div>';
}

if (($unidad1 == "ft") && ($unidad2 == "in")) {
    $resultado = $valor * 12;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ft = ' .$resultado. ' in</p>      
    </div>';
}

if (($unidad1 == "ft") && ($unidad2 == "ft")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ft = ' .$resultado. ' ft</p>      
    </div>';
}

if (($unidad1 == "ft") && ($unidad2 == "yd")) {
    $resultado = $valor * 0.333333;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ft = ' .$resultado. ' yd</p>      
    </div>';
}

if (($unidad1 == "ft") && ($unidad2 == "mi")) {
    $resultado = $valor * 0.000189394;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ft = ' .$resultado. ' mi</p>      
    </div>';
}
/*********************************************************************************************/



if (($unidad1 == "yd") && ($unidad2 == "mm")) {
    $resultado = $valor * 914.4;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' yd = ' .$resultado. ' mm</p>      
    </div>';
}

if (($unidad1 == "yd") && ($unidad2 == "cm")) {
    $resultado = $valor * 91.44;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' yd = ' .$resultado. ' cm</p>      
    </div>';
}

if (($unidad1 == "yd") && ($unidad2 == "m")) {
    $resultado = $valor * 0.9144;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' yd = ' .$resultado. ' m</p>      
    </div>';
}

if (($unidad1 == "yd") && ($unidad2 == "km")) {
    $resultado = $valor * 0.0009144;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' yd = ' .$resultado. ' km</p>      
    </div>';
}

if (($unidad1 == "yd") && ($unidad2 == "in")) {
    $resultado = $valor * 36;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' yd = ' .$resultado. ' in</p>      
    </div>';
}

if (($unidad1 == "yd") && ($unidad2 == "ft")) {
    $resultado = $valor * 3;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' yd = ' .$resultado. ' ft</p>      
    </div>';
}

if (($unidad1 == "yd") && ($unidad2 == "yd")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' yd = ' .$resultado. ' yd</p>      
    </div>';
}

if (($unidad1 == "yd") && ($unidad2 == "mi")) {
    $resultado = $valor * 0.000568182;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' yd = ' .$resultado. ' mi</p>      
    </div>';
}
/*********************************************************************************************/



if (($unidad1 == "mi") && ($unidad2 == "mm")) {
    $resultado = $valor * 1609000.0;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mi = ' .$resultado. ' mm</p>      
    </div>';
}

if (($unidad1 == "mi") && ($unidad2 == "cm")) {
    $resultado = $valor * 160934;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mi = ' .$resultado. ' cm</p>      
    </div>';
}

if (($unidad1 == "mi") && ($unidad2 == "m")) {
    $resultado = $valor * 1609.34;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mi = ' .$resultado. ' m</p>      
    </div>';
}

if (($unidad1 == "mi") && ($unidad2 == "km")) {
    $resultado = $valor * 1.60934;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mi = ' .$resultado. ' km</p>      
    </div>';
}

if (($unidad1 == "mi") && ($unidad2 == "in")) {
    $resultado = $valor * 63360;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mi = ' .$resultado. ' in</p>      
    </div>';
}

if (($unidad1 == "mi") && ($unidad2 == "ft")) {
    $resultado = $valor * 5280;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mi = ' .$resultado. ' ft</p>      
    </div>';
}

if (($unidad1 == "mi") && ($unidad2 == "yd")) {
    $resultado = $valor * 1760;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mi = ' .$resultado. ' yd</p>      
    </div>';
}

if (($unidad1 == "mi") && ($unidad2 == "mi")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' mi = ' .$resultado. ' mi</p>      
    </div>';
}