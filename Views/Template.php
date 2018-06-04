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

        <title>Inicio</title>
        </head>
        <!------------------------------------------------------------------------------->

        <!------------------------------------------------------------>
            <header id="header" class="page-topbar">


        <nav>
            <div class="nav-wrapper blue">
                <a href="#" class="brand-logo "><img src="<?php echo URL?>/public/imagenes/logo.jpg" ></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">

                    <li><a href="sass.html">Inicio</a></li>
                    <li><a href="badges.html">Servicio</a></li>
                    <li><a href="collapsible.html">Planes especiales</a></li>
                    <li><a href="collapsible.html">Certificacion internacional</a></li>
                    <li><a href="collapsible.html">Sucursales</a></li>
                    <li><a href="collapsible.html">Contacto</a></li>
                </ul>
            </div>
        </nav>


            </header>
        <body>
        <!------------------------------------------------------------>

        <!------------------------------------------------------------>
        <main class="container">
            <div class="row">
                <div class="col offset-l3 l9 m12 s12">
        <?php
    }
    public static function footer()
    {
        ?>
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

