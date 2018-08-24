<?php 
    if(isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $cedula = $_POST['cedula'];
    $pais = $_POST['pais'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $passuno = $_POST['passuno'];
    $passdos = $_POST['passdos'];

    $errores = '';
    
    if(!empty($nombre)){
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        // $nombre = trim($nombre);
        // $nombre = htmlspecialchars($nombre);
        // $nombre = stripcslashes($nombre);
        echo "tu nombre es: $nombre <br>";
    } else {
        $errores .='Por favor ingresar el Nombre <br /> ';
    }

    if(!empty($apellido)){
        $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
        // $apellido = trim($apellido);
        // $apellido = htmlspecialchars($apellido);
        // $apellido = stripcslashes($apellido);
        echo "tu apellido es: $apellido <br>";
    } else {
        $errores .='Por favor ingresar el Apellido <br />';
    }

    if(!empty($correo)){
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        // $correo = trim($correo);
        // $correo = htmlspecialchars($correo);
        // $correo = stripcslashes($correo);
        echo "tu correo es: $correo <br>";
        if(filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor ingresa un correo valido <br />';
        }
    } else {
        $errores .='Por favor ingresar el Correo <br />';
    }
 
    if(!empty($usuario)){
        $usuario = filter_var($usuario, FILTER_SANITIZE_STRING);
        // $usuario = trim($usuario);
        // $usuario = htmlspecialchars($usuario);
        // $usuario = stripcslashes($usuario);
<<<<<<< HEAD:registrate.php
        echo "tu usuario es: $usuario <br>";
    } else {
        $errores .='Por favor ingresar el usuario <br />';
    }

    if(!empty($cedula)){
        $cedula = filter_var($cedula, FILTER_SANITIZE_STRING);
        // $cedula = trim($cedula);
        // $usuario = htmlspecialchars($cedula);
        // $usuario = stripslashes($cedula);
        echo "tu cedula es: $cedula <br />";
    }else {
        $errores .='Por favor ingresar la cedula <br />';
    }

    if(!empty($pais)){
        $pais = filter_var($pais, FILTER_SANITIZE_STRING);
        // $pais = trim($pais);
        // $pais = htmlspecialchars($pais);
        // $pais = stripcslashes($pais);
        echo "Tu pais es: $pais";
    } else{
        $errores .= 'Por favor ingresa el pais <br />';
    }

    if(!empty($direccion)){
        $direccion = filter_var($direccion, FILTER_SANITIZE_STRING);
        // $direccion = trim($direccion);
        // $direccion = htmlspecialchars($direccion);
        // $direccion = stripslashes($direccion);
    }else{
        $errores .= 'Por favor ingresar la direccion <br />';
    }

    if(!empty($telefono)){
        $telefono = filter_var($telefono, FILTER_SANITIZE_STRING);
        // $telefono = trim($telefono);
        // $telefono = htmlspecialchars($telefono);
        // $telefono = stripcslashes($telefono);
    }else{
        $errores .= 'Por favor ingresar un Nº Telefono <br />';
    }

    if(isset($sexo)){
        $sexo = $_POST['sexo'];
    }else{
        $errores .= 'Por favor ingresar un genero <br />';
    }
=======
        echo "tu usuario es: $correo <br>";
    } else {
        $errores .='Por favor ingresar el usuario <br />';
    }
>>>>>>> c301c25f479678ea6c48fe30c89c6aca2a1cbb7b:registrate.php
    
} 
    
