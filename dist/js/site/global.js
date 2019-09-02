var sUrlP = 'http://10.50.21.110/gestion/index.php/Panel/';

let Trabajador = {};

function consultar(){
    $('#divFamilia').html(HTMLTableFamiliar());

    var t = $('#tblFamilia').DataTable(
        {
           "paging":   false,
           "ordering": false,
           "searching": false,
           "info":     false

       }
    );
    t.clear().draw();
    
    var valor = $("#txtValor").val();
    ruta = sUrlP + "consultarTrabajador/" + valor;
    $.getJSON(ruta, function(data) { 
        $("#txtValor").val("");
        var Trabajador = data.DatosBasicos;
        //console.log(data);
        $("#cedula").val(Trabajador.cedula);
        $("#nombre").val(Trabajador.nombres);
        $("#fechana").val(Trabajador.fechanacimiento);
        $("#gerencia").val(Trabajador.unidadadscripcion);
        $("#puerto").val(Trabajador.puertoadscripcion);
        $("#nivelriesgo").val(Trabajador.nivelriesgo);
        var Familiar = data.Familiares;
        $.each(Familiar, function (clave, valor){
            if (valor.parentesco != 'TITULAR'){
                t.row.add( [
                    valor.cedula,
                    valor.nombre,
                    valor.parentesco,
                    valor.fechanac,
                    valor.estatus
                ] ).draw( false );
            }
            
        });

    } );
}

function HTMLTableFamiliar(){
    return `<table id="tblFamilia" class="table table-bordered table-hover">
    <thead>
       <tr>
          <th>CEDULA</th>
          <th>APELLIDOS Y NOMBRE</th>
          <th>PARENTESCO</th>
          <th>F. NACIMIENTO</th>
          <th>ESTATUS</th>
       </tr>   
    </thead>
    <tbody></tbody>
    <tfoot></tfoot>
  </table>`;
  
}