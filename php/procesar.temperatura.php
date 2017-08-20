<?php

$valor = $_POST['valor'];
$unidad1 = $_POST['from'];
$unidad2 = $_POST['to'];


if ($valor == "") {
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">Debe ingresar un valor</p>      
    </div>';
}


if (($unidad1 == "c") && ($unidad2 == "c")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' °C = ' .$resultado. ' °C</p>      
    </div>';
}

if (($unidad1 == "c") && ($unidad2 == "f")) {
    $resultado = ($valor * 1.8) + 32;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' °C = ' .$resultado. ' °F</p>      
    </div>';
}

if (($unidad1 == "c") && ($unidad2 == "k")) {
    $resultado = $valor + 273.15;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' °C = ' .$resultado. ' °K</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "f") && ($unidad2 == "c")) {
    $resultado = ($valor - 32) * 0.555555556;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' °F = ' .$resultado. ' °C</p>      
    </div>';
}

if (($unidad1 == "f") && ($unidad2 == "f")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' °F = ' .$resultado. ' °F</p>      
    </div>';
}

if (($unidad1 == "f") && ($unidad2 == "k")) {
    $resultado = (($valor - 32) / 1.8000) + 273.15;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' °F = ' .$resultado. ' °K</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "k") && ($unidad2 == "c")) {
    $resultado = $valor - 273.15;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' °K = ' .$resultado. ' °C</p>      
    </div>';
}

if (($unidad1 == "k") && ($unidad2 == "f")) {
    $resultado = (($valor - 273.15) * 1.8000) + 32.00;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' °K = ' .$resultado. ' °F</p>      
    </div>';
}

if (($unidad1 == "k") && ($unidad2 == "k")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' °K = ' .$resultado. ' °K</p>      
    </div>';
}