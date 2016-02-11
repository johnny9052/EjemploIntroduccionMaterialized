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


        <label>Toast</label>
        <a class="btn" onclick="Materialize.toast('I am a toast', 4000); // 4000 is the duration of the toast">Toast!</a>

        <label>Toast personalizado</label>
        <a class="waves-effect waves-light btn" onclick="Materialize.toast('<span>Item Deleted</span>&nbsp;&nbsp;&nbsp;<a>Undo<a>', 5000)">Toast!</a>

        <label>Accion despues del toast</label>
        <a class="btn" onclick="Materialize.toast('I am a toast', 4000, '', function () {
                    alert('Your toast was dismissed')
                })">Toast!</a>

        <label>Toast Redondeado</label>

        <a class="waves-effect waves-light btn" onclick="Materialize.toast('I am a toast!', 3000, 'rounded') // 'rounded' is the class I'm applying to the toast">Toast!</a>


        <label>Tooltip</label>
        <!-- data-position can be : bottom, top, left, or right -->
        <!-- data-delay controls delay before tooltip shows (in milliseconds)-->
        <a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">Hover me!</a>


    </body>
</html>



