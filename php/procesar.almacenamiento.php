<?php

$valor = $_POST['valor'];
$unidad1 = $_POST['from'];
$unidad2 = $_POST['to'];


if ($valor == "") {
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">Debe ingresar un valor</p>      
    </div>';
}


if (($unidad1 == "bit") && ($unidad2 == "bit")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' bit = ' .$resultado. ' bit</p>      
    </div>';
}

if (($unidad1 == "bit") && ($unidad2 == "b")) {
    $resultado = $valor * 0.125;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' bit = ' .$resultado. ' B</p>      
    </div>';
}

if (($unidad1 == "bit") && ($unidad2 == "kb")) {
    $resultado = $valor * 0.000125;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' bit = ' .$resultado. ' KB</p>      
    </div>';
}

if (($unidad1 == "bit") && ($unidad2 == "mb")) {
    $resultado = $valor * 1.25e-7;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' bit = ' .$resultado. ' MB</p>      
    </div>';
}

if (($unidad1 == "bit") && ($unidad2 == "gb")) {
    $resultado = $valor * 1.25e-10;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' bit = ' .$resultado. ' GB</p>      
    </div>';
}

if (($unidad1 == "bit") && ($unidad2 == "tb")) {
    $resultado = $valor * 1.25e-13;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' bit = ' .$resultado. ' TB</p>      
    </div>';
}

if (($unidad1 == "bit") && ($unidad2 == "pb")) {
    $resultado = $valor * 1.25e-16;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' bit = ' .$resultado. ' PB</p>      
    </div>';
}

if (($unidad1 == "bit") && ($unidad2 == "eb")) {
    $resultado = $valor * 1.25e-19;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' bit = ' .$resultado. ' EB</p>      
    </div>';
}

if (($unidad1 == "bit") && ($unidad2 == "zb")) {
    $resultado = $valor * 1.25e-22;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' bit = ' .$resultado. ' ZB</p>      
    </div>';
}

if (($unidad1 == "bit") && ($unidad2 == "yb")) {
    $resultado = $valor * 1.25e-25;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' bit = ' .$resultado. ' YB</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "b") && ($unidad2 == "bit")) {
    $resultado = $valor * 8;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' B = ' .$resultado. ' bit</p>      
    </div>';
}

if (($unidad1 == "b") && ($unidad2 == "b")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' B = ' .$resultado. ' b</p>      
    </div>';
}

if (($unidad1 == "b") && ($unidad2 == "kb")) {
    $resultado = $valor * 0.0009765625;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' B = ' .$resultado. ' KB</p>      
    </div>';
}

if (($unidad1 == "b") && ($unidad2 == "mb")) {
    $resultado = $valor * 9.5367431640625e-7;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' B = ' .$resultado. ' MB</p>      
    </div>';
}

if (($unidad1 == "b") && ($unidad2 == "gb")) {
    $resultado = $valor * 9.3132257461548e-10;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' B = ' .$resultado. ' GB</p>      
    </div>';
}

if (($unidad1 == "b") && ($unidad2 == "tb")) {
    $resultado = $valor * 9.0949470177293e-13;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' B = ' .$resultado. ' TB</p>      
    </div>';
}

if (($unidad1 == "b") && ($unidad2 == "pb")) {
    $resultado = $valor * 8.8817841970013e-16;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' B = ' .$resultado. ' PB</p>      
    </div>';
}

if (($unidad1 == "b") && ($unidad2 == "eb")) {
    $resultado = $valor * 8.673617379884e-19;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' B = ' .$resultado. ' EB</p>      
    </div>';
}

if (($unidad1 == "b") && ($unidad2 == "zb")) {
    $resultado = $valor * 8.470329472543e-22;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' B = ' .$resultado. ' ZB</p>      
    </div>';
}

if (($unidad1 == "b") && ($unidad2 == "yb")) {
    $resultado = $valor * 8.2718061255303e-25;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' B = ' .$resultado. ' YB</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "kb") && ($unidad2 == "bit")) {
    $resultado = $valor * 8192;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' KB = ' .$resultado. ' bit</p>      
    </div>';
}

if (($unidad1 == "kb") && ($unidad2 == "b")) {
    $resultado = $valor * 1024;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' KB = ' .$resultado. ' B</p>      
    </div>';
}

if (($unidad1 == "kb") && ($unidad2 == "kb")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' KB = ' .$resultado. ' KB</p>      
    </div>';
}

if (($unidad1 == "kb") && ($unidad2 == "mb")) {
    $resultado = $valor * 0.0009765625;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' KB = ' .$resultado. ' MB</p>      
    </div>';
}

if (($unidad1 == "kb") && ($unidad2 == "gb")) {
    $resultado = $valor * 9.5367431640625e-7;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' KB = ' .$resultado. ' GB</p>      
    </div>';
}

