function desplegarNotas(){
    var settings = {
        "url": "http://localhost/proyectoProgra/ws/ws_notas.php?accion=listar_notas",
        "method": "POST",
        "timeout": 0,
      };
      $.ajax(settings).done(function (response) {

        console.log(response)
        // console.log(response);
        $( ".grades" ).append(response);
      });
}

function desplegarNota(id_usuario){
    var settings = {
        "url": "http://localhost/proyectoProgra/ws/ws_notas.php?accion=obtener_nota&id_usuario="+id_usuario,
        "method": "POST",
        "timeout": 0,
      };
      
      $.ajax(settings).done(function (response) {
        // console.log(response);
        $( ".grades" ).append(response);
      });
}

$(".desplegar_notas_button").click(function(){
    $(".desplegar_notas_button").hide();
  });

function borrarUsuario(id_usario){


    var settings = {
      "url": "http://localhost/proyectoProgra/ws/ws_notas.php?accion=borrar_usuario&id_usuario="+id_usario,
      "method": "POST",
      "timeout": 0,
    };
  
    $.ajax(settings).done(function (response) {
        // $( ".grades" ).html("");
        console.log(response)
        // desplegarContenidoUsuarios();
    });
  
  }


function editarNota(id_usuario){
    
    var settings = {
        "url": "http://localhost/proyectoProgra/index.php?accion=abrirFormActualizarNotas&id_usuario="+id_usuario,
        "method": "POST",
        "timeout": 0,
        };
        
        
        
        $.ajax(settings).done(function (response) {
        $( "body" ).html("");
        $( "body" ).html(response);
        });      
}

window.onload = function() {
    // desplegarNotas()
    // desplegarNota()
   }