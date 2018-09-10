<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesion</title>
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
    
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                <figure class="figure">
                    <img src="img/iniciar.png" alt="responsive image" class="img-fluid max-width: 100%; height: auto; mt-5" width="150">
                </figure>
            </div>

            <div class="col-sm-12-col-md-12 col-lg-12 mt-3 d-flex justify-content-center">
                <div class="card" style="width: 400px;">
                    <h5 class="card-header">Iniciar Sesion</h5>
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="login" id="login" class="">
                                <div class="input-group mb-3">
                                    <label class="sr-only" for="usuario">Usuario</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="material-icons">account_circle</i></div>
                                        </div>
                                        <input type="text" name="usuario" class="form-control form-control-md" id="usuario" placeholder="Ingresar Usuario">
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <label class="sr-only" for="contraseña-uno">Contraseña</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="material-icons">lock_open</i></div>
                                        </div>
                                        <input type="password" name="passuno" class="form-control form-control-md" id="contrasela-uno" placeholder="Contraseña">
                                    </div>
                                </div>
                                        <div class="col-12">
                                            <!-- Errores de Validacion -->
                                            <div class="w-100"></div>
                                            <?php if (!empty($errores)): ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo $errores; ?>
                                                </div>                                            
                                            <?php endif ?>
                                        </div>
                                <a href="#" class="card-link">Recuperar Usuario</a>
                                <a href="#" class="card-link">¿Olvido su contraseña?</a>                                
                                <input type="submit" name="iniciar" value="Iniciar Sesion" onclick="login.submit()" class="btn btn-primary btn-block mt-3">
                            </form>
                        </div>                    
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid p-3 mt-3" id="navegador-tudiligenciaya" style="position: relative; bottom: 0%; width: 100%">
        <nav class="navbar justify-content-center">
            <a class="text-muted">© Powered By JDeverloper 2018 +584241296335</a>
        </nav>
	</footer>  

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>