?>

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
<!-- Errores de Validacion -->
        <div class="w-100"></div>
        <?php if(!empty($errores)): ?>
        <div><?php echo $errores; ?></div>
        <?php endif; ?>
        
	<div class="container-fluid">
        
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                <figure class="figure">
                    <img src="img/logo.png" alt="responsive image" class="img-fluid max-width: 100%; height: auto; mt-5" width="350">
                </figure>
            </div>
        </div>


                                                            <!-- Registro de formulario de Usuarios -->
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center mt-3">
                <div class="card" style="width: 750px;">
                    <div class="card-body">
                        <div class="card-title text-muted text-center"><h4>Crear cuenta</h4></div>
                        
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="" id="">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <label class="sr-only" for="nombre">Nombre</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="material-icons">face</i></div>
                                                </div>
                                                <input type="text" class="form-control form-control-lg" name="nombre" id="nombre" placeholder="Ingresar Nombre">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <label class="sr-only" for="apellido">Apellido</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="material-icons">face</i></div>
                                                </div>
                                                <input type="text" class="form-control form-control-lg" name="apellido" id="apellido" placeholder="Ingresar Apellido">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <label class="sr-only" for="email">Correo</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="material-icons">email</i></div>
                                                </div>
                                                <input type="email" class="form-control form-control-lg" name="correo" id="email" placeholder="Ingresar Correo">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <label class="sr-only" for="usuario">Usuario</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="material-icons">account_circle</i></div>
                                                </div>
                                                <input type="text" class="form-control form-control-lg" name="usuario" id="usuario" placeholder="Nombre de Usuario">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <label class="sr-only" for="cedula">Cedula</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text lead">V-</div>
                                                </div>
                                                <input type="text" class="form-control form-control-lg" name="cedula" id="cedula" placeholder="Cedula">
                                            </div>
                                        </div>
                                                            <!-- Seleccion de paises-->
                                        <div class="col-sm-12 col-md-6 col-lg-6">
<<<<<<< HEAD:registrate.php
                                            <select name="pais" class="custom-select custom-select-lg mb-3">
=======
                                            <select value="pais" name="pais" class="custom-select custom-select-lg mb-3">
