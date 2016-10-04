$(document).ready(function () {
    $('select').material_select();
    //$('select').material_select('destroy');//Si se quieren añadir nuevos elementos al select, debe 
    //destruirse con esta instruccion, para luego añadirle nuevos elementos.

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });

});


function cambiar() {
       
    var combo = document.getElementById("selectPrueba");

    while (combo.length > 1) {
        combo.remove(combo.length - 1);
    }

    combo.options[combo.length] = new Option("nombre 1", "1");
    combo.options[combo.length] = new Option("nombre 2", "2");
    combo.options[combo.length] = new Option("nombre 3", "3");
    $("#selectPrueba").val(-1);
    $('#selectPrueba').material_select('destroy');
    $('#selectPrueba').material_select();

    
}
            