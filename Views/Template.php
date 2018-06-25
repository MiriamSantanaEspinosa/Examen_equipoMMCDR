<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 11:56 AM
 */

namespace Views;


new Template();
class Template
{
    public static function header()
    {
       ?>
        <!DOCTYPE html>
        <!------------------------------------------------------------------------------->
        <html lang="en">
        <!------------------------------------------------------------------------------->
        <head>
            <meta charset="UTF-8">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
            <link href="<?php echo URL?>/Public/css/style.min.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/custom.min.css" type="text/css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL?>/Public/style.css">
            <script type="text/javascript" src="<?php echo URL?>/Public/js/plugins/jquery-1.11.2.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
            <link href="Public/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
            <link href="Public/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


        <title>Inicio</title>
        </head>
            <header id="header" class="page-topbar" >
                <nav>
                    <div class="nav-wrapper blue" class="col s12 m11 " align="center">
                        <a href="#" class="brand-logo "></a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">


                        </ul>
                    </div>
                </nav>
            </header>

        <body>
        <main class="container">

        <div class="row" >
            <div class="col s12 m11 ">
                <div class="card center-align">
                    <div class="card-image">
                        <img src="Public/imagenes/LOGIO.PNG">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Primer Apellido" id="primer-apellido" type="text" >
                                        <label class="active" for="primer-apellido">Primer Apellido:</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="Telefono" id="telefono" type="text" >
                                        <label class="active" for="telefono">Telefono de Contacto:</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Segundo Apellido" id="segundo-apellido" type="text" >
                                        <label class="active" for="segundo-apellido">Segundo Apellido:</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="Email" id="email" type="email" >
                                        <label class="active" for="email">Email:</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Nombres" id="nombre" type="text" >
                                        <label class="active" for="nombre">Nombres:</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="Especialidad" id="especialidad" type="text" >
                                        <label class="active" for="especialidad">Especialidad:</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="No Cedula" id="cedula" type="text" >
                                        <label class="active" for="cedula">No Cedula:</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="Año de Titulacion" id="titulacion" type="text">
                                        <label class="active" for="titulacion">Año de titulación:</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Dirección:" id="dirección" type="text" >
                                        <label class="active" for="nombre">Dirección:</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="Codigo Minsa" id="codigo-minsa" type="text" >
                                        <label class="active" for="codigo-minsa">Especialidad:</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Ciudad" id="ciudad" type="text" >
                                        <label class="active" for="cedula">Ciudad:</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input placeholder="Años de Estudio" id="año-estudio" type="text" >
                                        <label class="active" for="titulacion">Año de Estudio:</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input col s3">
                                        <input type="checkbox" id="hospi" />
                                        <label for="hospi">Hospital</label>
                                    </div>

                                    <div class="input col s3">
                                        <input type="checkbox" id="insti" />
                                        <label for="insti">Institución</label>
                                    </div>

                                    <div class="input col s3">
                                        <input type="checkbox" id="estu" />
                                        <label for="estu">Estudiante</label>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col s12 m5">
                                        <IMG src="Public/imagenes/PRECONGRESO.PNG">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input col s6">
                                        <input type="checkbox" id="curso" name="curso" />
                                        <label for="curso">Curso de Insulinoterapia</label>
                                    </div>

                                    <div class="input col s6">
                                        <input type="checkbox" id="curso2"  name="curso2"/>
                                        <label for="curso2">Curso de Abordaje de Vía Aérea Difícil</label>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col s12 m5">
                                        <img src="Public/imagenes/22.PNG">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input col s6">
                                        <input type="checkbox" id="medcina-interna" name="medcina-interna" />
                                        <label for="medcina-interna">Medicina Interna-Medicina del Paciente critico, coordinador:</label>
                                    </div>

                                    <div class="input col s6">
                                        <input type="checkbox" id="pediatria"  name="pediatria"/>
                                        <label for="pediatria">Pediatria:</label>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="input col s6">

                                    </div>

                                    <div class="input col s6">
                                        <input type="checkbox" id="cirugia" name="cirugia"/>
                                        <label for="cirugia">Cirugia</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input col s6">
                                        <input type="checkbox" id="actualizacion"  name="actualizacion"/>
                                        <label for="actualizacion">Actualización en Enfermedad cardiovascular, Coordinador</label>
                                    </div>
                                    <div class="input col s6">
                                        <input type="checkbox" id="gineco"  name="gineco"/>
                                        <label for="gineco">gineco-Obtetricia, coordinador:</label>
                                    </div>
                                </div>
                                <br>
                                <div class="center">
                                    <a href="<?php echo URL?>empleados/print_pdf" target="_blank" id="imprimir_pdf" class="btn blue accent-3 white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Imprimir"><i class="material-icons">picture_as_pdf</i></a>
                                    <a href="#!"  id="graficar_empleados" class="btn blue accent-3 white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Graficar"><i class="material-icons">equalizer</i></a>
                                </div>
                                    <br>
                                <div id="modal_grafica" class="modal">
                                    <div class="modal-content">
                                        <h5>Gráfica de Empleados</h5>
                                        <p>

                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" id="cancelar" class="modal-close red white-text waves-effect waves-green btn-flat">Cerrar</a>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col s12 m5">
                                        <img src="Public/imagenes/3.PNG">
                                    </div>
                                </div>

                                <div class="row center-align">
                                    <div class="col s12 m5">
                                        <img src="Public/imagenes/4.PNG">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        </main>
        </body>
        <footer class="page-footer  blue">
            <div class="footer-copyright">
                <div class="container">
                    <span>Copyright © 2018 <a class="grey-text text-lighten-4"></a> TESVB</span>
                    <span class="right">601 <a class="grey-text text-lighten-4" ></a></span>
                </div>
            </div>
        </footer>
        <!------------------------------------------------------------>

        <!------------------------------------------------------------------------------->
        </html>
        <?php
    }
}

