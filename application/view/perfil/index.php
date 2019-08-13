<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>SisHorario | </title>
        <!-- Icono -->
        <link rel="icon" type="text/css" href="<?php echo URL; ?>img/Logologin2.png">
        <!-- Bootstrap Estilos -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/bootstrap.css">
        <!-- hoja de Estilo FontAwesome -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/all.css">
        <!-- Mis Estilos -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/estilo.css">
    </head>
    <body>

        <!-- Menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-success"  name="<?php echo URL; ?>primary">
            <a class="text-light navbar-brand" href="index.html"><img class="col-sm-4 img-fluid" src="<?php echo URL; ?>img/descarga.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <h2 class="text-light"></h2>
                </ul>
                <ul class="navbar-nav my-2 my-lg-0">
                    <div class="btn-group">
                        <a class="text-light activate dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>&nbsp;
                            <?php echo $_SESSION['usuario']; ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a  href="<?php echo URL; ?>login/closeSession">
                                <button class="dropdown-item" type="button" >Cerrar Sesión</button>
                            </a>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>

        <section class="container" method="POST"  action="<?php echo URL; ?>perfil/index">

            <div class="row">
                <!-- Lateral -->

                <aside class="col-sm-3">

                    <!-- Lateral -->	
                    <img class="col-sm-12" src="<?php echo URL; ?>img/Perfil.png">

                    <?php foreach ($usuario as $Usuarios) { ?>
                        <h4 class="text-center"> <?php echo $Usuarios->nombre; ?></h4>

                        <h5 class="text-center"><?php echo $Usuarios->apellido; ?></h5>

                        <article class="col-sm-12 text-center">
                            Correo: <?php echo $Usuarios->correo; ?> <br>
                            Telefono: <?php echo $Usuarios->telefono; ?> <br><br>
                            <button class="btn-secondary btn" class="btn btn-info"><i class="fas fa-edit"></i>&nbsp;Editar</button>
                        </article>
                        <!--                        <div class="col-sm-12 mt-3">
                                                    <div class="table-responsive">
                                                        <table class="table-sm table-bordered">
                                                            <tr class="text-center">
                                                                <th class="bg-dark text-light">Formación</th>
                                                                <td class="text-dark text-center">30</td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                <th class="bg-dark text-light">Investigación</th>
                                                                <td class="text-dark">7</td>
                                                            </tr>
                                                            <tr class="text-center">
                                                                <th class="bg-dark text-light">AutoEvaluación</th>
                                                                <td class="text-dark">0</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mt-2">
                                                    <h5 class="text-primary">Total Horas Semana:</h5>
                                                    <h2 class="text-center">40</h2>
                                                </div>-->



                    </aside>
                
            
            <section class="col-sm-8 mt-3">
                <!-- Perfil Usuario -->
                <div class="card mt-2">
                    <div class="card-header text-right bg-primary">
                        <h5 class="text-light">HORARIO INSTRUCTOR TRIMESTRE II</h5>
                    </div>
                    <div class="card-body row">
                        <!-- Cabecera de horas -->

                        <!-- Fin Cabecera -->
                        <!-- Tabla de Horarios -->
                        <div class="col-sm-12 mt-2">
                            <div class="table-responsive">
                                <table class="table-bordered">
                                    <thead class="text-center text-light bg-success px-2">
                                        <tr>
                                            <th>Día - Hora</th>
                                            <th>6 AM - 9AM</th>
                                            <th>9 AM - 12 M</th>
                                            <th>12 M - 3 PM</th>
                                            <th>3 PM - 6 PM</th>
                                            <th>6 PM - 9 PM</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Lunes</th>
                                            <td>
                                                AP16
                                                Ejecutar y documentar pruebas al sistema de informacion
                                                1565724-1592297
                                            </td>
                                            <td>
                                                AP16
                                                Ejecutar y documentar pruebas al sistema de informacion
                                                1565724-1592297
                                            </td>
                                            <td>
                                                AP02-AP12-AP14
                                                ARQUITECTURA
                                                ADSI 1800890
                                            </td>
                                            <td>
                                                AP02-AP12-AP14
                                                ARQUITECTURA
                                                ADSI 1800890
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Martes</th>
                                            <td>
                                                AP02-AP12-AP14
                                                ARQUITECTURA 1800888

                                            </td>
                                            <td>
                                                AP02-AP12-AP14
                                                ARQUITECTURA 1800888

                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Miércoles</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>INVESTIGACIÓN</td>
                                            <td>
                                                AP05_MANTENER NIVELES DE SERVICIO REQUERIDOS POR LA ORGANIZACIÓN
                                                - BIG DATA
                                                1751438
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Jueves</th>
                                            <td>
                                                AP16
                                                ASESORIAS DE PROYECTO
                                                1565724-1592297
                                            </td>
                                            <td>
                                                AP16
                                                ASESORIAS DE PROYECTO
                                                1565724-1592297
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Viernes</th>
                                            <td>
                                                AP11 JAVA ESCRITORIO
                                            </td>
                                            <td>
                                                AP11 JAVA ESCRITORIO
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Sábado</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Domingo</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


</div>
        </section>
    <?php } ?>
    <!-- Javascripts : 1.jquery 2.popper 3.bootstrap 4.fontawesome-->
    <script src="<?php echo URL; ?>js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo URL; ?>js/popper.min.js"></script>
    <script src="<?php echo URL; ?>js/bootstrap.js"></script>
    <script src="<?php echo URL; ?>js/all.js"></script>
</body>
</html>