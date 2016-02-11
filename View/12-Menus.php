<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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




            <!--Menu basico, logo a la izquierda, opciones a la derecha-->

            <!--                       <nav>
                                        <div class="nav-wrapper">
                                            <a href="#" class="brand-logo">Menu</a>
                        
                                            <ul id="nav-mobile" class="right hide-on-med-and-down">
                                                <li><a href="#">Enlace 1</a></li>
                                                <li><a href="#">Enlace 2</a></li>
                                                <li><a href="#">Enlace 3</a></li>
                                                <li><a href="#"><i class="mdi-action-account-circle"></i></a></li>
                                            </ul>
                                        </div>
                                    </nav>-->

            <!--************************************************************-->

            <!--Menu basico, logo a la derecha, opciones a la izquierda-->
<!--            <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo right">Menu</a>

                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li><a href="#">Enlace 1</a></li>
                        <li><a href="#">Enlace 2</a></li>
                        <li><a href="#">Enlace 3</a></li>
                        <li><a href="#"><i class="mdi-action-account-circle"></i></a></li>
                    </ul>
                </div>
            </nav>-->


            <!--************************************************************-->

            <!--Menu permanente-->
            <!--Encerrar todo en un div con la class navbar-fixed-->

<!--                        <div class="navbar-fixed">
                            <nav>
                                <div class="nav-wrapper">
                                    <a href="#" class="brand-logo right">Menu</a>
            
                                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                                        <li><a href="#">Enlace 1</a></li>
                                        <li><a href="#">Enlace 2</a></li>
                                        <li><a href="#">Enlace 3</a></li>
                                        <li><a href="#"><i class="mdi-action-account-circle"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>-->


            <!--************************************************************-->

            <!--Menu desplegable-->
            <!--cambian los ul dentro del div seguido del nav-->
            <!--            <nav>
                            <div class="nav-wrapper">
                                <a href="#" class="brand-logo right">Menu</a>
            
                                <ul class="dropdown-content" id="dropdownMenu">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">1</a></li>
                                </ul>
            
                                <ul id="nav-mobile" class="left hide-on-med-and-down">
                                    <li><a href="#">Enlace 1</a></li>
                                    <li><a href="#">Enlace 2</a></li>
                                    <li><a href="#">Enlace 3</a></li>
                                    <li>
                                        <a href="#!" class="dropdown-button" data-activates="dropdownMenu">Menu desplegable
                                            <i class="mdi-navigation-arrow-drop-down right"></i></a>                        
                                    </li>
                                </ul>
                            </div>
                        </nav>-->



            <!--************************************************************-->
            <!--             Menu desplegable movil y pc-->
            <!-- Recordar que son 2 veces el mismo menu para cada uno-->
            <!-- Cambian las clases que se les asignan a los ul-->

            <!--            <nav>
                            <div class="nav-wrapper">
                                <a href="#" class="brand-logo right">Menu</a>
            
                                <nav>
            
            
                                    <ul class="left hide-on-med-and-down">
                                        <li><a href="#!">First Sidebar Link</a></li>
                                        <li><a href="#!">Second Sidebar Link</a></li>                           
                                    </ul>
            
                                    <ul id="slide-out" class="side-nav">
                                        <li><a href="#!">First Sidebar Link</a></li>
                                        <li><a href="#!">Second Sidebar Link</a></li>                           
                                    </ul>
                                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                                </nav>
                            </div>
                        </nav>-->



            <!--************************************************************-->
            <!--             Menu desplegable movil con sub opciones-->
            <!-- Cambia practicamente todo dentro del nav-->
            
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


            <!--************************************************************-->
            <!--            Menu desplegable siempre movil sin importar el equipo-->


                     <!--   <nav>
                            <ul id="slide-out" class="side-nav">
                                <li><a href="#!">First Sidebar Link</a></li>
                                <li><a href="#!">Second Sidebar Link</a></li>
                            </ul>
                            <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
            
                        </nav>-->


            <script>
                $(document).ready(function () {
                    $('.dropdown-button').dropdown();
                    $('.button-collapse').sideNav();
                });
            </script>

        </body>
    </html>




</body>
</html>
