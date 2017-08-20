<?php

$valor = $_POST['valor'];
$unidad1 = $_POST['from'];
$unidad2 = $_POST['to'];


if ($valor == "") {
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">Debe ingresar un valor</p>      
    </div>';
}


if (($unidad1 == "ml") && ($unidad2 == "ml")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ml = ' .$resultado. ' ml</p>      
    </div>';
}

if (($unidad1 == "ml") && ($unidad2 == "l")) {
    $resultado = $valor * 0.001;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ml = ' .$resultado. ' l</p>      
    </div>';
}

if (($unidad1 == "ml") && ($unidad2 == "m3")) {
    $resultado = $valor * 0.000001;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ml = ' .$resultado. ' m3</p>      
    </div>';
}

if (($unidad1 == "ml") && ($unidad2 == "gal")) {
    $resultado = $valor * 0.00037854;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ml = ' .$resultado. ' gal</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "l") && ($unidad2 == "ml")) {
    $resultado = $valor * 1000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' l = ' .$resultado. ' ml</p>      
    </div>';
}

if (($unidad1 == "l") && ($unidad2 == "l")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' l = ' .$resultado. ' l</p>      
    </div>';
}

if (($unidad1 == "l") && ($unidad2 == "m3")) {
    $resultado = $valor * 0.001;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' l = ' .$resultado. ' m3</p>      
    </div>';
}

if (($unidad1 == "l") && ($unidad2 == "gal")) {
    $resultado = $valor * 0.26417288;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' l = ' .$resultado. ' gal</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "m3") && ($unidad2 == "ml")) {
    $resultado = $valor * 1000000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m3 = ' .$resultado. ' ml</p>      
    </div>';
}

if (($unidad1 == "m3") && ($unidad2 == "l")) {
    $resultado = $valor * 1000;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m3 = ' .$resultado. ' l</p>      
    </div>';
}

if (($unidad1 == "m3") && ($unidad2 == "m3")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m3 = ' .$resultado. ' m3</p>      
    </div>';
}

if (($unidad1 == "m3") && ($unidad2 == "gal")) {
    $resultado = $valor * 264.172874729;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' m3 = ' .$resultado. ' gal</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "gal") && ($unidad2 == "ml")) {
    $resultado = $valor * 3785.41;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' gal = ' .$resultado. ' ml</p>      
    </div>';
}

if (($unidad1 == "gal") && ($unidad2 == "l")) {
    $resultado = $valor * 3.7854;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' gal = ' .$resultado. ' l</p>      
    </div>';
}

if (($unidad1 == "gal") && ($unidad2 == "m3")) {
    $resultado = $valor * 0.00378541;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' gal = ' .$resultado. ' m3</p>      
    </div>';
}

if (($unidad1 == "gal") && ($unidad2 == "gal")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' gal = ' .$resultado. ' gal</p>      
    </div>';
}