if (($unidad1 == "kb") && ($unidad2 == "tb")) {
    $resultado = $valor * 9.3132257461548e-10;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' KB = ' .$resultado. ' TB</p>      
    </div>';
}

if (($unidad1 == "kb") && ($unidad2 == "pb")) {
    $resultado = $valor * 9.0949470177293e-13;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' KB = ' .$resultado. ' PB</p>      
    </div>';
}

if (($unidad1 == "kb") && ($unidad2 == "eb")) {
    $resultado = $valor * 8.8817841970013e-16;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' KB = ' .$resultado. ' EB</p>      
    </div>';
}

if (($unidad1 == "kb") && ($unidad2 == "zb")) {
    $resultado = $valor * 8.673617379884e-19;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' KB = ' .$resultado. ' ZB</p>      
    </div>';
}

if (($unidad1 == "kb") && ($unidad2 == "yb")) {
    $resultado = $valor * 8.470329472543e-22;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' KB = ' .$resultado. ' YB</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "mb") && ($unidad2 == "bit")) {
    $resultado = $valor * 8388608;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' MB = ' .$resultado. ' bit</p>      
    </div>';
}

if (($unidad1 == "mb") && ($unidad2 == "b")) {
    $resultado = $valor * 1048576;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' MB = ' .$resultado. ' B</p>      
    </div>';
}

if (($unidad1 == "mb") && ($unidad2 == "kb")) {
    $resultado = $valor * 1024;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' MB = ' .$resultado. ' KB</p>      
    </div>';
}

if (($unidad1 == "mb") && ($unidad2 == "mb")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' MB = ' .$resultado. ' MB</p>      
    </div>';
}

if (($unidad1 == "mb") && ($unidad2 == "gb")) {
    $resultado = $valor * 0.0009765625;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' MB = ' .$resultado. ' GB</p>      
    </div>';
}

if (($unidad1 == "mb") && ($unidad2 == "tb")) {
    $resultado = $valor * 9.5367431640625e-7;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' MB = ' .$resultado. ' TB</p>      
    </div>';
}

if (($unidad1 == "mb") && ($unidad2 == "pb")) {
    $resultado = $valor * 9.3132257461548e-10;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' MB = ' .$resultado. ' PB</p>      
    </div>';
}

if (($unidad1 == "mb") && ($unidad2 == "eb")) {
    $resultado = $valor * 9.0949470177293e-13;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' MB = ' .$resultado. ' EB</p>      
    </div>';
}

if (($unidad1 == "mb") && ($unidad2 == "zb")) {
    $resultado = $valor * 8.8817841970013e-16;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' MB = ' .$resultado. ' ZB</p>      
    </div>';
}

if (($unidad1 == "mb") && ($unidad2 == "yb")) {
    $resultado = $valor * 8.673617379884e-19;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' MB = ' .$resultado. ' YB</p>      
    </div>';
}
/*********************************************************************************************/



if (($unidad1 == "gb") && ($unidad2 == "bit")) {
    $resultado = $valor * 8589934592;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' GB = ' .$resultado. ' bit</p>      
    </div>';
}

if (($unidad1 == "gb") && ($unidad2 == "b")) {
    $resultado = $valor * 1073741824;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' GB = ' .$resultado. ' B</p>      
    </div>';
}

if (($unidad1 == "gb") && ($unidad2 == "kb")) {
    $resultado = $valor * 1048576;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' GB = ' .$resultado. ' KB</p>      
    </div>';
}

if (($unidad1 == "gb") && ($unidad2 == "mb")) {
    $resultado = $valor * 1024;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' GB = ' .$resultado. ' MB</p>      
    </div>';
}

if (($unidad1 == "gb") && ($unidad2 == "gb")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' GB = ' .$resultado. ' GB</p>      
    </div>';
}

if (($unidad1 == "gb") && ($unidad2 == "tb")) {
    $resultado = $valor * 0.0009765625;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' GB = ' .$resultado. ' TB</p>      
    </div>';
}

if (($unidad1 == "gb") && ($unidad2 == "pb")) {
    $resultado = $valor * 9.5367431640625e-7;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' GB = ' .$resultado. ' PB</p>      
    </div>';
}

if (($unidad1 == "gb") && ($unidad2 == "eb")) {
    $resultado = $valor * 9.3132257461548e-10;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' GB = ' .$resultado. ' EB</p>      
    </div>';
}

if (($unidad1 == "gb") && ($unidad2 == "zb")) {
    $resultado = $valor * 9.0949470177293e-13;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' GB = ' .$resultado. ' ZB</p>      
    </div>';
}

