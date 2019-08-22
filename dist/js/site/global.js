var sUrlP = 'http://10.50.21.110/gestion/index.php/Panel/';

let Trabajador = {};

function consultar(){
    var valor = $("#txtValor").val();
    ruta = sUrlP + "consultarTrabajador/" + valor;
    $.getJSON(ruta, function(data) {
        $("#txtValor").val("");
        Trabajador = data;
        //console.log(data);
        $("#cedula").val(Trabajador.cedula);
        $("#nombre").val(Trabajador.nombres);
        $("#fechana").val(Trabajador.fechanacimiento);
        $("#gerencia").val(Trabajador.unidadadscripcion);
        $("#puerto").val(Trabajador.puertoadscripcion);
        $("#nivelriesgo").val(Trabajador.nivelriesgo);
        
    } );


}