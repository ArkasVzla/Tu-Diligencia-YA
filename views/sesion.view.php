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
</head>
<body> 
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
                    <a class="nav-link" id="v-pills-entrada-tab" data-toggle="pill" href="#v-pills-entrada" role="tab" aria-controls="v-pills-entrada" aria-selected="true" href="#"><i class="material-icons">open_in_new</i><span>Entrada</span></a>
                    <a class="nav-link" id="v-pills-usuario-tab" data-toggle="pill" href="#v-pills-usuario" role="tab" aria-controls="v-pills-usuario" aria-selected="true" href="#"><i class="material-icons">supervisor_account</i><span>Usuarios</span></a>
                    <a class="nav-link" id="v-pills-usuario-tab" data-toggle="pill" href="#v-pills-servicios" role="tab" aria-controls="v-pills-servicios" aria-selected="true" href="#"><i class="material-icons">room_service</i><span>Servicios</span></a>
                    <a class="nav-link" id="v-pills-configuraciones-tab" data-toggle="pill" href="#v-pills-configuraciones" role="tab" aria-controls="v-pills-configuraciones" aria-selected="true" href="#"><i class="material-icons">settings</i><span>Configuraciones</span></a>
                    <a href="cerrar.php"><i class="material-icons">exit_to_app</i><span>Salir</span></a>
                </nav>
            </div>
            <main class="main col">
                <div class="row">
                    <div class="columna col-lg-7">
                        <!-- SECCION MAIN DE LAS ENTRADAS DEL USUARIO -->
                        <div class="widget nueva-entrada tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-inicio" role="tabpanel" aria-labelledby="v-pills-inicio-tab">
                                <h3 class="titulo">Nuevo Entrada de Inicio</h3>
                                <form action="#">
                                    <input type="text" placeholder="Titulo de la entrada">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, odio, excepturi repellendus alias architecto tenetur saepe nihil officiis voluptas, corporis suscipit fugiat voluptate sequi reiciendis nisi qui nulla nesciunt quia!"></textarea>
                                    <div class="d-flex justify-content-center">
                                        <button><i class="material-icons">exit_to_app</i>Enviar</button>
                                    </div>  
                                </form>
                            </div>
                        <!-- ///SECCION DE LAS ENTRADAS -->
                            <div class="tab-pane fade" id="v-pills-entrada" role="tabpanel" aria-labelledby="v-pills-entrada-tab">
                                <h3 class="titulo">Mis Servicios</h3>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
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
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- ///SECCION VISTA DE LOS USUARIOS -->
                            <div class="tab-pane fade" id="v-pills-usuario" role="tabpanel" aria-labelledby="v-pills-usuario-tab">
                                <h3 class="titulo mb-3">Usuarios</h3>

                                <?php foreach ($fotos as $foto): ?>
                                    <a href="views/sesion.view.php?id=<?php echo $fotos['id']; ?>">
                                        <img src="archivos/<?php echo $fotos['archivo']; ?>" alt="">
                                    </a>
                                <?php endforeach; ?>

                            </div>
                            <!-- ///SECCION SELECCIONAR SERVICIOS -->
                            <div class="tab-pane fade" id="v-pills-servicios" role="tabpanel" aria-labelledby="v-pills-servicios-tab">
                                <h3 class="titulo">Servicios</h3>
                                <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                    <div class="row">   
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="card text-center mb-2">
                                                <div class="card-header bg-primary"> 
                                                  <!-- ingresar texto -->
                                                </div>
                                                <div class="card-body">
                                                    <div class="was-validated">
                                                        <select name="servicio" id="servicios" class="custom-select" required>
                                                            <option value="">Seleccionar Servicios</option>
                                                            <option value="Apostilla de Documentos">Apostilla de Documentos</option>
                                                            <option value="Antecedentes penales">Antecedentes penales</option>
                                                            <option value="Tramites Civiles">Tramites Civiles</option>
                                                            <option value="Tramites Bancarios">Tramites Bancarios</option>
                                                            <option value="Gestiones Gubernamentales">Gestiones Gubernamentales</option>
                                                            <option value="Pago de deudas de servicios publicos">Pago de deudas de servicios publicos</option>
                                                        </select>
                                                        <div class="invalid-feedback text-left">Selecciona un servicio</div>
                                                            <!-- ingresar imagen -->
                                                        <div class="custom-file mt-2">
                                                            <input type="file" name="archivo" class="custom-file-input" id="archivo" lang="es" required>
                                                            <label class="custom-file-label" for="customFileLang">Adjuntar Archivo</label>
                                                            <div class="invalid-feedback text-left">Adjunta un archivo</div>
                                                        </div>
                                                    </div>
                                                            <!-- ingresar correo electronico -->
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
                                                            <div class="was-validated">
                                                                <label class="sr-only" for="email">Correo</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="material-icons">email</i></div>
                                                                    </div>
                                                                    <input type="email" class="form-control form-control-md" name="email" id="email" placeholder="Ingresar Correo" required>
                                                                    <div class="invalid-feedback text-left">Ingresa un correo</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                <!-- ingresar telefono -->
                                                        <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
                                                            <div class="was-validated">
                                                                <label class="sr-only" for="numero_telefono">Telefono</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="material-icons">face</i></div>
                                                                    </div>
                                                                    <input type="text" class="form-control form-control-md" name="numero_telefono" id="numero_telefono" placeholder="Ingresar Telefono" required>
                                                                    <div class="invalid-feedback text-left">Ingresar Telefono</div>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                                    <!-- ingresar mensaje -->
                                                    <div class="form-group mt-3">
                                                        <div class="was-validated">
                                                            <label for="mensaje">Mensaje</label>
                                                            <textarea class="form-control textareaservicios" name="mensaje" id="mensaje" rows="3" placeholder="Escriba una descripcion del servicio que requiere" style="max-height: 300px; min-height: 300px;" required></textarea>
                                                            <div class="invalid-feedback text-left">Ingresar mensaje</div>
                                                        </div>
                                                        <input type="submit" name="solicitar" id="solicitar" value="Solicitar" class="btn btn-outline-primary btn-md btn-block text-center mt-2">
                                                        <?php if (isset($error)): ?>
                                                            <p class="error"> <?php echo $error; ?></p>
                                                        <?php endif ?>
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
                                                                    <input type="text" class="form-control form-control-md" id="nombre" placeholder="Ingresar Nombre">
                                                                </div>
                                                            </div>
                                                            <!-- apellido del usuario -->
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                                                <label class="sr-only" for="apellido">Apellido</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="material-icons">face</i></div>
                                                                    </div>
                                                                    <input type="text" class="form-control form-control-md" id="apellido" placeholder="Ingresar Apellido">
                                                                </div>
                                                            </div>
                                                            <!-- Cedula del usuario -->
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                                                <label class="sr-only" for="cedula">Cedula</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text lead">V-</div>
                                                                    </div>
                                                                    <input type="text" class="form-control form-control-md" id="cedula" placeholder="Cedula">
                                                                </div>
                                                            </div>
                                                            <!-- Telefono del usuario -->
                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <label class="sr-only" for="telefono">Telefono</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="material-icons">phone</i></div>
                                                                    </div>
                                                                    <input type="text" class="form-control form-control-ms" id="telefono" placeholder="Telefono">
                                                                </div>
                                                            </div>
                                                            <!-- Correo del usuario -->
                                                            <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                                                <label class="sr-only" for="email">Correo</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="material-icons">email</i></div>
                                                                    </div>
                                                                    <input type="email" class="form-control form-control-md" name="email" id="email" placeholder="Ingresar Correo">
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
                                                                    <input type="text" class="form-control form-control-md" id="direccion" placeholder="Direccion">
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
                                                                <input type="password" class="form-control form-control-md" id="contraseña-uno" placeholder="Contraseña">
                                                            </div>
                                                        </div>
                
                                                        <div class="ccol-sm-12 col-md-6 col-lg-6 mb-3">
                                                            <label class="sr-only" for="contraseña-dos">Contraseña</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="material-icons">lock_open</i></div>
                                                                </div>
                                                                <input type="password" class="form-control form-control-md" id="contraseña-dos" placeholder="Repetir Contraseña">
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
                    <!-- SECCION DEL ASIDE ESTADISTICAS, PUBLICIDAD -->
                    <div class="columna col-lg-5">
                        <div class="widget estadisticas">
                            <h3 class="titulo">Estadisticas</h3>
                            <div class="contenedor d-flex flex-wrap">
                                <div class="caja">
                                    <h3>15.154</h3>
                                    <p>Visitas</p>
                                </div>
                                <div class="caja">
                                    <h3>1.854</h3>
                                    <p>Registros</p>
                                </div>
                                <div class="caja">
                                    <h3>15.154</h3>
                                    <p>Ingresos</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="widget comentarios">
                            <h3 class="titulo">Comentarios</h3>
                            <div class="contenedor">
                                <div class="comentario d-flex flex-wrap">
                                    <div class="foto">
                                        <a href="#">
                                            <img src="img/logo.png" width="100" alt="">
                                        </a>
                                    </div>
                                    <div class="texto">
                                        <a href="#"> David</a>
                                        <p>en <a href="#">Mi Primer entrada</a></p>
                                        <p class="texto-comentario">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae labore architecto eaque, totam asperiores</p>
                                    </div>
                                    <div class="botones d-flex justify-content-start flex-wrap w-100">
                                        <button class="btn btn-primary ">Aprobar</button>
                                        <button class="btn btn-danger ">Eliminar</button>
                                        <button class=" btn btn-dark text-light ">Bloquear usuario</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </main>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>