if (($unidad1 == "gb") && ($unidad2 == "yb")) {
    $resultado = $valor * 8.8817841970013e-16;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' GB = ' .$resultado. ' YB</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "tb") && ($unidad2 == "bit")) {
    $resultado = $valor * 8796093022208;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' TB = ' .$resultado. ' bit</p>      
    </div>';
}

if (($unidad1 == "tb") && ($unidad2 == "b")) {
    $resultado = $valor * 1099511627776;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' TB = ' .$resultado. ' B</p>      
    </div>';
}

if (($unidad1 == "tb") && ($unidad2 == "kb")) {
    $resultado = $valor * 1073741824;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' TB = ' .$resultado. ' KB</p>      
    </div>';
}

if (($unidad1 == "tb") && ($unidad2 == "mb")) {
    $resultado = $valor * 1048576;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' TB = ' .$resultado. ' MB</p>      
    </div>';
}

if (($unidad1 == "tb") && ($unidad2 == "gb")) {
    $resultado = $valor * 1024;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' TB = ' .$resultado. ' GB</p>      
    </div>';
}

if (($unidad1 == "tb") && ($unidad2 == "tb")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' TB = ' .$resultado. ' TB</p>      
    </div>';
}

if (($unidad1 == "tb") && ($unidad2 == "pb")) {
    $resultado = $valor * 0.0009765625;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' TB = ' .$resultado. ' PB</p>      
    </div>';
}

if (($unidad1 == "tb") && ($unidad2 == "eb")) {
    $resultado = $valor * 9.5367431640625e-7;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' TB = ' .$resultado. ' EB</p>      
    </div>';
}

if (($unidad1 == "tb") && ($unidad2 == "zb")) {
    $resultado = $valor * 9.3132257461548e-10;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' TB = ' .$resultado. ' ZB</p>      
    </div>';
}

if (($unidad1 == "tb") && ($unidad2 == "yb")) {
    $resultado = $valor * 9.0949470177293e-13;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' TB = ' .$resultado. ' YB</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "pb") && ($unidad2 == "bit")) {
    $resultado = $valor * 9007199254740992;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' PB = ' .$resultado. ' bit</p>      
    </div>';
}

if (($unidad1 == "pb") && ($unidad2 == "b")) {
    $resultado = $valor * 1125899906842624;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' PB = ' .$resultado. ' B</p>      
    </div>';
}

if (($unidad1 == "pb") && ($unidad2 == "kb")) {
    $resultado = $valor * 1099511627776;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' PB = ' .$resultado. ' KB</p>      
    </div>';
}

if (($unidad1 == "pb") && ($unidad2 == "mb")) {
    $resultado = $valor * 1073741824;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' PB = ' .$resultado. ' MB</p>      
    </div>';
}

if (($unidad1 == "pb") && ($unidad2 == "gb")) {
    $resultado = $valor * 1048576;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' PB = ' .$resultado. ' GB</p>      
    </div>';
}

if (($unidad1 == "pb") && ($unidad2 == "tb")) {
    $resultado = $valor * 1024;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' PB = ' .$resultado. ' TB</p>      
    </div>';
}

if (($unidad1 == "pb") && ($unidad2 == "pb")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' PB = ' .$resultado. ' PB</p>      
    </div>';
}

if (($unidad1 == "pb") && ($unidad2 == "eb")) {
    $resultado = $valor * 0.0009765625;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' PB = ' .$resultado. ' EB</p>      
    </div>';
}

if (($unidad1 == "pb") && ($unidad2 == "zb")) {
    $resultado = $valor * 9.5367431640625e-7;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' PB = ' .$resultado. ' ZB</p>      
    </div>';
}

if (($unidad1 == "pb") && ($unidad2 == "yb")) {
    $resultado = $valor * 9.3132257461548e-10;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' PB = ' .$resultado. ' YB</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "eb") && ($unidad2 == "bit")) {
    $resultado = $valor * 9.2233720368548e+18;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' EB = ' .$resultado. ' bit</p>      
    </div>';
}

if (($unidad1 == "eb") && ($unidad2 == "b")) {
    $resultado = $valor * 1.1529215046068e+18;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' EB = ' .$resultado. ' B</p>      
    </div>';
}

if (($unidad1 == "eb") && ($unidad2 == "kb")) {
    $resultado = $valor * 1.1258999068426e+15;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' EB = ' .$resultado. ' KB</p>      
    </div>';
}

if (($unidad1 == "eb") && ($unidad2 == "mb")) {
    $resultado = $valor * 1099511627776;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' EB = ' .$resultado. ' MB</p>      
    </div>';
}

if (($unidad1 == "eb") && ($unidad2 == "gb")) {
    $resultado = $valor * 1073741824;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' EB = ' .$resultado. ' GB</p>      
    </div>';
}

if (($unidad1 == "eb") && ($unidad2 == "tb")) {
    $resultado = $valor * 1048576;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' EB = ' .$resultado. ' TB</p>      
    </div>';
}

