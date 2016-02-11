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


        <label>Estatica</label>
        <div class="progress">
            <div class="determinate" style="width: 70%"></div>
        </div>

        <label>Dinamica</label>
        <div class="progress">
            <div class="indeterminate"></div>
        </div>


        <label>Circular</label>
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only"> <!-- spinner-red spinner-yellow  spinner-green-->
                <!--Efecto 1, es un poco corto-->
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <!-- Div para ajustar tamaños -->
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <!--Efecto 2, es un poco corto, pero si se ejecuta en conjunto con el otro
                Hace un efecto largo-->
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>



