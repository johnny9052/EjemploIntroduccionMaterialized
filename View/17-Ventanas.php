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


        <label>Modal basico</label>
        <!-- Modal Trigger -->
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

        <!-- Modal Structure -->
        <div id="modal1" class="modal modal-fixed-footer"><!--La clase modal-fixed-footer es para ajustar el texto cuando es demasiado largo-->
            <div class="modal-content">
                <h4>Modal Header</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>
      

        <label>Modal desde la parte inferior</label>

        <!-- Modal Trigger -->
        <a class="waves-effect waves-light btn modal-trigger" href="#modal3">Modal</a>

        <!-- Modal Structure -->
        <div id="modal3" class="modal bottom-sheet">
            <div class="modal-content">
                <h4>Modal Header</h4>
                <p>A bunch of text</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>



        <script>
            $(document).ready(function () {
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();


                //Para programarlos
                //$('#modal1').openModal();//ABRIR MODAL
                //  $('#modal1').closeModal();//CERRAR MODAL

                //configuracion completa
                /*
                 
                 $('.modal-trigger').leanModal({
                 dismissible: true, // Modal can be dismissed by clicking outside of the modal
                 opacity: .5, // Opacity of modal background
                 in_duration: 300, // Transition in duration
                 out_duration: 200, // Transition out duration
                 ready: function() { alert('Ready'); }, // Callback for Modal open
                 complete: function() { alert('Closed'); } // Callback for Modal close
                 }
                 ); 
                 */
            });
        </script>
    </body>
</html>



