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
                                                    <div class="custom-file mb-2">
                                                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                                        <label class="custom-file-label" for="customFileLang">Adjuntar</label>
                                                    </div>
                                                    <button class="btn btn-outline-success btn-sm" type="submit" value="Enviar">Enviar</button>
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
                                                    <div class="custom-file mb-2">
                                                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                                        <label class="custom-file-label" for="customFileLang">Adjuntar</label>
                                                     </div>
                                                    <button class="btn btn-outline-success btn-sm" type="submit" value="Enviar">Enviar</button>
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
                                                    <div class="custom-file mb-2">
                                                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                                        <label class="custom-file-label" for="customFileLang">Adjuntar</label>
                                                    </div>
                                                    <button class="btn btn-outline-success btn-sm" type="submit" value="Enviar">Enviar</button>
                                                    <button class="btn btn-outline-danger btn-sm" type="submit" value="Eliminar">Eliminar</button>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- ///SECCION VISTA DE LOS USUARIOS -->
                            <div class="tab-pane fade" id="v-pills-usuario" role="tabpanel" aria-labelledby="v-pills-usuario-tab">
                                <h3 class="titulo">Usuarios</h3>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="card border-dark mb-2">
                                                <div class="card-header">
                                                    Usuario #1
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dicta tempora dolores blanditiis, vitae totam eaque maiores ipsum.</p>
                                                    <button class="btn btn-outline-primary btn-sm" type="submit" value="Editar">Editar</button>
                                                    <button class="btn btn-outline-danger btn-sm" type="submit" value="Eliminar">Eliminar</button>
                                                </div>  
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="card border-dark mb-2">
                                                <div class="card-header">
                                                    Usuario #2
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dicta tempora dolores blanditiis, vitae totam eaque maiores ipsum.</p>
                                                    <button class="btn btn-outline-primary btn-sm" type="submit" value="Editar">Editar</button>
                                                    <button class="btn btn-outline-danger btn-sm" type="submit" value="Eliminar">Eliminar</button>
                                                </div>  
                                            </div>
                                        </div>
                                    </div> 
                                </form>
                            </div>
                            <!-- ///SECCION SELECCIONAR SERVICIOS -->
                            <div class="tab-pane fade" id="v-pills-servicios" role="tabpanel" aria-labelledby="v-pills-servicios-tab">
                                <h3 class="titulo">Servicios</h3>
                                <form action="#">
                                    <div class="row">   
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="card text-center border-dark mb-2">
                                                <div class="card-header">
                                                    Servicio #1
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dicta tempora dolores blanditiis, vitae totam eaque maiores ipsum.</p>
                                                    <button class="btn btn-outline-primary btn-sm" type="submit">Solicitar Servicio</button>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="card text-center border-dark mb-2">
                                                <div class="card-header">
                                                    Servicio #1
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dicta tempora dolores blanditiis, vitae totam eaque maiores ipsum.</p>
                                                    <button class="btn btn-outline-primary btn-sm" type="submit">Solicitar Servicio</button>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="card text-center border-dark mb-2">
                                                <div class="card-header">
                                                    Servicio #1
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dicta tempora dolores blanditiis, vitae totam eaque maiores ipsum.</p>
                                                    <button class="btn btn-outline-primary btn-sm" type="submit">Solicitar Servicio</button>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="card text-center border-dark mb-2">
                                                <div class="card-header">
                                                    Servicio #1
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dicta tempora dolores blanditiis, vitae totam eaque maiores ipsum.</p>
                                                    <button class="btn btn-outline-primary btn-sm" type="submit">Solicitar Servicio</button>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="card text-center border-dark mb-2">
                                                <div class="card-header">
                                                    Servicio #1
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dicta tempora dolores blanditiis, vitae totam eaque maiores ipsum.</p>
                                                    <button class="btn btn-outline-primary btn-sm" type="submit">Solicitar Servicio</button>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="card text-center border-dark mb-2">
                                                <div class="card-header">
                                                    Servicio #1
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dicta tempora dolores blanditiis, vitae totam eaque maiores ipsum.</p>
                                                    <button class="btn btn-outline-primary btn-sm" type="submit">Solicitar Servicio</button>
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
                                                                    <input type="email" class="form-control form-control-md" id="email" placeholder="Ingresar Correo">
                                                                </div>
                                                            </div>
                                                            <!-- Pais de residencia -->
                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <select class="custom-select custom-select-md mb-3">
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