>>>>>>> c301c25f479678ea6c48fe30c89c6aca2a1cbb7b:registrate.php
                                                <option selected>Pais donde se encuentra</option>
                                                <option value="AF">Afganistán</option>
                                                <option value="AL">Albania</option>
                                                <option value="DE">Alemania</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antártida</option>
                                                <option value="AG">Antigua y Barbuda</option>
                                                <option value="AN">Antillas Holandesas</option>
                                                <option value="SA">Arabia Saudí</option>
                                                <option value="DZ">Argelia</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaiyán</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrein</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BE">Bélgica</option>
                                                <option value="BZ">Belice</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermudas</option>
                                                <option value="BY">Bielorrusia</option>
                                                <option value="MM">Birmania</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BA">Bosnia y Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BR">Brasil</option>
                                                <option value="BN">Brunei</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="BT">Bután</option>
                                                <option value="CV">Cabo Verde</option>
                                                <option value="KH">Camboya</option>
                                                <option value="CM">Camerún</option>
                                                <option value="CA">Canadá</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CY">Chipre</option>
                                                <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comores</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, República Democrática del</option>
                                                <option value="KR">Corea</option>
                                                <option value="KP">Corea del Norte</option>
                                                <option value="CI">Costa de Marfíl</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="HR">Croacia (Hrvatska)</option>
                                                <option value="CU">Cuba</option>
                                                <option value="DK">Dinamarca</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egipto</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="AE">Emiratos Árabes Unidos</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="SI">Eslovenia</option>
                                                <option value="ES">España</option>
                                                <option value="US">Estados Unidos</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Etiopía</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="PH">Filipinas</option>
                                                <option value="FI">Finlandia</option>
                                                <option value="FR">Francia</option>
                                                <option value="GA">Gabón</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GD">Granada</option>
                                                <option value="GR">Grecia</option>
                                                <option value="GL">Groenlandia</option>
                                                <option value="GP">Guadalupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GY">Guayana</option>
                                                <option value="GF">Guayana Francesa</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GQ">Guinea Ecuatorial</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="HT">Haití</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HU">Hungría</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IQ">Irak</option>
                                                <option value="IR">Irán</option>
                                                <option value="IE">Irlanda</option>
                                                <option value="BV">Isla Bouvet</option>
                                                <option value="CX">Isla de Christmas</option>
                                                <option value="IS">Islandia</option>
                                                <option value="KY">Islas Caimán</option>
                                                <option value="CK">Islas Cook</option>
                                                <option value="CC">Islas de Cocos o Keeling</option>
                                                <option value="FO">Islas Faroe</option>
                                                <option value="HM">Islas Heard y McDonald</option>
                                                <option value="FK">Islas Malvinas</option>
                                                <option value="MP">Islas Marianas del Norte</option>
                                                <option value="MH">Islas Marshall</option>
                                                <option value="UM">Islas menores de Estados Unidos</option>
                                                <option value="PW">Islas Palau</option>
                                                <option value="SB">Islas Salomón</option>
                                                <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                                <option value="TK">Islas Tokelau</option>
                                                <option value="TC">Islas Turks y Caicos</option>
                                                <option value="VI">Islas Vírgenes (EEUU)</option>
                                                <option value="VG">Islas Vírgenes (Reino Unido)</option>
                                                <option value="WF">Islas Wallis y Futuna</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italia</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japón</option>
                                                <option value="JO">Jordania</option>
                                                <option value="KZ">Kazajistán</option>
                                                <option value="KE">Kenia</option>
                                                <option value="KG">Kirguizistán</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="LA">Laos</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LV">Letonia</option>
                                                <option value="LB">Líbano</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libia</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lituania</option>
                                                <option value="LU">Luxemburgo</option>
                                                <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MY">Malasia</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MV">Maldivas</option>
                                                <option value="ML">Malí</option>
                                                <option value="MT">Malta</option>
                                                <option value="MA">Marruecos</option>
                                                <option value="MQ">Martinica</option>
                                                <option value="MU">Mauricio</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">México</option>
                                                <option value="FM">Micronesia</option>
                                                <option value="MD">Moldavia</option>
                                                <option value="MC">Mónaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Níger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk</option>
                                                <option value="NO">Noruega</option>
                                                <option value="NC">Nueva Caledonia</option>
                                                <option value="NZ">Nueva Zelanda</option>
                                                <option value="OM">Omán</option>
                                                <option value="NL">Países Bajos</option>
                                                <option value="PA">Panamá</option>
                                                <option value="PG">Papúa Nueva Guinea</option>
                                                <option value="PK">Paquistán</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Perú</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PF">Polinesia Francesa</option>
                                                <option value="PL">Polonia</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="UK">Reino Unido</option>
                                                <option value="CF">República Centroafricana</option>
                                                <option value="CZ">República Checa</option>
                                                <option value="ZA">República de Sudáfrica</option>
                                                <option value="DO">República Dominicana</option>
                                                <option value="SK">República Eslovaca</option>
                                                <option value="RE">Reunión</option>
                                                <option value="RW">Ruanda</option>
                                                <option value="RO">Rumania</option>
                                                <option value="RU">Rusia</option>
                                                <option value="EH">Sahara Occidental</option>
                                                <option value="KN">Saint Kitts y Nevis</option>
                                                <option value="WS">Samoa</option>
                                                <option value="AS">Samoa Americana</option>
                                                <option value="SM">San Marino</option>
                                                <option value="VC">San Vicente y Granadinas</option>
                                                <option value="SH">Santa Helena</option>
                                                <option value="LC">Santa Lucía</option>
                                                <option value="ST">Santo Tomé y Príncipe</option>
                                                <option value="SN">Senegal</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leona</option>
                                                <option value="SG">Singapur</option>
                                                <option value="SY">Siria</option>
                                                <option value="SO">Somalia</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="PM">St Pierre y Miquelon</option>
                                                <option value="SZ">Suazilandia</option>
                                                <option value="SD">Sudán</option>
                                                <option value="SE">Suecia</option>
                                                <option value="CH">Suiza</option>
                                                <option value="SR">Surinam</option>
                                                <option value="TH">Tailandia</option>
                                                <option value="TW">Taiwán</option>
                                                <option value="TZ">Tanzania</option>
                                                <option value="TJ">Tayikistán</option>
                                                <option value="TF">Territorios franceses del Sur</option>
                                                <option value="TP">Timor Oriental</option>
                                                <option value="TG">Togo</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad y Tobago</option>
                                                <option value="TN">Túnez</option>
                                                <option value="TM">Turkmenistán</option>
                                                <option value="TR">Turquía</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UA">Ucrania</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistán</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="YE">Yemen</option>
                                                <option value="YU">Yugoslavia</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabue</option>
                                            </select>

                                            </select>
                                        </div>
                                                        <!-- Direccion del Usuario-->
                                        <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                                            <label class="sr-only" for="direccion">Direccion</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="material-icons">location_on</i></div>
                                                </div>
                                                <input type="text" class="form-control form-control-lg" name="direccion" id="direccion" placeholder="Direccion">
                                            </div>
                                        </div>
                                                            <!-- Telefono de usuarios-->
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <label class="sr-only" for="telefono">Telefono</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="material-icons">phone</i></div>
                                                </div>
                                                <input type="text" class="form-control form-control-lg" name="telefono" id="telefono" placeholder="Telefono">
                                            </div>
                                        </div>
                                        <!-- Seccion de generos-->
                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
                                            <h5 class="text-muted">Genero</h5>
                                            <div class="custom-control custom-radio custom-control-inline mt-0">
                                                <input type="radio" name="sexo" value="hombre" id="hombre" class="custom-control-input">
                                                <label class="custom-control-label" for="hombre">Hombre</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="sexo" value="mujer" id="mujer" class="custom-control-input">
                                                <label class="custom-control-label" for="mujer">Mujer</label>
                                            </div>
                                        </div>
                                                        <!-- Seccion de la contraseña-->
                                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                            <label class="sr-only" for="contraseña-uno">Contraseña</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="material-icons">lock_open</i></div>
                                                </div>
                                                <input type="password" class="form-control form-control-lg" name="passuno" id="contraseña-uno" placeholder="Contraseña">
                                            </div>
                                        </div>

                                        <div class="ccol-sm-12 col-md-6 col-lg-6 mb-3">
                                            <label class="sr-only" for="contraseña-dos">Contraseña</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="material-icons">lock_open</i></div>
                                                </div>
                                                <input type="password" class="form-control form-control-lg" name="passdos" id="contraseña-dos" placeholder="Repetir Contraseña">
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <input type="submit" value="Registrar" name="registrar" class="btn btn-block btn-primary">
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

    <footer class="container-fluid p-3 mt-3" id="navegador-tudiligenciaya">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 col-lg-3 text-center d-flex justify-content-center">
                    <figure class="figure">
                        <img src="img/logo.png" alt="responsive image" class="img-fluid max-width: 100%; height: auto; mt-5" width="300">
                        <small class="text-muted">@ Copyright Venezuela 2018</small>
                    </figure>
				</div>

				<div class="col-sm-12 col-md-3 col-lg-3">
					<h1 class="display-4 text-muted text-center">Inicio</h1>
						<ul class="nav flex-column text-center">
							<li class="nav-item">
								<a href="#LaEmpresa" class="nav-link">La Empresa</a>
							</li>

							<li class="nav-item">
								<a href="#Nosotros" class="nav-link">Nosotros</a>
							</li>

							<li class="nav-item">
								<a href="#Servicios" class="nav-link">Servicios</a>
							</li>

							<li class="nav-item">
								<a href="#Contacto" class="nav-link">Contacto</a>
							</li>
						</ul>
				</div>

				<div class="col-sm-12 col-md-3 col-lg-3">
					<h1 class="display-4 text-muted text-center">Siguenos</h1>
						<ul class="nav flex-column text-center">
							<li class="nav-item">
								<a href="https://www.facebook.com/tudiligenciaya2018/" class="nav-link">Facebook</a>
							</li>

							<li class="nav-item">
								<a href="https://www.instagram.com/tudiligenciaya/" class="nav-link">Instagram</a>
							</li>

							<li class="nav-item">
								<a href="https://twitter.com/tu_diligenciaya?lang=es" class="nav-link">Twitter</a>
							</li>
						</ul>
				</div>

				<div class="col-sm-12 col-md-3 col-lg-3">
					<h1 class="display-4 text-muted text-center">Contacto</h1>
						<ul class="nav flex-column text-center">
							<li class="nav-item">
								<p class="text-muted">Tlf.: +58424000000</p>
							</li>

							<li class="nav-item">
								<p class="text-muted">Tlf.: +58424000000</p>
							</li>

							<li class="nav-item">
								<p class="text-muted">Tlf.: +58424000000</p>
							</li>

							<li class="nav-item">
								<a href="#" class="text-muted">tudiligenciaya2018@gmail.com</a>
							</li>
						</ul>
				</div>
			</div>
        </div>
        <nav class="navbar navbar-light bg-light justify-content-center">
            <a class="text-muted">© Powered By JDeverloper 2018 +584241296335</a>
        </nav>
	</footer>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>