if (($unidad1 == "eb") && ($unidad2 == "pb")) {
    $resultado = $valor * 1024;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' EB = ' .$resultado. ' PB</p>      
    </div>';
}

if (($unidad1 == "eb") && ($unidad2 == "eb")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' EB = ' .$resultado. ' EB</p>      
    </div>';
}

if (($unidad1 == "eb") && ($unidad2 == "zb")) {
    $resultado = $valor * 0.0009765625;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' EB = ' .$resultado. ' ZB</p>      
    </div>';
}

if (($unidad1 == "eb") && ($unidad2 == "yb")) {
    $resultado = $valor * 9.5367431640625e-7;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' EB = ' .$resultado. ' YB</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "zb") && ($unidad2 == "bit")) {
    $resultado = $valor * 9.4447329657393e+21;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ZB = ' .$resultado. ' bit</p>      
    </div>';
}

if (($unidad1 == "zb") && ($unidad2 == "b")) {
    $resultado = $valor * 1.1805916207174e+21;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ZB = ' .$resultado. ' B</p>      
    </div>';
}

if (($unidad1 == "zb") && ($unidad2 == "kb")) {
    $resultado = $valor * 1.1529215046068e+18;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ZB = ' .$resultado. ' KB</p>      
    </div>';
}

if (($unidad1 == "zb") && ($unidad2 == "mb")) {
    $resultado = $valor * 1.1258999068426e+15;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ZB = ' .$resultado. ' MB</p>      
    </div>';
}

if (($unidad1 == "zb") && ($unidad2 == "gb")) {
    $resultado = $valor * 1099511627776;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ZB = ' .$resultado. ' GB</p>      
    </div>';
}

if (($unidad1 == "zb") && ($unidad2 == "tb")) {
    $resultado = $valor * 1073741824;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ZB = ' .$resultado. ' TB</p>      
    </div>';
}

if (($unidad1 == "zb") && ($unidad2 == "pb")) {
    $resultado = $valor * 1048576;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ZB = ' .$resultado. ' PB</p>      
    </div>';
}

if (($unidad1 == "zb") && ($unidad2 == "eb")) {
    $resultado = $valor * 1024;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ZB = ' .$resultado. ' EB</p>      
    </div>';
}

if (($unidad1 == "zb") && ($unidad2 == "zb")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ZB = ' .$resultado. ' ZB</p>      
    </div>';
}

if (($unidad1 == "zb") && ($unidad2 == "yb")) {
    $resultado = $valor * 0.0009765625;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' ZB = ' .$resultado. ' YB</p>      
    </div>';
}
/*********************************************************************************************/




if (($unidad1 == "yb") && ($unidad2 == "bit")) {
    $resultado = $valor * 9.671406556917e+24;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' YB = ' .$resultado. ' bit</p>      
    </div>';
}

if (($unidad1 == "yb") && ($unidad2 == "b")) {
    $resultado = $valor * 1.2089258196146e+24;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' YB = ' .$resultado. ' B</p>      
    </div>';
}

if (($unidad1 == "yb") && ($unidad2 == "kb")) {
    $resultado = $valor * 1.1805916207174e+21;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' YB = ' .$resultado. ' KB</p>      
    </div>';
}

if (($unidad1 == "yb") && ($unidad2 == "mb")) {
    $resultado = $valor * 1.1529215046068e+18;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' YB = ' .$resultado. ' MB</p>      
    </div>';
}

if (($unidad1 == "yb") && ($unidad2 == "gb")) {
    $resultado = $valor * 1.1258999068426e+15;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' YB = ' .$resultado. ' GB</p>      
    </div>';
}

if (($unidad1 == "yb") && ($unidad2 == "tb")) {
    $resultado = $valor * 1099511627776;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' YB = ' .$resultado. ' TB</p>      
    </div>';
}

if (($unidad1 == "yb") && ($unidad2 == "pb")) {
    $resultado = $valor * 1073741824;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' YB = ' .$resultado. ' PB</p>      
    </div>';
}

if (($unidad1 == "yb") && ($unidad2 == "eb")) {
    $resultado = $valor * 1048576;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' YB = ' .$resultado. ' EB</p>      
    </div>';
}

if (($unidad1 == "yb") && ($unidad2 == "zb")) {
    $resultado = $valor * 1024;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' YB = ' .$resultado. ' ZB</p>      
    </div>';
}

if (($unidad1 == "yb") && ($unidad2 == "yb")) {
    $resultado = $valor * 1;
    echo '<div class="card-panel grey lighten-4 z-depth-1 center">
    <p class="flow-text grey-text text-darken-4">' .$valor. ' YB = ' .$resultado. ' YB</p>      
    </div>';
}