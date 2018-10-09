$(document).ready(function () {
    
});

function ingresar_solicitud(){
    var id_usuario = $('#id_usuario').val();
    var id_servicio = $('#servicios').val();
    var mensaje = $('#mensaje').val();

    var datos = {};

    datos.id_usuario = id_usuario;
    datos.id_servicio = id_servicio;
    datos.mensaje = mensaje;
    datos.funcion = 'guardar_solicitud';

    console.log(datos);

    $.ajax({
        type: "POST",
        url: "solicitud.php",
        data: datos,
        dataType: "json",
        success: function (response) {
            console.log(response);
        }
    });
}

function traer_solicitudes(){
    var datos = {};

    datos.funcion = 'traerTodasSolicitudes';
    
    $.ajax({
        type: "POST",
        url: "solicitud.php",
        data: datos,
        dataType: "json",
        success: function (response) {
            console.log(response);
        }
    });
}