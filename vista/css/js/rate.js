/*=============================================
                ELIMINAR RATE
=============================================*/

$('.administrarrate tbody').on("click", ".btn_eliminar_rate", function(){

    var idrate = $(this).attr("idrate");
    var activo = $(this).attr("activo");
  
    swal({
      title: '¿Está seguro de borrar el registro?',
      text: "¡Si no lo está puede cancelar la accíón!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
        cancelButtonColor: '#158EC5',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar el registro!'
    },function(result){

        if(result){
  
            window.location = "index.php?ruta=administrador_altas_bajas_rate&idrate=" + idrate + "&activo=" +activo;
  
        }
  
    })
  
  })
  
/*============ CERRANDO ELIMINAR RATE  ============*/