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




        botones

        <a class="waves-effect waves-light btn">Stuff</a>
        <a class="waves-effect waves-light btn">
            <i class="material-icons left">cloud</i>
            button</a>
        
        <a class="waves-effect waves-light btn">
            <i class="material-icons right">cloud</i>button</a>


        <br>

        Boton cirular

        <a class="btn-floating btn-large waves-effect waves-light red">
            <i class="material-icons">add</i></a>


        <!--Boton fijo-->

        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li>
                    <a class="btn-floating red">
                        <i class="material-icons">insert_chart</i>                                                    
                    </a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
            </ul>
        </div>


        <br>

        boton transparente

        <a class="waves-effect waves-teal btn-flat">Button</a>


        <br>

        submit

        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons">send</i>
        </button>

        <br>
        <br>

        Botones grandes

        <a class="waves-effect waves-light btn-large">Button</a>
        <a class="waves-effect waves-light btn-large"><i class="material-icons left"></i>button</a>
        <a class="waves-effect waves-light btn-large"><i class="material-icons right">cloud</i>button</a>


        <br>
        <br>

        botones deshabilidatos

        <a class="btn-large disabled">Button</a>
        <a class="btn disabled">Button</a>
        <a class="btn-flat disabled">Button</a>
        <a class="btn-floating disabled"><i class="material-icons">add</i></a>

    </body>
</html>



