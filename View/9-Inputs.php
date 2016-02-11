<!DOCTYPE html>
<html>
    <head>
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../Recursos/materialize/css/materialize.min.css"  media="screen,projection"/>
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">-->

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../Recursos/jquery/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="../Recursos/materialize/js/materialize.min.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>-->
        <script type="text/javascript" src="../Recursos/js/inputs.js"></script>

        <!-- ICONOS ONLINE-->
        <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        <link href="../Recursos/materialize/css/icons.css" rel="stylesheet">




    </head>

    <body>


        <!-- Estilos que se deben añadir para cambiar los colores de los inputs
        /* label color */
   .input-field label {
     color: #000;
   }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #000;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #000;
   }        
        -->





        <!-- Los efectos de transicion en el texto se logran colocando el div con la clase .input-field -->
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                        <label for="disabled">Disabled</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input value="" id="first_name2" type="text" class="validate">
                        <label class="active" for="first_name2">First Name</label>
                    </div>
                </div>

                <label>Campo de texto con mensaje de error </label>


                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div>
                    </form>
                </div>

                <label>Textarea</label>

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Textarea</label>
                            </div>
                        </div>
                    </form>
                </div>


                <label>Selects, recordar inicializarlo con JQUERY</label>

                <div class="input-field col s12">
                    <select id="selectPrueba">
                        <option value="" selected>Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label>Materialize Select prueba</label>
                </div>

                <input  type="button" value="cambiar valor" onclick="cambiar()">


                <br>
                <br>
                <br><br>
                <br><br>

                <label>Browser Select</label>
                <select class="browser-default">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>


                <label>Browser Disabled</label>
                <select class="browser-default" disabled>
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>

        </div>


        <label>Radio</label>


        <form action="#">
            <p>
                <input name="group1" type="radio" id="test1" />
                <label for="test1">Red</label>
            </p>
            <p>
                <input name="group1" type="radio" id="test2" />
                <label for="test2">Yellow</label>
            </p>
            <p>
                <input class="with-gap" name="group1" type="radio" id="test3"  />
                <label for="test3">Green</label>
            </p>
            <p>
                <input name="group1" type="radio" id="test4" disabled="disabled" />
                <label for="test4">Brown</label>
            </p>
            <p>
                <input class="with-gap" name="group1" type="radio" id="test5" checked />
                <label for="test5">Blue</label>
            </p>
        </form>


        <label>Checkbox</label>

        <form action="#">           
            <p>
                <input type="checkbox" id="test6" checked="checked" />
                <label for="test6">Yellow</label>
            </p>
            <p>
                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                <label for="filled-in-box">Filled in</label>
            </p>
            <p>
                <input type="checkbox" id="test7" checked="checked" disabled="disabled" />
                <label for="test7">Green</label>
            </p>         
        </form>

        <label> Switches </label>

        <!-- Switch -->
        <div class="switch">
            <label>
                Off
                <input type="checkbox">
                <span class="lever"></span>
                On
            </label>
        </div>

        <!-- Disabled Switch -->
        <div class="switch">
            <label>
                Off
                <input disabled type="checkbox">
                <span class="lever"></span>
                On
            </label>
        </div>


        <label>Rangos</label>

        <form action="#">
            <p class="range-field">
                <input type="range" id="test5" min="0" max="100" />
            </p>
        </form>

        <label>Fechas</label>

        <input type="date" class="datepicker">



        <label>Paginadores</label>

        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>




    </body>
</html>



