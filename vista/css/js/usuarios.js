
/*=============================================
                ELIMINAR USUARIO
=============================================*/

$('.adminusuarios tbody').on("click", ".btn_eliminar_usuario", function(){

    var idusuario = $(this).attr("idusuario");
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
  
            window.location = "index.php?ruta=administrador_altas_bajas_usuarios&idusuario=" + idusuario + "&activo=" +activo;
  
        }
  
    });
  
  });
  
/*============ CERRANDO ELIMINAR USUARIOS  ============*/

/*=============================================
                MOSTRAR USUARIO
=============================================*/

$('.adminusuarios tbody').on("click", ".btn_consultar_usuario", function(){

  var idusuariocambio = $(this).attr("idusuariocambio");

  var datos = new FormData();
  datos.append("idusuariocambio", idusuariocambio);

  $.ajax({
    url:"ajax_usuario/usuarios.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success:function(valor){
    
      document.getElementById("departamentomodif").value = valor["nombre_departamento"];
      document.cambiousuario.departamentomodif.value = valor["id_departamento"];

      document.getElementById("accesomodif").value = valor["tipo_acceso"];
      document.cambiousuario.accesomodif.value = valor["id_acceso"];

      document.cambiousuario.numeromodif.value = valor["numero_empleado"];
      document.cambiousuario.nombremodif.value = valor["nombre_completo"];
      document.cambiousuario.correomodif.value = valor["correo_electronico"];
      document.cambiousuario.usuariomodif.value = valor["usuario"];
      document.cambiousuario.idusuariomodif.value = valor["id_usuario"];
    
    }

  });

});

/*============ CERRANDO MOSTRAR USUARIOS  ============*/

/*=============================================
                MOSTRAR RATE
=============================================*/

$('.administrarrate tbody').on("click", ".btn_consultar_rate", function(){

  var idrateconsulta = $(this).attr("idrateconsulta");

  var datos = new FormData();
  datos.append("idrateconsulta", idrateconsulta);

  $.ajax({
    url:"ajax_usuario/rate.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success:function(valo2){
    
      document.cambiorate.idratemodif.value = valo2["id_rate"];
      document.getElementById("turnomodif").value = valo2["nombre_turno"];
      document.cambiorate.turnomodif.value = valo2["id_turno"];
      document.getElementById("areamodif").value = valo2["nombre_area"];
      document.cambiorate.areamodif.value = valo2["id_area"];
      document.getElementById("estacionmodif").value = valo2["nombre_estacion"];
      document.cambiorate.estacionmodif.value = valo2["id_estacion"];
      document.cambiorate.ratemodif.value = valo2["rate"];
      document.cambiorate.rate_desdemodif.value = valo2["rate_desde"];
      document.cambiorate.rate_hastamodif.value = valo2["rate_hasta"];
    
    }

  });

});

/*============ CERRANDO MOSTRAR RATE  ============*/
