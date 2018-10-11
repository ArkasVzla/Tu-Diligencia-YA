$(document).ready(function(e) {
    $("#archivo").dropzone(
    {
        url: "js/dropzone/upload.php",
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 100, // MB
        addRemoveLinks: true,
        autoProcessQueue: true,
        acceptedFiles: '.jpg,.pdf,.png,.bmp,.JPG,.JPGE,.PNG,.PDF',
        dictInvalidFileType: 'Este tipo de archivo no es soportado.',
        clickable: true,
        parallelUploads: 100,
        maxFiles: 1,
        dictRemoveFile: 'Eliminar',
        dictMaxFilesExceeded: 'Has superado el maximo de archivos (100 archivos)',
        dictDefaultMessage: 'Añade archivos haciendo clic o moviendo los archivos al area activa.',
        init: function () {
            console.log('hace init');
            var myDropzone = this;
            myDropzone.on("addedfile", function (file) {
                if (validar_ext(file.type)) {
                    alertify.error('Debe selecciona una imagen (ext png, jpg, gif) o PDF');
                    myDropzone.removeFile(file);
                } else {
                    $('#pbarra1').slideDown('fast');
                    alertify.success('Subiendo, espere un momento.');
                    myDropzone.processQueue();
                }
            });

            myDropzone.on("complete", function (file) {
                var nombre_archivo_subido = file.xhr.response;

                if (nombre_archivo_subido != '0') {
                    $('#url_archivo').val(nombre_archivo_subido);
                    alertify.success('Su archivo fue ingresado exitosamente.');
                } else {
                    $('#img_preview').attr('src', '../images/default/default1.png');
                    alertify.error('Ocurrió un error al subir el archivo');
                }
                myDropzone.removeFile(file);
            });

            myDropzone.on("uploadprogress", function (file, progress, bytesSent) {
                $('#barra1').html(parseInt(progress)).css('width', progress + '%').attr('aria-valuenow', progress);
            });
        }
    });
});

function validar_ext(namefile)
{
    var ext = ['image/jpeg','image/png','image/gif','image/pjpeg','application/pdf',];
    var estado = 0;
    if(ext.indexOf(namefile)==-1)
    {
        estado = 1;
    }else{
       estado = 0;
    }
    return estado;
}