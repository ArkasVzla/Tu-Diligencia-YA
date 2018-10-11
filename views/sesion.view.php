<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Usuario</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="js/alertify/css/alertify.css">
    <link rel="stylesheet" href="js/alertify/css/alertify.rtl.css">
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="js/dropzone/dropzone.js"></script>
    <script type="text/javascript" src="js/dropzone/upload.js"></script>
    <script type="text/javascript" src="js/alertify/alertify.js"></script>
    <script type="text/javascript" src="js/modulo.js"></script>
</head>
<body> 
    <input type="hidden" id="id_usuario" value="<?php echo $_SESSION['usuario']['id']; ?>">
    <div class="container-fluid">
        <div class="row">
                       <!-- BARRA DE MENU  -->
            <div class="barra-lateral col-12 col-sm-auto">
                <div class="logo bg-light mt-1">
                    <figure class="figure">
                        <img src="img/logo.png" alt="responsive image width: 100%; height: auto;" width="300px">
                    </figure>
                </div>
                <nav class="nav nav-pills menu d-flex d-sm-block justify-content-center flex-wrap" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-inicio-tab" data-toggle="pill" href="#v-pills-inicio" role="tab" aria-controls="v-pills-inicio" aria-selected="true" href="#"><i class="material-icons">home</i><span>Inicio</span></a>
                    <a class="nav-link" id="v-pills-entrada-tab" data-toggle="pill" href="#v-pills-entrada" role="tab" aria-controls="v-pills-entrada" aria-selected="true" href="#" onclick="traer_mis_solicitudes();"><i class="material-icons">open_in_new</i><span>Entrada</span></a>
                    <a class="nav-link" id="v-pills-usuario-tab" data-toggle="pill" href="#v-pills-usuario" role="tab" aria-controls="v-pills-usuario" aria-selected="true" href="#" onclick="traer_solicitudes();"><i class="material-icons">supervisor_account</i><span>Usuarios</span></a>
                    <!-- <a class="nav-link" id="v-pills-publicar-tab" data-toggle="pill" href="#v-pills-publicar" role="tab" aria-controls="v-pills-publicar" href="#"><i class="material-icons">supervisor_account</i><span>Publicar</span></a> -->
                    <a class="nav-link" id="v-pills-usuario-tab" data-toggle="pill" href="#v-pills-servicios" role="tab" aria-controls="v-pills-servicios" aria-selected="true" href="#"><i class="material-icons">room_service</i><span>Servicios</span></a>
                    <!-- <a class="nav-link" id="v-pills-configuraciones-tab" data-toggle="pill" href="#v-pills-configuraciones" role="tab" aria-controls="v-pills-configuraciones" aria-selected="true" href="#"><i class="material-icons">settings</i><span>Configuraciones</span></a> -->
                    <a href="cerrar.php"><i class="material-icons">exit_to_app</i><span>Salir</span></a>
                </nav>
            </div>
            <main class="main col">
                <div class="row">
                    <div class="columna col-lg-9">
                                    <!-- SECCION MAIN DE LAS NOTICIAS -->
                        <div class="widget nueva-entrada tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-inicio" role="tabpanel" aria-labelledby="v-pills-inicio-tab">
                                <h3 class="titulo">Noticias</h3>
                                <form action="#">
                                <div class="card mb-3">
                                    <img class="card-img-top" src="img/noticia1.jpg" alt="Card image cap" height="400">
                                        <div class="card-body">
                                            <h5 class="card-title">Titulo de la noticia</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-muted">Fecha de lo publicado</small></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <!-- ///SECCION DE LAS ENTRADAS -->
                            <div class="tab-pane fade" id="v-pills-entrada" role="tabpanel" aria-labelledby="v-pills-entrada-tab">
                                <h3 class="titulo">Mis Servicios</h3>
                                <form action="#">
                                    <div class="row" id="tabla_mis_solicitudes">
                                        <!--<div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="card border-dark mb-2">
                                                <div class="card-header">
                                                    Mi Servicio #1
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione vitae totam eaque maiores ipsum. Odio dicta tempora </p>
                                                    <button class="btn btn-outline-success btn-sm disabled" type="submit" value="Enviar">En Espera</button>
                                                    <button class="btn btn-outline-danger btn-sm" type="submit" value="Eliminar">Eliminar</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="card border-dark mb-2">
                                                <div class="card-header">
                                                    Mi Servicio #2
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dicta tempora dolores blanditiis, vitae totam eaque maiores ipsum.</p>
                                                    <button class="btn btn-outline-success btn-sm disabled" type="submit" value="Enviar">En espera</button>
                                                    <button class="btn btn-outline-danger btn-sm" type="submit" value="Eliminar">Eliminar</button>
                                                </div>  
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="card border-dark mb-2">
                                                <div class="card-header">
                                                    Mi Servicio #3
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dicta tempora dolores blanditiis, vitae totam eaque maiores ipsum.</p>
                                                    <button class="btn btn-outline-success btn-sm disabled" type="submit" value="Enviar">en Espera</button>
                                                    <button class="btn btn-outline-danger btn-sm" type="submit" value="Eliminar">Eliminar</button>
                                                </div>  
                                            </div>
                                        </div>-->
                                    </div>
                                </form>
                            </div>

                            <!-- ///SECCION ADMNISTRADOR VISTA DE LOS SERVICIOS DE LOS USUARIOS -->
                            <div class="tab-pane fade" id="v-pills-usuario" role="tabpanel" aria-labelledby="v-pills-usuario-tab">
                                <h3 class="titulo mb-3">Usuarios</h3>
                                    <table class="table table-responsive table-striped mt-3">
                                        <thead class="table-success">
                                            <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Servicio</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Ver Documento</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Cambiar Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tabla_solicitudes">
                                            <!-- DATOS DE SOLICITUDES -->
                                        </tbody>
                                    </table>                                                 
                            </div>
                             <!-- ///PUBLICAR NOTICIAS -->
                            <div class="tab-pane fade" id="v-pills-publicar" role="tabpanel" aria-labelledby="v-pills-publicar-tab">
                                <h3 class="titulo">Publicar noticia</h3>
                                <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                    <div class="row">   
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="card text-center mb-3">
                                                <div class="card-header bg-primary"> 
                                                  <!-- ingresar texto -->
                                                </div>
                                                <div class="card-body">
                                                    <div class="was-validated">
                                                        <!-- ingresar imagen -->
                                                        <div class="custom-file mt-3">
                                                            <input type="file" name="imagen_noticia" class="custom-file-input" id="imagen_noticia" lang="es" required>
                                                            <label class="custom-file-label" for="customFileLang">Adjuntar Archivo</label>
                                                            <div class="invalid-feedback text-left">Adjunta un archivo</div>
                                                        </div>
                                                        <!-- ingresar titilo de la noticia -->
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">Titulo de la noticia</label>
                                                            <input type="text" class="form-control" name="titulo_noticia" id="tiutlo_noticia" placeholder="Example input" required>
                                                            <div class="invalid-feedback text-left">Publicar una noticia</div>
                                                        </div>    
                                                    </div>
                                                                                                               
                                                                    <!-- ingresar mensaje -->
                                                    <div class="form-group">
                                                        <div class="was-validated">
                                                            <label for="mensaje">Mensaje</label>
                                                            <textarea class="form-control textareaservicios" name="mensaje_noticia" id="mensaje_noticia" rows="3" placeholder="Escriba una descripcion de la noticia" style="max-height: 200px; min-height: 200px;" required></textarea>
                                                            <div class="invalid-feedback text-left">Ingresar mensaje</div>
                                                        </div>
                                                        <input type="publicar" name="publicar_noticia" id="publicar_noticia" value="Publicar" class="btn btn-outline-primary btn-md btn-block text-center mt-2" onclick="ingresar_solicitud()">
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- ///SECCION SELECCIONAR SERVICIOS -->
                            <div class="tab-pane fade" id="v-pills-servicios" role="tabpanel" aria-labelledby="v-pills-servicios-tab">
                                <h3 class="titulo">Servicios</h3>
                                <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                    <div class="row">   
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="card text-center mb-3">
                                                <div class="card-header bg-primary"> 
                                                  <!-- ingresar texto -->
                                                </div>
                                                <div class="card-body">
                                                    <div class="was-validated">
                                                        <select name="servicio" id="servicios" class="custom-select" required>
                                                            <option value="0">Seleccionar Servicios</option>
                                                            <?php foreach( $servicios as $servicio):  ?>
                                                            <?php echo '<option value="'.$servicio['id'].'">'.$servicio['nombre'].'</option>'; ?>
                                                            <?php endforeach;  ?>
                                                        </select>
                                                        <div class="invalid-feedback text-left">Selecciona un servicio</div>
                                                            <!-- ingresar imagen -->
                                                        <div class="custom-file mt-3">
                                                            <!--<input type="file" name="archivo" class="custom-file-input" id="archivo" lang="es" required>-->
                                                            <input type="hidden" name="url_archivo" id="url_archivo">
                                                            <button id="archivo" class="btn btn-primary custom-file-input">Examinar</button>
                                                            <label class="custom-file-label" for="customFileLang">Adjuntar Archivo</label>
                                                            <div class="invalid-feedback text-left">Adjunta un archivo</div>
                                                        </div>
                                                    </div>
                                                                                                               
                                                                    <!-- ingresar mensaje -->
                                                    <div class="form-group">
                                                        <div class="was-validated">
                                                            <label for="mensaje">Mensaje</label>
                                                            <textarea class="form-control textareaservicios" name="mensaje" id="mensaje" rows="3" placeholder="Escriba una descripcion del servicio que requiere" style="max-height: 200px; min-height: 200px;" required></textarea>
                                                            <div class="invalid-feedback text-left">Ingresar mensaje</div>
                                                        </div>
                                                        <button type="button" name="solicitar" id="solicitar" value="Solicitar" class="btn btn-outline-primary btn-md btn-block text-center mt-2" onclick="ingresar_solicitud()">Solicitar</button>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- ///SECCION DE CONFIGURACIONES-->
                            <div class="tab-pane fade" id="v-pills-configuraciones" role="tabpanel" aria-labelledby="v-pills-configuraciones-tab">
                                <h3 class="titulo mb-3">Configuraciones</h3>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <form action="#">
                                            <!-- Datos Personales -->
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title text-primary">Datos personales</div>
                                                    
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <!-- Nombre del usuario -->
                                                                <label class="sr-only" for="nombre">Nombre</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="material-icons">face</i></div>
                                                                    </div>
                                                                    <input type="text" class="form-control form-control-md" name="nombre" id="nombre" placeholder="Ingresar Nombre">
                                                                </div>
                                                            </div>
                                                            <!-- apellido del usuario -->
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                                                <label class="sr-only" for="apellido">Apellido</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="material-icons">face</i></div>
                                                                    </div>
                                                                    <input type="text" class="form-control form-control-md" name="apellido" id="apellido" placeholder="Ingresar Apellido">
                                                                </div>
                                                            </div>
                                                            <!-- Cedula del usuario -->
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                                                <label class="sr-only" for="cedula">Cedula</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text lead">V-</div>
                                                                    </div>
                                                                    <input type="text" class="form-control form-control-md" name="cedula" id="cedula" placeholder="Cedula">
                                                                </div>
                                                            </div>
                                                            <!-- Telefono del usuario -->
                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <label class="sr-only" for="telefono">Telefono</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="material-icons">phone</i></div>
                                                                    </div>
                                                                    <input type="text" class="form-control form-control-ms" name="telefono" id="telefono" placeholder="Telefono">
                                                                </div>
                                                            </div>
                                                            <!-- Correo del usuario -->
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                                                <label class="sr-only" for="correo">Correo</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="material-icons">email</i></div>
                                                                    </div>
                                                                    <input type="email" class="form-control form-control-md" name="correo" id="correo" placeholder="Ingresar Correo">
                                                                </div>
                                                            </div>
                                                            <!-- Pais de residencia -->
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                                                <label class="sr-only" for="pais">Pais</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text lead"><i class="material-icons">location_on</i></div>
                                                                        </div>
                                                                        <input type="text" class="form-control form-control-md" name="pais" id="pais" placeholder="Pais donde se encuentra" value="<?php if(isset($enviado) && isset($pais)) echo $pais ?>">
                                                                    </div>
                                                                </div>
                                                            <!-- Direccion del usuario -->
                                                            <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                                                <label class="sr-only" for="direccion">Direccion</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="material-icons">location_on</i></div>
                                                                    </div>
                                                                    <input type="text" class="form-control form-control-md" name="direccion" id="direccion" placeholder="Direccion">
                                                                </div>
                                                            </div>

                                                            <div class="input-group justify-content-center">
                                                                <button type="submit" value="cambiar-datos" class="btn btn-primary btn-md">Editar</button>
                                                            </div>
                                                        </div>  
                                                </div>
                                            </div>
                                            
                                            <!-- Cambiar Contraseña -->
                                            <div class="card mt-3">
                                                <div class="card-body">
                                                    <div class="card-title text-primary">Cambiar contraseña</div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                                            <label class="sr-only" for="contraseña-uno">Contraseña</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="material-icons">lock_open</i></div>
                                                                </div>
                                                                <input type="password" class="form-control form-control-md" name="passuno" id="contraseña-uno" placeholder="Contraseña">
                                                            </div>
                                                        </div>
                
                                                        <div class="ccol-sm-12 col-md-6 col-lg-6 mb-3">
                                                            <label class="sr-only" for="contraseña-dos">Contraseña</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="material-icons">lock_open</i></div>
                                                                </div>
                                                                <input type="password" class="form-control form-control-md" name="passdos" id="contraseña-dos" placeholder="Repetir Contraseña">
                                                            </div>
                                                        </div>

                                                        <div class="input-group justify-content-center">
                                                            <button type="submit" value="cambiar-pass" class="btn btn-primary btn-md">Cambiar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card border-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Visitas</div>
                            <div class="card-body text-success">
                                <h5 class="card-title">321</h5>                                
                            </div>
                        </div>

                        <div class="card border-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Registro</div>
                            <div class="card-body text-success">
                                <h5 class="card-title">487</h5>                                
                            </div>
                        </div>
                    </div>
                            
                </div>
            </main>
        </div>
    </div>

<div class="modal" id="cambiar_estado">
    <div class="modal-dialog">
        <div class="modal-content">
        
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Cambiar Estado</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12" id="botones">
                    <button type="button" class="btn btn-primary text-center">Primary</button>
                    <button type="button" class="btn btn-primary text-center">Primary</button>
                </div>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
        </div>
    </div>
</div>

</body>
</html>
