$(document).ready(function () {
    
});

function ingresar_solicitud(){
    var id_usuario = $('#id_usuario').val();
    var id_servicio = $('#servicios').val();
    var archivo = $('#url_archivo').val();
    var mensaje = $('#mensaje').val();

    if(id_usuario=='')
    {
        alertify.error('Usuario inválido para ingresar solicitud, inicie sesión nuevamente.');
    }
    if(id_servicio=='0')
    {
        alertify.error('Debe seleccionar un servicio.');
    }
    if(archivo=='')
    {
        alertify.error('Por favor ingrese el documento.');
    }

    var datos = {};

    datos.id_usuario = id_usuario;
    datos.id_servicio = id_servicio;
    datos.archivo = archivo;
    datos.mensaje = mensaje;
    datos.funcion = 'guardar_solicitud';

    console.log(datos);

    $.ajax({
        type: "POST",
        url: "solicitud.php",
        data: datos,
        dataType: "json",
        success: function (response) {
            if(response==1){
                alertify.success('Su solicitud ha sido ingresada.');
                $('#id_servicio').val(0);
                $('#url_archivo').val('');
                $('#mensaje').val('');
            } else{ 
                alertify.error('Ocurrió un error al ingresar la solicitud.');
            }
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
        success: function (resp) {
            var html = '';
            for(var key in resp)
            {
                var documento = '';
                var estados = ['<span class="badge badge-warning">En espera</span>', '<span class="badge badge-primary">En Proceso</span>', '<span class="badge badge-success">Aprobado</span>', '<span class="badge badge-danger">Negada</span>'];

                html+='<tr>';
                html+='<td scope="row">'+resp[key].id+'</td>';
                html+='<td>'+resp[key].nombre_usuario+'</td>';
                html+='<td>'+resp[key].nombre+'</td>';
                html+='<td>'+resp[key].correo+'</td>';
                html+='<td>'+resp[key].telefono+'</td>';
                var extensiones = resp[key].archivo.split('.');
                if(extensiones[1]=='pdf')
                {
                    documento+='<a href="http://localhost/Tu-Diligencia-Ya/archivos/'+resp[key].archivo+'" class="btn btn-light" target="_blank" download><i class="material-icons">file_copy</i></a>';
                } else {
                    documento+='<a href="http://localhost/Tu-Diligencia-Ya/archivos/'+resp[key].archivo+'" data-fancybox>';
                    documento+='<img class="img-responsive" style="width: 50%;" src="archivos/'+resp[key].archivo+'" />';
                    documento+='</a>';
                }

                html+='<td>'+documento+'</td>';
                html+='<td>'+estados[resp[key].estado]+'</td>';
                if(resp[key].estado<=1)
                {
                    html+='<td><button type="button" class="btn btn-outline-secondary" onclick="abrir_modal('+resp[key].id+')"><i class="material-icons">open_in_new</i></button></td>';
                }
                html+='</tr>';
                //html+='<td><a href="sesion.php"><img src="" alt="" width="50"></a></td>';
            }
            $('#tabla_solicitudes').html(html);
        }
    });
}

function traer_mis_solicitudes(){
    var datos = {};

    datos.funcion = 'traerTodasSolicitudes';
    datos.id_usuario = $('#id_usuario').val();
    
    $.ajax({
        type: "POST",
        url: "solicitud.php",
        data: datos,
        dataType: "json",
        success: function (resp) {
            var html = '';
            for(var key in resp)
            {
                var estados = ['<span class="badge badge-warning">En espera</span>', '<span class="badge badge-primary">En Proceso</span>', '<span class="badge badge-success">Aprobado</span>', '<span class="badge badge-danger">Negada</span>'];

                html+='<div class="col-sm-12 col-md-6 col-lg-6">';
                html+='<div class="card border-dark mb-2">';
                html+='<div class="card-header">'+resp[key].nombre+' #1</div>';
                html+='<div class="card-body center-block">';
                html+=estados[resp[key].estado];
                //html+='<button class="btn btn-outline-success btn-sm disabled" type="submit" value="Enviar">En Espera</button>';
                if(resp[key].estado<=0)
                {
                    html+='<button class="btn btn-outline-danger btn-sm" style="margin-left: 10px;" type="button" value="Eliminar" onclick="eliminar_solicitud('+resp[key].id+')">Eliminar</button>';
                }

                html+='</div>';
                html+='</div>';
                html+='</div>';
            }
            $('#tabla_mis_solicitudes').html(html);
        }
    });
}

function eliminar_solicitud(id){
    var datos = {};

    datos.funcion = 'eliminarSolicitud';
    datos.id_usuario = $('#id_usuario').val();
    datos.id = id;

    $.ajax({
        type: "POST",
        url: "solicitud.php",
        data: datos,
        dataType: "json",
        success: function (resp) {
            if(resp==1){
                traer_mis_solicitudes();
                alertify.success('Solicitud eliminada.');
            } else{ 
                alertify.error('No se pudo eliminar su solicitud.');
            }
        }
    });
}

function abrir_modal(id)
{
    var datos = {};

    datos.funcion = 'traerTodasSolicitudes';
    datos.id = id;
    
    $.ajax({
        type: "POST",
        url: "solicitud.php",
        data: datos,
        dataType: "json",
        success: function (resp) {
            console.log(resp);
            var html = '';
            var estado = resp[0].estado;
            var btn_estilo = ['btn-danger', 'btn-success'];
            if(estado==0){
                html+='<button type="button" class="btn '+btn_estilo[1]+' text-center" style="margin-right: 10px;" onclick="cambiar_estado('+id+',1)">Procesar</button>';
                html+='<button type="button" class="btn '+btn_estilo[0]+' text-center" style="margin-right: 10px;" onclick="cambiar_estado('+id+',3)">Negar</button>';
            }

            if(estado==1){
                html+='<button type="button" class="btn '+btn_estilo[1]+' text-center" style="margin-right: 10px;" onclick="cambiar_estado('+id+',2)">Aprobar</button>';
                html+='<button type="button" class="btn '+btn_estilo[0]+' text-center" style="margin-right: 10px;" onclick="cambiar_estado('+id+',3)">Negar</button>';
            }

            $('#botones').html(html);
            $('#cambiar_estado').modal('show');
        }
    });
}

function cambiar_estado(id, estado)
{
    var datos = {};

    datos.funcion = 'cambiarEstado';
    datos.estado = estado;
    datos.id = id;
    
    $.ajax({
        type: "POST",
        url: "solicitud.php",
        data: datos,
        dataType: "json",
        success: function (resp) {
            if(resp==1){
                traer_solicitudes();
                alertify.success('Cambio de estado exitoso.');
                $('#cambiar_estado').modal('hide');
            } else{ 
                alertify.error('Ocurrió un problema al cambiar la solicitud.');
            }
        }
    });
}