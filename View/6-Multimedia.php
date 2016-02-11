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

        <label>Imagenes</label> 
        <img class="responsive-img" src="../Recursos/imagenes/anda-a-estudiar.jpg">



        <img class="responsive-img materialboxed" src="../Recursos/imagenes/anda-a-estudiar.jpg">


        <label>Carrusel</label>

        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="../Recursos/imagenes/carrusel/hormigas.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="../Recursos/imagenes/carrusel/atardecer.jpg"> <!-- random image -->
                    <div class="caption left-align">
                        <h3>Left Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="../Recursos/imagenes/carrusel/nubes.jpg"> <!-- random image -->
                    <div class="caption right-align">
                        <h3>Right Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="../Recursos/imagenes/carrusel/arboles.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
            </ul>
        </div>


        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row valign-wrapper">
                    <div class="col s2">
                        <img src="../Recursos/imagenes/anda-a-estudiar.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                    </div>
                    <div class="col s10">
                        <span class="black-text">
                            This is a square image. Add the "circle" class to it to make it appear circular.
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <div class="video-container">
            <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>


        <video poster autoplay class="responsive-video" controls>
            <source src="../Recursos/videos/big_buck_bunny.mp4" type="video/mp4">
        </video>


        <script>
            $(document).ready(function () {
                $('.slider').slider({full_width: true});
//                // Pause slider
//                $('.slider').slider('pause');
//                // Start slider
//                $('.slider').slider('start');

            });
        </script>


    </body>
</html>



