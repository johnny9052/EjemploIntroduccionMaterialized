<!DOCTYPE html>
<html>
    <head>
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../Recursos/materialize/css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../Recursos/jquery/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="../Recursos/materialize/js/materialize.min.js"></script>


        <!-- ICONOS ONLINE-->
        <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        <link href="../Recursos/materialize/css/icons.css" rel="stylesheet">
    </head>

    <body>



        <!-- Navbar goes here -->

        <nav>
            <ul id="slide-out" class="side-nav">                    
                <li><a href="#!">opcion #1</a></li>
                <li><a href="#!">opcion #2</a></li>                    
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header">Opcion #3<i class="mdi-navigation-arrow-drop-down"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#!">opcion #3.1</a></li>
                                    <li><a href="#!">opcion #3.2</a></li>
                                    <li><a href="#!">opcion #3.3</a></li>
                                    <li><a href="#!">opcion #3.4</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>



            <ul class="left hide-on-med-and-down">
                <li><a href="#!">Opcion #1</a></li>
                <li><a href="#!">Opcion #2</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Opcion #3<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Opcion #3.1</a></li>
                    <li><a href="#!">Opcion #3.2</a></li>
                    <li><a href="#!">Opcion #3.3</a></li>
                    <li><a href="#!">Opcion #3.4</a></li>
                </ul>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        </nav>

        <!-- 
        
                 Page Layout here -->
        <div class="row">



            <div class="col s12 green darken-1">
                Teal page content  
                CONTENIDO
            </div>

        </div>

        <!--        Si se quiere el footer estatico añadir lo siguiente en el css-->

        <!--        body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
                }
        
                main {
                flex: 1 0 auto;
                }-->




        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>


        <script>
            $(document).ready(function () {
                $('.dropdown-button').dropdown();
                $('.button-collapse').sideNav();
            });
        </script>






    </body>
</html>



