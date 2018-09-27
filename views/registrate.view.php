<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body> 
    			<!-- Menu de Navegacion -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <img src="img/logo.png" alt="responsive image" class="img-fluid max-width: 100%; height: auto;" width="200" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">La Empresa</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nosotros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Mision</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Vision</a>     
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="#">Servicios</a>
                </li>

                <li class="nav-item mr-2">
                    <a class="nav-link " href="#">Contacto</a>
                 </li>
            </ul>
            
                <form class="form-inline">
	    			<a class="btn btn-outline-secondary mr-2" href="registrate.php">Registrate</a>
                    <a class="btn btn-outline-secondary" href="login.php">Ingresar</a>
	  		    </form>	
            </div>
        </div>    
    </nav>
        
	<div class="container-fluid">
        
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-3">
                <figure class="figure">
                    <img src="img/registrate.png" alt="responsive image" class="img-fluid max-width: 100%; height: auto; mt-5" width="150">
                </figure>
            </div>
        </div>


                                                            <!-- Registro de formulario de Usuarios -->
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center mt-3">
                <div class="card" style="width: 750px;">
                    <div class="card-body">
                        <div class="card-title text-muted text-center"><h4>Crear cuenta</h4></div>
                        
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login" id="">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="was-validated">
                                                <label class="sr-only" for="nombre">Nombre</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="material-icons">face</i></div>
                                                    </div>
                                                    <input type="text" class="form-control form-control-md" name="nombre" id="nombre" placeholder="Ingresar Nombre" value="<?php if(isset($enviado) && isset($nombre)) echo $nombre ?>" required>
                                                    <div class="invalid-feedback text-left">Ingresar el Nombre</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="was-validated">
                                                <label class="sr-only" for="apellido">Apellido</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="material-icons">face</i></div>
                                                    </div>
                                                    <input type="text" class="form-control form-control-md" name="apellido" id="apellido" placeholder="Ingresar Apellido" value="<?php if(isset($enviado) && isset($apellido)) echo $apellido ?>" required>
                                                    <div class="invalid-feedback text-left">Ingresar el Apellido</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="was-validated">
                                                <label class="sr-only" for="email">Correo</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="material-icons">email</i></div>
                                                    </div>
                                                    <input type="email" class="form-control form-control-md" name="correo" id="email" placeholder="Ingresar Correo" value="<?php if(isset($enviado) && isset($correo)) echo $correo ?>" required>
                                                    <div class="invalid-feedback text-left">Ingresar el correo</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="was-validated">
                                                <label class="sr-only" for="usuario">Usuario</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="material-icons">account_circle</i></div>
                                                    </div>
                                                    <input type="text" class="form-control form-control-md" name="usuario" id="usuario" placeholder="Nombre de Usuario" value="<?php if(isset($enviado) && isset($usuario)) echo $usuario ?>" required>
                                                    <div class="invalid-feedback text-left">Ingresar el Usuario</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="was-validated">
                                                <label class="sr-only" for="cedula">Cedula</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text lead">V-</div>
                                                    </div>
                                                    <input type="text" class="form-control form-control-md" name="cedula" id="cedula" placeholder="Cedula" value="<?php if(isset($enviado) && isset($cedula)) echo $cedula ?>" required>
                                                    <div class="invalid-feedback text-left">Ingresar la Cedula</div>
                                                </div>
                                            </div>
                                        </div>
                                                            <!-- Seleccion de paises-->
                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="was-validated">
                                                <label class="sr-only" for="pais">Pais</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text lead"><i class="material-icons">location_on</i></div>
                                                    </div>
                                                    <input type="text" class="form-control form-control-md" name="pais" id="pais" placeholder="Pais donde se encuentra" value="<?php if(isset($enviado) && isset($pais)) echo $pais ?>" required>
                                                    <div class="invalid-feedback text-left">Ingresar el Pais</div>
                                                </div>
                                            </div>
                                        </div>
                                                        <!-- Direccion del Usuario-->
                                        <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                            <div class="was-validated">
                                                <label class="sr-only" for="direccion">Direccion</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="material-icons">directions</i></div>
                                                    </div>
                                                    <input type="text" class="form-control form-control-md" name="direccion" id="direccion" placeholder="Direccion" value="<?php if(isset($enviado) && isset($direccion)) echo $direccion ?>" required>
                                                    <div class="invalid-feedback text-left">Ingresar la Direccion</div>
                                                </div>
                                            </div>
                                        </div>
                                                            <!-- Telefono de usuarios-->
                                        <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                            <div class="was-validated">
                                                <label class="sr-only" for="telefono">Telefono</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="material-icons">phone</i></div>
                                                    </div>
                                                    <input type="text" class="form-control form-control-md" name="telefono" id="telefono" placeholder="Telefono" value="<?php if(isset($enviado) && isset($telefono)) echo $telefono ?>" required>
                                                    <div class="invalid-feedback text-left">Ingresar el Telefono</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                                        <!-- Seccion de la contraseña-->
                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="was-validated">
                                                <label class="sr-only" for="contraseña-uno">Contraseña</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="material-icons">lock_open</i></div>
                                                    </div>
                                                    <input type="password" class="form-control form-control-md" name="passuno" id="contraseña-uno" placeholder="Contraseña" value="<?php if(isset($enviado) && isset($passuno)) echo $passuno ?>" required>
                                                    <div class="invalid-feedback text-left">Ingresar una Contraseña</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ccol-sm-12 col-md-6 col-lg-6 mb-3">
                                            <div class="was-validated">
                                                <label class="sr-only" for="contraseña-dos">Contraseña</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="material-icons">lock_open</i></div>
                                                    </div>
                                                    <input type="password" class="form-control form-control-md" name="passdos" id="contraseña-dos" placeholder="Repetir Contraseña" value="<?php if(isset($enviado) && isset($passdos)) echo $passdos ?>" required>
                                                    <div class="invalid-feedback text-left">Ingresar una Contraseña</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <!-- Errores de Validacion -->
                                            <div class="w-100"></div>
                                            <?php if (!empty($errores)): ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo $errores; ?>
                                                </div>
                                            <?php elseif (isset($enviado)): ?> 
                                                <div class="alert alert-success text-center" role="alert">
                                                    Sus datos han sido registrado Exitosamente
                                                </div>                                               
                                            <?php endif ?>
                                        </div>
                                        
                                        <div class="col-12">
                                            <input type="submit" name="submit" value="Registrar" onclick="login.submit()" class="btn btn-block btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
                                                        <!-- Seccion de Footer -->

    <footer class="footer container-fluid p-3 mt-3" id="navegador-tudiligenciaya">
        <nav class="navbar justify-content-center">
            <a class="text-muted">© Powered By JDeverloper 2018 +584241296335</a>
        </nav>
	</footer>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>