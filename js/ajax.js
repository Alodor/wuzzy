// Unidades de Longitud
$("#longitud").submit(function(e){
    e.preventDefault();

    $.ajax({
        type: 'post',
        url: 'php/procesar.longitud.php',
        data: $(this).serialize(),
        success: function(data){
            $("#respuesta").slideDown();
            $("#respuesta").html(data);
        }
    });
    return false;
});


// Unidades de Masa
$("#masa").submit(function(e){
    e.preventDefault();

    $.ajax({
        type: 'post',
        url: 'php/procesar.masa.php',
        data: $(this).serialize(),
        success: function(data){
            $("#respuesta").slideDown();
            $("#respuesta").html(data);
        }
    });
    return false;
});


// Unidades de Volumen
$("#volumen").submit(function(e){
    e.preventDefault();

    $.ajax({
        type: 'post',
        url: 'php/procesar.volumen.php',
        data: $(this).serialize(),
        success: function(data){
            $("#respuesta").slideDown();
            $("#respuesta").html(data);
        }
    });
    return false;
});


// Unidades de Temperatura
$("#temperatura").submit(function(e){
    e.preventDefault();

    $.ajax({
        type: 'post',
        url: 'php/procesar.temperatura.php',
        data: $(this).serialize(),
        success: function(data){
            $("#respuesta").slideDown();
            $("#respuesta").html(data);
        }
    });
    return false;
});


// Unidades de Tiemppo
$("#tiempo").submit(function(e){
    e.preventDefault();

    $.ajax({
        type: 'post',
        url: 'php/procesar.tiempo.php',
        data: $(this).serialize(),
        success: function(data){
            $("#respuesta").slideDown();
            $("#respuesta").html(data);
        }
    });
    return false;
});


// Unidades de Almacenamiento
$("#almacenamiento").submit(function(e){
    e.preventDefault();

    $.ajax({
        type: 'post',
        url: 'php/procesar.almacenamiento.php',
        data: $(this).serialize(),
        success: function(data){
            $("#respuesta").slideDown();
            $("#respuesta").html(data);
        }
    });
    return false;
});