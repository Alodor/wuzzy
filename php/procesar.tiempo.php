<?php

$valor = $_POST['valor'];
$unidad1 = $_POST['from'];
$unidad2 = $_POST['to'];


if ($valor == "") {
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">Debe ingresar un valor</p>      
    </div>';
}


if (($unidad1 == "ns") && ($unidad2 == "ns")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ns = ' .$resultado. ' ns</p>      
    </div>';
}

if (($unidad1 == "ns") && ($unidad2 == "ms")) {
    $resultado = $valor * 0.000001;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ns = ' .$resultado. ' ms</p>      
    </div>';
}

if (($unidad1 == "ns") && ($unidad2 == "s")) {
    $resultado = $valor * 0.000000001;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ns = ' .$resultado. ' s</p>      
    </div>';
}

if (($unidad1 == "ns") && ($unidad2 == "m")) {
    $resultado = $valor * 0.000000000016667;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ns = ' .$resultado. ' m</p>      
    </div>';
}

if (($unidad1 == "ns") && ($unidad2 == "h")) {
    $resultado = $valor * 0.00000000000027778;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ns = ' .$resultado. ' h</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "ms") && ($unidad2 == "ns")) {
    $resultado = $valor * 1000000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ms = ' .$resultado. ' ns</p>      
    </div>';
}

if (($unidad1 == "ms") && ($unidad2 == "ms")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ms = ' .$resultado. ' ms</p>      
    </div>';
}

if (($unidad1 == "ms") && ($unidad2 == "s")) {
    $resultado = $valor * 0.001;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ms = ' .$resultado. ' s</p>      
    </div>';
}

if (($unidad1 == "ms") && ($unidad2 == "m")) {
    $resultado = $valor * 0.000016667;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ms = ' .$resultado. ' m</p>      
    </div>';
}

if (($unidad1 == "ms") && ($unidad2 == "h")) {
    $resultado = $valor * 0.00000027778;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ms = ' .$resultado. ' h</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "s") && ($unidad2 == "ns")) {
    $resultado = $valor * 1000000000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' s = ' .$resultado. ' ns</p>      
    </div>';
}

if (($unidad1 == "s") && ($unidad2 == "ms")) {
    $resultado = $valor * 1000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' s = ' .$resultado. ' ms</p>      
    </div>';
}

if (($unidad1 == "s") && ($unidad2 == "s")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' s = ' .$resultado. ' s</p>      
    </div>';
}

if (($unidad1 == "s") && ($unidad2 == "m")) {
    $resultado = $valor * 0.0166667;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' s = ' .$resultado. ' m</p>      
    </div>';
}

if (($unidad1 == "s") && ($unidad2 == "h")) {
    $resultado = $valor * 0.000277778;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' s = ' .$resultado. ' h</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "m") && ($unidad2 == "ns")) {
    $resultado = $valor * 60000000000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m = ' .$resultado. ' ns</p>      
    </div>';
}

if (($unidad1 == "m") && ($unidad2 == "ms")) {
    $resultado = $valor * 60000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m = ' .$resultado. ' ms</p>      
    </div>';
}

if (($unidad1 == "m") && ($unidad2 == "s")) {
    $resultado = $valor * 60;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m = ' .$resultado. ' s</p>      
    </div>';
}

if (($unidad1 == "m") && ($unidad2 == "m")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m = ' .$resultado. ' m</p>      
    </div>';
}

if (($unidad1 == "m") && ($unidad2 == "h")) {
    $resultado = $valor * 0.0166667;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m = ' .$resultado. ' h</p>      
    </div>';
}
/*********************************************************************************************/



if (($unidad1 == "h") && ($unidad2 == "ns")) {
    $resultado = $valor * 3.6e+12;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' h = ' .$resultado. ' ns</p>      
    </div>';
}

if (($unidad1 == "h") && ($unidad2 == "ms")) {
    $resultado = $valor * 3.6e+6;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' h = ' .$resultado. ' ms</p>      
    </div>';
}

if (($unidad1 == "h") && ($unidad2 == "s")) {
    $resultado = $valor * 3600;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' h = ' .$resultado. ' s</p>      
    </div>';
}

if (($unidad1 == "h") && ($unidad2 == "m")) {
    $resultado = $valor * 60;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' h = ' .$resultado. ' m</p>      
    </div>';
}

if (($unidad1 == "h") && ($unidad2 == "h")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' h = ' .$resultado. ' h</p>      
    </div>';
}