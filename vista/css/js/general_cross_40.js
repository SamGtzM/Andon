/*=============================================
    CARGAR DATOS DINAMICOS GENERAL CROSS_40
=============================================*/

function cambio_cross_40(){}

auxiliar1_cross_40 = "";
auxiliar2_cross_40 = "";

st1_cross_40 = "";
st2_cross_40 = "";

setInterval((function(){

  $.ajax({

      url:"ajax_cross_40/general_cross_40.ajax.php",
      method:"POST",
      cache: false,
      processData: false,
      dataType: "json",
      success:function(valor){

        if (valor["status_crossmember_40_mantenimiento"] == 0 && (valor["inicio_ciclo_crossmember_40"] == 1 || valor["fin_ciclo_crossmember_40"] == 1)) {

          var fallaok = "ESPERA";
          document.cross.status_cross_40.value = fallaok;
          cross_40_status.style.backgroundColor="transparent";

        } else if(valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_calidad"] == 0 && valor["status_crossmember_40_produccion"] == 0 && valor["status_crossmember_40_logistica"] == 0){

          var fallamtto = "MTTO";
          document.cross.status_cross_40.value = fallamtto;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_mantenimiento"] == 0 && valor["status_crossmember_40_produccion"] == 0 && valor["status_crossmember_40_logistica"] == 0){

          var fallacalidad = "CAL";
          document.cross.status_cross_40.value = fallacalidad;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_mantenimiento"] == 0 && valor["status_crossmember_40_calidad"] == 0 && valor["status_crossmember_40_logistica"] == 0){

          var fallaproduccion = "PROD";
          document.cross.status_cross_40.value = fallaproduccion;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_mantenimiento"] == 0 && valor["status_crossmember_40_calidad"] == 0 && valor["status_crossmember_40_produccion"] == 0){

          var fallalogistica = "LOG";
          document.cross.status_cross_40.value = fallalogistica;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_produccion"] == 0 && valor["status_crossmember_40_logistica"] == 0){

          var fallamantenimientocalidad = "MTTO,CAL";
          document.cross.status_cross_40.value = fallamantenimientocalidad;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_calidad"] == 0 && valor["status_crossmember_40_logistica"] == 0){

          var fallamantenimientoproduccion = "MTTO,PROD";
          document.cross.status_cross_40.value = fallamantenimientoproduccion;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_produccion"] == 0 && valor["status_crossmember_40_calidad"] == 0){

          var fallamantenimientologistica = "MTTO,LOG";
          document.cross.status_cross_40.value = fallamantenimientologistica;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_produccion"] == 0 && valor["status_crossmember_40_logistica"] == 0){

          var fallacalidadmantenimiento = "CALI,MTTO";
          document.cross.status_cross_40.value = fallacalidadmantenimiento;
          cross_40_status.style.backgroundColor="red";

        }  else if(valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_mantenimiento"] == 0 && valor["status_crossmember_40_logistica"] == 0){

          var fallacalidadproduccion = "CAL,PROD";
          document.cross.status_cross_40.value = fallacalidadproduccion;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_produccion"] == 0 && valor["status_crossmember_40_mantenimiento"] == 0){

          var fallacalidadlogistica = "CAL,LOG";
          document.cross.status_cross_40.value = fallacalidadlogistica;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_calidad"] == 0 && valor["status_crossmember_40_logistica"] == 0){

          var fallaproduccionmantenimiento = "PROD,MTTO";
          document.cross.status_cross_40.value = fallaproduccionmantenimiento;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_mantenimiento"] == 0 && valor["status_crossmember_40_logistica"] == 0){

          var fallaproduccioncalidad = "PROD,CAL";
          document.cross.status_cross_40.value = fallaproduccioncalidad;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_calidad"] == 0 && valor["status_crossmember_40_mantenimiento"] == 0){

          var fallaproduccionlogistica = "PROD,LOG";
          document.cross.status_cross_40.value = fallaproduccionlogistica;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_produccion"] == 0 && valor["status_crossmember_40_calidad"] == 0){

          var falllogisticamantenimiento = "LOG,MTTO";
          document.cross.status_cross_40.value = falllogisticamantenimiento;
          cross_40_status.style.backgroundColor="red";

        }else if(valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_produccion"] == 0 && valor["status_crossmember_40_mantenimiento"] == 0){

          var falllogisticacalidad = "LOG,CAL";
          document.cross.status_cross_40.value = falllogisticacalidad;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_calidad"] == 0 && valor["status_crossmember_40_mantenimiento"] == 0){

          var falllogistiproduccion = "LOG,PROD";
          document.cross.status_cross_40.value = falllogistiproduccion;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_logistica"] == 0){

          var fallamantenimientocalidadproduccion = "M,C,P";
          document.cross.status_cross_40.value = fallamantenimientocalidadproduccion;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_calidad"] == 0){

          var fallamantenimientoproduccionlogistica = "M,P,L";
          document.cross.status_cross_40.value = fallamantenimientoproduccionlogistica;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_produccion"] == 0){

          var fallamantenimientologisticacalidad = "M,L,C";
          document.cross.status_cross_40.value = fallamantenimientologisticacalidad;
          cross_40_status.style.backgroundColor="red";

        }else if(valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_mantenimiento"] == 0){

          var fallacalidadproduccionlogistica = "C,P,L";
          document.cross.status_cross_40.value = fallacalidadproduccionlogistica;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_produccion"] == 0){

          var fallacalidadlogisticamantenimiento = "C,L,M";
          document.cross.status_cross_40.value = fallacalidadlogisticamantenimiento;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_logistica"] == 0){

          var fallacalidadmantenimientoproduccion = "C,M,P";
          document.cross.status_cross_40.value = fallacalidadmantenimientoproduccion;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_calidad"] == 0){

          var fallaproduccionlogisticamantenimiento = "P,L,M";
          document.cross.status_cross_40.value = fallaproduccionlogisticamantenimiento;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_mantenimiento"] == 0){

          var fallaproduccioncalidadlogistica = "P,C,L";
          document.cross.status_cross_40.value = fallaproduccioncalidadlogistica;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_logistica"] == 0){

          var fallaproduccionmantenimientocalidad = "P,M,C";
          document.cross.status_cross_40.value = fallaproduccionmantenimientocalidad;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_mantenimiento"] == 0){

          var fallalogisticacalidadproduccion = "L,C,P";
          document.cross.status_cross_40.value = fallalogisticacalidadproduccion;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_calidad"] == 0){

          var fallalogisticaproduccionmantenimiento = "L,P,M";
          document.cross.status_cross_40.value = fallalogisticaproduccionmantenimiento;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_logistica"] == 1 && valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_produccion"] == 0){

          var fallalogisticamantenimientocalidad = "L,M,C";
          document.cross.status_cross_40.value = fallalogisticamantenimientocalidad;
          cross_40_status.style.backgroundColor="red";

        } else if(valor["status_crossmember_40_mantenimiento"] == 1 && valor["status_crossmember_40_calidad"] == 1 && valor["status_crossmember_40_produccion"] == 1 && valor["status_crossmember_40_logistica"] == 1){

          var fallamantenimientocalidadproduccionlogistica = "M,C,P,L";
          document.cross.status_cross_40.value = fallamantenimientocalidadproduccionlogistica;
          cross_40_status.style.backgroundColor="red";

        }

      }

  });


  
/*============ CERRANDO CARGAR DATOS DINAMICOS GENERAL CROSS_40  ============*/

/*=============================================
                 HORA CROSS_40
=============================================*/

$(function() {
    function mostrarHora_cross_40() {
      var fecha = new Date(), // nuevo objeto Fecha
          hora = fecha.getHours() + ":" + fecha.getMinutes() + ":" + fecha.getSeconds();
      document.cross.hora_cross_40.value = hora;
    }
    setInterval(mostrarHora_cross_40, 1000); // la función "mostrarHora_cross_40" se ejecuta cada segundo
});
  
/*============ CERRANDO HORA CROSS_40  ============*/

/*=============================================
                  RATE CROSS_40
=============================================*/

  $.ajax({

      url:"ajax_cross_40/general_cross_40_rate.ajax.php",
      method:"POST",
      cache: false,
      processData: false,
      dataType: "json",
      success:function(valor2){

        if(valor2 == null || valor2 == ""){

          var rateerror = "0";
          document.cross.rate_cross_40.value = rateerror;

        } else {

          var rate = valor2["rate"];
          document.cross.rate_cross_40.value = rate;

        }

      }

    });
  
/*============ CERRANDO RATE CROSS_40  ============*/

/*=============================================
              PRODUCIDO CROSS_40
=============================================*/

  $.ajax({

      url:"ajax_cross_40/general_cross_40_producido.ajax.php",
      method:"POST",
      cache: false,
      processData: false,
      dataType: "json",
      success:function(valor3){

        let date_ob = new Date();
        let date = ("0" + date_ob.getDate()).slice(-2);
        let month = ("0" + (date_ob.getMonth() + 1)).slice(-2);
        let year = date_ob.getFullYear();
        let hours = date_ob.getHours();
        let minutes = date_ob.getMinutes();
        let seconds = date_ob.getSeconds();
        var fh = (year + "-" + month + "-" + date + " " + hours + ":" + minutes + ":" + seconds);

        if(valor3["producido"] != document.cross.producido_cross_40.value){
          
          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){



                }
            });

          });
          
        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '6:0:0'){
          
          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '7:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '8:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '9:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '10:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '11:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '12:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '13:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '14:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '14:30:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '15:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '16:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '17:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '18:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '19:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '20:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '21:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '22:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '22:30:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '23:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '0:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '1:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '2:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '3:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '4:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        } else if(document.cross.producido_cross_40.value == 0 && document.cross.hora_cross_40.value == '5:0:0'){

          $("#producido_cross_40").ready(function(){
            
            var are = "3";
            var est = "8";
            var tur = document.cross.turnocross.value;
            var ra = document.cross.rate_cross_40.value;
            var pd = valor3["producido"];
            var oe = document.cross.oee_cross_40.value;
            var ac = valor3["acumulado_crossmember_40"];
            var fha = fh;

            var datos = new FormData();
            datos.append("are", are);
            datos.append("est", est);
            datos.append("tur", tur);
            datos.append("ra", ra);
            datos.append("pd", pd);
            datos.append("oe", oe);
            datos.append("ac", ac);
            datos.append("fha", fha);

            $.ajax({
                url:"ajax_cross_40/general_cross_40_insert_general.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                }
            });

          });

        }

        if(valor3 == null || valor3 == ""){

          var producidoerror = "0";
          document.cross.producido_cross_40.value = producidoerror;

        } else if(valor3 != null || valor3 != "") {

          var producido = valor3["producido"];
          document.cross.producido_cross_40.value = producido;            

        }

        /*=============================================
                  OEE CROSS_40
        =============================================*/
    
          $.ajax({

            url:"ajax_cross_40/general_cross_40_oee_diferencia_paros.ajax.php",
            method:"POST",
            cache: false,
            processData: false,
            dataType: "json",
            success:function(valor73){

              if(valor73["diferencia"] == 0 || valor73["diferencia"] == "" || valor73["diferencia"] == null){

                var tiempoactividad = (3600 - 0);

                var disponibilidad = (tiempoactividad / 3600);

                var desempeño = ((parseInt(document.cross.producido_cross_40.value) / (parseInt(document.cross.rate_cross_40.value) * 1)));

                var calidad = ((parseInt(document.cross.producido_cross_40.value - 0)) / (parseInt(document.cross.producido_cross_40.value)));  

                var total = ((((disponibilidad) * (desempeño) * (calidad)) * 100).toFixed(0));

                if (total == "" || total == null || total == "NaN"){

                  document.cross.oee_cross_40.value = "0";

                } else {

                  document.cross.oee_cross_40.value = total;

                }

              } else {
                
                var tiempoactividad = (3600 - parseInt(valor73["diferencia"]));

                var disponibilidad = (tiempoactividad / 3600);

                var desempeño = ((parseInt(document.cross.producido_cross_40.value) / (parseInt(document.cross.rate_cross_40.value) * 1)));

                var calidad = ((parseInt(document.cross.producido_cross_40.value - 0)) / (parseInt(document.cross.producido_cross_40.value)));  

                var total = ((((disponibilidad) * (desempeño) * (calidad)) * 100).toFixed(0));

                if (total == "" || total == null || total == "NaN"){

                  document.cross.oee_cross_40.value = "0";

                } else {

                  document.cross.oee_cross_40.value = total;

                }

              }

            }

          });

        /*============ CERRANDO OEE CROSS_40  ============*/

      }

    });

/*============ CERRANDO PRODUCIDO CROSS_40  ============*/

/*=============================================
              ACUMULADO CROSS_40
=============================================*/

  $.ajax({

      url:"ajax_cross_40/general_cross_40_acumulado.ajax.php",
      method:"POST",
      cache: false,
      processData: false,
      dataType: "json",
      success:function(valor4){

        if(valor4 == null || valor4 == ""){

          var acumuladoerror = "0";
          document.cross.producido_cross_40.value = acumuladoerror;

        } else {

          var acumulado = valor4["acumulado_crossmember_40"];
          document.cross.acumuladas_cross_40.value = acumulado;

        }

      }

    });

/*============ CERRANDO ACUMULADO CROSS_40  ============*/

/*=============================================
                  TURNO CROSS_40
=============================================*/

  $.ajax({

    url:"ajax_cross_40/general_cross_40_turno.ajax.php",
    method:"POST",
    cache: false,
    processData: false,
    dataType: "json",
    success:function(valor5){

      

      if(valor5["id_turno"] != document.cross.turnocross.value || document.cross.hora_cross_40.value == '6:0:0' || document.cross.hora_cross_40.value == '14:30:0' || document.cross.hora_cross_40.value == '22:30:0'){

          document.cross.turnoprodgeneralc1_40.value = "";
          document.cross.producedgeneralc1_40.value = "";
          document.cross.rategeneralc1_40.value = "";
          document.cross.statusgeneralc1_40.value = "";
          document.cross.reasongeneralc1_40.value = "";
          cross_40_status_ok_1.style.backgroundColor="transparent";
          cross_40_reson_1.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc2_40.value = "";
          document.cross.producedgeneralc2_40.value = "";
          document.cross.rategeneralc2_40.value = "";
          document.cross.statusgeneralc2_40.value = "";
          document.cross.reasongeneralc2_40.value = "";
          cross_40_status_ok_2.style.backgroundColor="transparent";
          cross_40_reson_2.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc3_40.value = "";
          document.cross.producedgeneralc3_40.value = "";
          document.cross.rategeneralc3_40.value = "";
          document.cross.statusgeneralc3_40.value = "";
          document.cross.reasongeneralc3_40.value = "";
          cross_40_status_ok_3.style.backgroundColor="transparent";
          cross_40_reson_3.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc4_40.value = "";
          document.cross.producedgeneralc4_40.value = "";
          document.cross.rategeneralc4_40.value = "";
          document.cross.statusgeneralc4_40.value = "";
          document.cross.reasongeneralc4_40.value = "";
          cross_40_status_ok_4.style.backgroundColor="transparent";
          cross_40_reson_4.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc5_40.value = "";
          document.cross.producedgeneralc5_40.value = "";
          document.cross.rategeneralc5_40.value = "";
          document.cross.statusgeneralc5_40.value = "";
          document.cross.reasongeneralc5_40.value = "";
          cross_40_status_ok_5.style.backgroundColor="transparent";
          cross_40_reson_5.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc6_40.value = "";
          document.cross.producedgeneralc6_40.value = "";
          document.cross.rategeneralc6_40.value = "";
          document.cross.statusgeneralc6_40.value = "";
          document.cross.reasongeneralc6_40.value = "";
          cross_40_status_ok_6.style.backgroundColor="transparent";
          cross_40_reson_6.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc7_40.value = "";
          document.cross.producedgeneralc7_40.value = "";
          document.cross.rategeneralc7_40.value = "";
          document.cross.statusgeneralc7_40.value = "";
          document.cross.reasongeneralc7_40.value = "";
          cross_40_status_ok_7.style.backgroundColor="transparent";
          cross_40_reson_7.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc8_40.value = "";
          document.cross.producedgeneralc8_40.value = "";
          document.cross.rategeneralc8_40.value = "";
          document.cross.statusgeneralc8_40.value = "";
          document.cross.reasongeneralc8_40.value = "";
          cross_40_status_ok_8.style.backgroundColor="transparent";
          cross_40_reson_8.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc9_40.value = "";
          document.cross.producedgeneralc9_40.value = "";
          document.cross.rategeneralc9_40.value = "";
          document.cross.statusgeneralc9_40.value = "";
          document.cross.reasongeneralc9_40.value = "";
          cross_40_status_ok_9.style.backgroundColor="transparent";
          cross_40_reson_9.style.backgroundColor="transparent";

          document.slide_cross.slideptimrturnoli10_cross_40.value = "";
          document.slide_cross.slidestimrturnoli11_cross_40.value = "";
          document.slide_cross.slidettimrturnoli12_cross_40.value = "";
          semaforo1_cross_40.style.backgroundColor="transparent";
          semaforo2_cross_40.style.backgroundColor="transparent";
          semaforo3_cross_40.style.backgroundColor="transparent";
  
          $.ajax({
          
            url:"ajax_cross_40/general_cross_40_acumulado_slide_tercer_turno.ajax.php",
            method:"POST",
            cache: false,
            processData: false,
            dataType: "json",
            success:function(valor35){
          
              $.ajax({
          
                url:"ajax_cross_40/general_cross_40_rate_slide_tercer_turno.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor38){
          
                  var tpt = ((parseInt(valor35["acumuladas"]) / parseInt(valor38["rate"])) * 100).toFixed(0);
          
                  if(tpt >= 0 && tpt <= 74){
                    semaforo3_cross_40.style.backgroundColor="red";
          
                  } else if(tpt >= 75 && tpt <= 84){
                    semaforo3_cross_40.style.backgroundColor="yellow";
                              
                  } else if(tpt >= 85 && tpt <= 10000){
                    semaforo3_cross_40.style.backgroundColor="green";
          
                  }
                      
                  if(valor35 == null || valor35 == ""){
                      
                    var acumuladoslidetercerturnoerror = "0";
                    document.slide_cross.slidettimrturnoli12_cross_40.value = acumuladoslidetercerturnoerror;
                      
                  } else {
                      
                    var acumuladoslidetercerturno = parseInt(valor35["acumuladas"]);
                    document.slide_cross.slidettimrturnoli12_cross_40.value = acumuladoslidetercerturno;

                  }
                      
                }
                      
              });
          
            }
          
          });
    
          $.ajax({
          
            url:"ajax_cross_40/general_cross_40_acumulado_slide_segundo_turno.ajax.php",
            method:"POST",
            cache: false,
            processData: false,
            dataType: "json",
            success:function(valor34){
          
              $.ajax({
          
                url:"ajax_cross_40/general_cross_40_rate_slide_segundo_turno.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor37){
          
                  var spt = ((parseInt(valor34["acumuladas"]) / parseInt(valor37["rate"])) * 100).toFixed(0);
          
                  if(spt >= 0 && spt <= 74){
                    semaforo2_cross_40.style.backgroundColor="red";
          
                  } else if(spt >= 75 && spt <= 84){
                    semaforo2_cross_40.style.backgroundColor="yellow";
                              
                  } else if(spt >= 85 && spt <= 10000){
                    semaforo2_cross_40.style.backgroundColor="green";
          
                  }
                      
                  if(valor34 == null || valor34 == ""){
                      
                    var acumuladoslidesegundoturnoerror = "0";
                    document.slide_cross.slidestimrturnoli11_cross_40.value = acumuladoslidesegundoturnoerror;
                      
                  } else {
                      
                    var acumuladoslidesegundoturno = parseInt(valor34["acumuladas"]);
                    document.slide_cross.slidestimrturnoli11_cross_40.value = acumuladoslidesegundoturno;
                      
                  }
                      
                }
                      
              });
          
            }
          
          });
  
          $.ajax({
    
            url:"ajax_cross_40/general_cross_40_acumulado_slide_primer_turno.ajax.php",
            method:"POST",
            cache: false,
            processData: false,
            dataType: "json",
            success:function(valor33){
          
              $.ajax({
          
                url:"ajax_cross_40/general_cross_40_rate_slide_primer_turno.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor36){
          
                  var ppt = ((parseInt(valor33["acumuladas"]) / parseInt(valor36["rate"])) * 100).toFixed(0);
          
                  if(ppt >= 0 && ppt <= 74){
                    semaforo1_cross_40.style.backgroundColor="red";
          
                  } else if(ppt >= 75 && ppt <= 84){
                    semaforo1_cross_40.style.backgroundColor="yellow";
                              
                  } else if(ppt >= 85 && ppt <= 10000){
                    semaforo1_cross_40.style.backgroundColor="green";
          
                  }
          
                  if(valor33 == null || valor33 == ""){
          
                    var acumuladoslideprimerturnoerror = "0";
                    document.slide_cross.slideptimrturnoli10_cross_40.value = acumuladoslideprimerturnoerror;
                      
                  } else {
                      
                    var acumuladoslideprimerturno = parseInt(valor33["acumuladas"]);
                    document.slide_cross.slideptimrturnoli10_cross_40.value = acumuladoslideprimerturno;
                      
                  }
                      
                }
                      
              });
          
            }
          
          });
        
      } else if(document.cross.hora_cross_40.value == "23:59:59"){

          document.cross.turnoprodgeneralc3_40.value = "";
          document.cross.producedgeneralc3_40.value = "";
          document.cross.rategeneralc3_40.value = "";
          document.cross.statusgeneralc3_40.value = "";
          document.cross.reasongeneralc3_40.value = "";
          cross_40_status_ok_3.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc4_40.value = "";
          document.cross.producedgeneralc4_40.value = "";
          document.cross.rategeneralc4_40.value = "";
          document.cross.statusgeneralc4_40.value = "";
          document.cross.reasongeneralc4_40.value = "";
          cross_40_status_ok_4.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc5_40.value = "";
          document.cross.producedgeneralc5_40.value = "";
          document.cross.rategeneralc5_40.value = "";
          document.cross.statusgeneralc5_40.value = "";
          document.cross.reasongeneralc5_40.value = "";
          cross_40_status_ok_5.style.backgroundColor="transparent";
          cross_40_reson_5.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc6_40.value = "";
          document.cross.producedgeneralc6_40.value = "";
          document.cross.rategeneralc6_40.value = "";
          document.cross.statusgeneralc6_40.value = "";
          document.cross.reasongeneralc6_40.value = "";
          cross_40_status_ok_6.style.backgroundColor="transparent";
          cross_40_reson_6.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc7_40.value = "";
          document.cross.producedgeneralc7_40.value = "";
          document.cross.rategeneralc7_40.value = "";
          document.cross.statusgeneralc7_40.value = "";
          document.cross.reasongeneralc7_40.value = "";
          cross_40_status_ok_7.style.backgroundColor="transparent";
          cross_40_reson_7.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc8_40.value = "";
          document.cross.producedgeneralc8_40.value = "";
          document.cross.rategeneralc8_40.value = "";
          document.cross.statusgeneralc8_40.value = "";
          document.cross.reasongeneralc8_40.value = "";
          cross_40_status_ok_8.style.backgroundColor="transparent";
          cross_40_reson_8.style.backgroundColor="transparent";
          document.cross.turnoprodgeneralc9_40.value = "";
          document.cross.producedgeneralc9_40.value = "";
          document.cross.rategeneralc9_40.value = "";
          document.cross.statusgeneralc9_40.value = "";
          document.cross.reasongeneralc9_40.value = "";
          cross_40_status_ok_9.style.backgroundColor="transparent";
          cross_40_reson_9.style.backgroundColor="transparent";

      }

      document.cross.turnocross.value = valor5["id_turno"];

      if(valor5["id_turno"] == 1 && valor5["id_turno"] != 2 && valor5["id_turno"] != 3){

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_primerturno_6_7.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor7){

            if(valor7["producido"] != null || valor7["producido"] != ""){
      
              var prodprimerturno1 = parseInt(valor7["producido"]);
              var rateprimerturno1 = parseInt(valor7["rate"]);
              var horaprimerturno1 = "06hr-07hr";

              if(horaprimerturno1 != null || horaprimerturno1 != ""){

                document.cross.turnoprodgeneralc1_40.value = horaprimerturno1;

              } else if(horaprimerturno1 == null || horaprimerturno1 == ""){

                document.cross.turnoprodgeneralc1_40.value = "0";

              }

              if(prodprimerturno1 != null || prodprimerturno1 != ""){

                document.cross.producedgeneralc1_40.value = prodprimerturno1;

              } else if(prodprimerturno1 == null || prodprimerturno1 == ""){

                document.cross.producedgeneralc1_40.value = "0";
                cross_40_status_ok_1.style.backgroundColor="transparent";

              }

              if(rateprimerturno1 != null || rateprimerturno1 != ""){

                document.cross.rategeneralc1_40.value = rateprimerturno1;

              } else if(rateprimerturno1 == null || rateprimerturno1 == ""){

                document.cross.rategeneralc1_40.value = "0";

              }

              if(prodprimerturno1 >= rateprimerturno1){

                document.cross.statusgeneralc1_40.value = "OK";
                cross_40_status_ok_1.style.backgroundColor="green";


              } else if(prodprimerturno1 != rateprimerturno1){

                document.cross.statusgeneralc1_40.value = "NO OK";
                cross_40_status_ok_1.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_primerturno_6_7.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor47){

                  if(valor47["id_departamento_paro"] != "" || valor47["id_departamento_paro"] != null){

                    if(parseInt(valor47["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc1_40.value = "MTTO";

                    } else if(parseInt(valor47["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc1_40.value = "PROD";

                    } else if(parseInt(valor47["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc1_40.value = "QA";

                    } else if(parseInt(valor47["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc1_40.value = "LOG";

                    }

                    cross_40_reson_1.style.backgroundColor="red";


                  } else {
                    
                    document.cross.reasongeneralc1_40.value = "0";
                    cross_40_reson_1.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_primerturno_7_8.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor8){

            if(valor8 != null || valor8 != ""){
      
              var prodprimerturno2 = parseInt(valor8["producido"]);
              var rateprimerturno2 = parseInt(valor8["rate"]);
              var horaprimerturno2 = "07hr-08hr";

              if(horaprimerturno2 != null || horaprimerturno2 != ""){

                document.cross.turnoprodgeneralc2_40.value = horaprimerturno2;

              } else if(horaprimerturno2 == null || horaprimerturno2 == ""){

                document.cross.turnoprodgeneralc2_40.value = "0";

              }

              if(prodprimerturno2 != null || prodprimerturno2 != ""){

                document.cross.producedgeneralc2_40.value = prodprimerturno2;

              } else if(prodprimerturno2 == null || prodprimerturno2 == ""){

                document.cross.producedgeneralc2_40.value = "0";
                cross_40_status_ok_2.style.backgroundColor="transparent";

              }

              if(rateprimerturno2 != null || rateprimerturno2 != ""){

                document.cross.rategeneralc2_40.value = rateprimerturno2;

              } else if(rateprimerturno2 == null || rateprimerturno2 == ""){

                document.cross.rategeneralc2_40.value = "0";

              }

              if(prodprimerturno2 >= rateprimerturno2){

                document.cross.statusgeneralc2_40.value = "OK";
                cross_40_status_ok_2.style.backgroundColor="green";


              } else if(prodprimerturno2 != rateprimerturno2){

                document.cross.statusgeneralc2_40.value = "NO OK";
                cross_40_status_ok_2.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_primerturno_7_8.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor48){

                  if(valor48["id_departamento_paro"] != "" || valor48["id_departamento_paro"] != null){

                    if(parseInt(valor48["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc2_40.value = "MTTO";

                    } else if(parseInt(valor48["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc2_40.value = "PROD";

                    } else if(parseInt(valor48["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc2_40.value = "QA";

                    } else if(parseInt(valor48["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc2_40.value = "LOG";

                    }

                    cross_40_reson_2.style.backgroundColor="red";

                  } else if( valor48 == "" || valor48 == null){
                    
                    document.cross.reasongeneralc2_40.value = "";
                    cross_40_reson_2.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_primerturno_8_9.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor9){

            if(valor9 != null || valor9 != ""){
      
              var prodprimerturno3 = parseInt(valor9["producido"]);
              var rateprimerturno3 = parseInt(valor9["rate"]);
              var horaprimerturno3 = "08hr-09hr";

              if(horaprimerturno3 != null || horaprimerturno3 != ""){

                document.cross.turnoprodgeneralc3_40.value = horaprimerturno3;

              } else if(horaprimerturno3 == null || horaprimerturno3 == ""){

                document.cross.turnoprodgeneralc3_40.value = "0";

              }

              if(prodprimerturno3 != null || prodprimerturno3 != ""){

                document.cross.producedgeneralc3_40.value = prodprimerturno3;

              } else if(prodprimerturno3 == null || prodprimerturno3 == ""){

                document.cross.producedgeneralc3_40.value = "0";
                cross_40_status_ok_3.style.backgroundColor="transparent";

              }

              if(rateprimerturno3 != null || rateprimerturno3 != ""){

                document.cross.rategeneralc3_40.value = rateprimerturno3;

              } else if(rateprimerturno3 == null || rateprimerturno3 == ""){

                document.cross.rategeneralc3_40.value = "0";

              }

              if(prodprimerturno3 >= rateprimerturno3){

                document.cross.statusgeneralc3_40.value = "OK";
                cross_40_status_ok_3.style.backgroundColor="green";


              } else if(prodprimerturno3 != rateprimerturno3){

                document.cross.statusgeneralc3_40.value = "NO OK";
                cross_40_status_ok_3.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_primerturno_8_9.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor49){

                  if(valor49["id_departamento_paro"] != "" || valor49["id_departamento_paro"] != null){

                    if(parseInt(valor49["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc3_40.value = "MTTO";

                    } else if(parseInt(valor49["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc3_40.value = "PROD";

                    } else if(parseInt(valor49["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc3_40.value = "QA";

                    } else if(parseInt(valor49["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc3_40.value = "LOG";

                    }

                    cross_40_reson_3.style.backgroundColor="red";

                  } else if( valor49 == "" || valor49 == null){
                    
                    document.cross.reasongeneralc3_40.value = "0";
                    cross_40_reson_3.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_primerturno_9_10.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor10){

            if(valor10 != null || valor10 != ""){
      
              var prodprimerturno4 = parseInt(valor10["producido"]);
              var rateprimerturno4 = parseInt(valor10["rate"]);
              var horaprimerturno4 = "09hr-10hr";

              if(horaprimerturno4 != null || horaprimerturno4 != ""){

                document.cross.turnoprodgeneralc4_40.value = horaprimerturno4;

              } else if(horaprimerturno4 == null || horaprimerturno4 == ""){

                document.cross.turnoprodgeneralc4_40.value = "0";

              }

              if(prodprimerturno4 != null || prodprimerturno4 != ""){

                document.cross.producedgeneralc4_40.value = prodprimerturno4;

              } else if(prodprimerturno4 == null || prodprimerturno4 == ""){

                document.cross.producedgeneralc4_40.value = "0";
                cross_40_status_ok_4.style.backgroundColor="transparent";

              }

              if(rateprimerturno4 != null || rateprimerturno4 != ""){

                document.cross.rategeneralc4_40.value = rateprimerturno4;

              } else if(rateprimerturno4 == null || rateprimerturno4 == ""){

                document.cross.rategeneralc4_40.value = "0";

              }

              if(prodprimerturno4 >= rateprimerturno4){

                document.cross.statusgeneralc4_40.value = "OK";
                cross_40_status_ok_4.style.backgroundColor="green";


              } else if(prodprimerturno4 != rateprimerturno4){

                document.cross.statusgeneralc4_40.value = "NO OK";
                cross_40_status_ok_4.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_primerturno_9_10.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor50){

                  if(valor50["id_departamento_paro"] != "" || valor50["id_departamento_paro"] != null){

                    if(parseInt(valor50["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc4_40.value = "MTTO";

                    } else if(parseInt(valor50["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc4_40.value = "PROD";

                    } else if(parseInt(valor50["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc4_40.value = "QA";

                    } else if(parseInt(valor50["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc4_40.value = "LOG";

                    }

                    cross_40_reson_4.style.backgroundColor="red";

                  } else if( valor50 == "" || valor50 == null){
                    
                    document.cross.reasongeneralc4_40.value = "0";
                    cross_40_reson_4.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_primerturno_10_11.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor11){

            if(valor11 != null || valor11 != ""){
      
              var prodprimerturno5 = parseInt(valor11["producido"]);
              var rateprimerturno5 = parseInt(valor11["rate"]);
              var horaprimerturno5 = "10hr-11hr";

              if(horaprimerturno5 != null || horaprimerturno5 != ""){

                document.cross.turnoprodgeneralc5_40.value = horaprimerturno5;

              } else if(horaprimerturno5 == null || horaprimerturno5 == ""){

                document.cross.turnoprodgeneralc5_40.value = "0";

              }

              if(prodprimerturno5 != null || prodprimerturno5 != ""){

                document.cross.producedgeneralc5_40.value = prodprimerturno5;

              } else if(prodprimerturno5 == null || prodprimerturno5 == ""){

                document.cross.producedgeneralc5_40.value = "0";
                cross_40_status_ok_5.style.backgroundColor="transparent";

              }

              if(rateprimerturno5 != null || rateprimerturno5 != ""){

                document.cross.rategeneralc5_40.value = rateprimerturno5;

              } else if(rateprimerturno5 == null || rateprimerturno5 == ""){

                document.cross.rategeneralc5_40.value = "0";

              }

              if(prodprimerturno5 >= rateprimerturno5){

                document.cross.statusgeneralc5_40.value = "OK";
                cross_40_status_ok_5.style.backgroundColor="green";


              } else if(prodprimerturno5 != rateprimerturno5){

                document.cross.statusgeneralc5_40.value = "NO OK";
                cross_40_status_ok_5.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_primerturno_10_11.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor51){

                  if(valor51["id_departamento_paro"] != "" || valor51["id_departamento_paro"] != null){

                    if(parseInt(valor51["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc5_40.value = "MTTO";

                    } else if(parseInt(valor51["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc5_40.value = "PROD";

                    } else if(parseInt(valor51["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc5_40.value = "QA";

                    } else if(parseInt(valor51["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc5_40.value = "LOG";

                    }

                    cross_40_reson_5.style.backgroundColor="red";

                  } else if( valor51 == "" || valor51 == null){
                    
                    document.cross.reasongeneralc5_40.value = "0";
                    cross_40_reson_5.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_primerturno_11_12.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor12){

            if(valor12 != null || valor12 != ""){
      
              var prodprimerturno6 = parseInt(valor12["producido"]);
              var rateprimerturno6 = parseInt(valor12["rate"]);
              var horaprimerturno6 = "11hr-12hr";

              if(horaprimerturno6 != null || horaprimerturno6 != ""){

                document.cross.turnoprodgeneralc6_40.value = horaprimerturno6;

              } else if(horaprimerturno6 == null || horaprimerturno6 == ""){

                document.cross.turnoprodgeneralc6_40.value = "0";

              }

              if(prodprimerturno6 != null || prodprimerturno6 != ""){

                document.cross.producedgeneralc6_40.value = prodprimerturno6;

              } else if(prodprimerturno6 == null || prodprimerturno6 == ""){

                document.cross.producedgeneralc6_40.value = "0";
                cross_40_status_ok_6.style.backgroundColor="transparent";

              }

              if(rateprimerturno6 != null || rateprimerturno6 != ""){

                document.cross.rategeneralc6_40.value = rateprimerturno6;

              } else if(rateprimerturno6 == null || rateprimerturno6 == ""){

                document.cross.rategeneralc6_40.value = "0";

              }

              if(prodprimerturno6 >= rateprimerturno6){

                document.cross.statusgeneralc6_40.value = "OK";
                cross_40_status_ok_6.style.backgroundColor="green";


              } else if(prodprimerturno6 != rateprimerturno6){

                document.cross.statusgeneralc6_40.value = "NO OK";
                cross_40_status_ok_6.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_primerturno_11_12.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor52){

                  if(valor52["id_departamento_paro"] != "" || valor52["id_departamento_paro"] != null){

                    if(parseInt(valor52["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc6_40.value = "MTTO";

                    } else if(parseInt(valor52["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc6_40.value = "PROD";

                    } else if(parseInt(valor52["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc6_40.value = "QA";

                    } else if(parseInt(valor52["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc6_40.value = "LOG";

                    }

                    cross_40_reson_6.style.backgroundColor="red";

                  } else if( valor52 == "" || valor52 == null){
                    
                    document.cross.reasongeneralc6_40.value = "0";
                    cross_40_reson_6.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_primerturno_12_13.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor13){

            if(valor13 != null || valor13 != ""){
      
              var prodprimerturno7 = parseInt(valor13["producido"]);
              var rateprimerturno7 = parseInt(valor13["rate"]);
              var horaprimerturno7 = "12hr-13hr";

              if(horaprimerturno7 != null || horaprimerturno7 != ""){

                document.cross.turnoprodgeneralc7_40.value = horaprimerturno7;

              } else if(horaprimerturno7 == null || horaprimerturno7 == ""){

                document.cross.turnoprodgeneralc7_40.value = "0";

              }

              if(prodprimerturno7 != null || prodprimerturno7 != ""){

                document.cross.producedgeneralc7_40.value = prodprimerturno7;

              } else if(prodprimerturno7 == null || prodprimerturno7 == ""){

                document.cross.producedgeneralc7_40.value = "0";
                cross_40_status_ok_7.style.backgroundColor="transparent";

              }

              if(rateprimerturno7 != null || rateprimerturno7 != ""){

                document.cross.rategeneralc7_40.value = rateprimerturno7;

              } else if(rateprimerturno7 == null || rateprimerturno7 == ""){

                document.cross.rategeneralc7_40.value = "0";

              }

              if(prodprimerturno7 >= rateprimerturno7){

                document.cross.statusgeneralc7_40.value = "OK";
                cross_40_status_ok_7.style.backgroundColor="green";


              } else if(prodprimerturno7 != rateprimerturno7){

                document.cross.statusgeneralc7_40.value = "NO OK";
                cross_40_status_ok_7.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_primerturno_12_13.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor53){

                  if(valor53["id_departamento_paro"] != "" || valor53["id_departamento_paro"] != null){

                    if(parseInt(valor53["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc7_40.value = "MTTO";

                    } else if(parseInt(valor53["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc7_40.value = "PROD";

                    } else if(parseInt(valor53["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc7_40.value = "QA";

                    } else if(parseInt(valor53["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc7_40.value = "LOG";

                    }

                    cross_40_reson_7.style.backgroundColor="red";

                  } else if( valor52 == "" || valor53 == null){
                    
                    document.cross.reasongeneralc7_40.value = "0";
                    cross_40_reson_7.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_primerturno_13_14.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor14){

            if(valor14 != null || valor14 != ""){
      
              var prodprimerturno8 = parseInt(valor14["producido"]);
              var rateprimerturno8 = parseInt(valor14["rate"]);
              var horaprimerturno8 = "13hr-14hr";

              if(horaprimerturno8 != null || horaprimerturno8 != ""){

                document.cross.turnoprodgeneralc8_40.value = horaprimerturno8;

              } else if(horaprimerturno8 == null || horaprimerturno8 == ""){

                document.cross.turnoprodgeneralc8_40.value = "0";

              }

              if(prodprimerturno8 != null || prodprimerturno8 != ""){

                document.cross.producedgeneralc8_40.value = prodprimerturno8;

              } else if(prodprimerturno8 == null || prodprimerturno8 == ""){

                document.cross.producedgeneralc8_40.value = "0";
                cross_40_status_ok_8.style.backgroundColor="transparent";

              }

              if(rateprimerturno8 != null || rateprimerturno8 != ""){

                document.cross.rategeneralc8_40.value = rateprimerturno8;

              } else if(rateprimerturno8 == null || rateprimerturno8 == ""){

                document.cross.rategeneralc8_40.value = "0";

              }

              if(prodprimerturno8 >= rateprimerturno8){

                document.cross.statusgeneralc8_40.value = "OK";
                cross_40_status_ok_8.style.backgroundColor="green";


              } else if(prodprimerturno8 != rateprimerturno8){

                document.cross.statusgeneralc8_40.value = "NO OK";
                cross_40_status_ok_8.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_primerturno_13_14.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor54){

                  if(valor54["id_departamento_paro"] != "" || valor54["id_departamento_paro"] != null){

                    if(parseInt(valor54["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc8_40.value = "MTTO";

                    } else if(parseInt(valor54["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc8_40.value = "PROD";

                    } else if(parseInt(valor54["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc8_40.value = "QA";

                    } else if(parseInt(valor54["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc8_40.value = "LOG";

                    }

                    cross_40_reson_8.style.backgroundColor="red";

                  } else if( valor54 == "" || valor54 == null){
                    
                    document.cross.reasongeneralc8_40.value = "0";
                    cross_40_reson_8.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_primerturno_14_14_30.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor15){

            if(valor15 != null || valor15 != ""){
      
              var prodprimerturno9 = parseInt(valor15["producido"]);
              var rateprimerturno9 = parseInt(valor15["rate"]);
              var horaprimerturno9 = "14hr-14:30hr";

              if(horaprimerturno9 != null || horaprimerturno9 != ""){

                document.cross.turnoprodgeneralc9_40.value = horaprimerturno9;

              } else if(horaprimerturno9 == null || horaprimerturno9 == ""){

                document.cross.turnoprodgeneralc9_40.value = "0";

              }

              if(prodprimerturno9 != null || prodprimerturno9 != ""){

                document.cross.producedgeneralc9_40.value = prodprimerturno9;

              } else if(prodprimerturno9 == null || prodprimerturno9 == ""){

                document.cross.producedgeneralc9_40.value = "0";
                cross_40_status_ok_9.style.backgroundColor="transparent";

              }

              if(rateprimerturno9 != null || rateprimerturno9 != ""){

                document.cross.rategeneralc9_40.value = rateprimerturno9;

              } else if(rateprimerturno9 == null || rateprimerturno9 == ""){

                document.cross.rategeneralc9_40.value = "0";

              }

              if(prodprimerturno9 >= rateprimerturno9){

                document.cross.statusgeneralc9_40.value = "OK";
                cross_40_status_ok_9.style.backgroundColor="green";


              } else if(prodprimerturno9 != rateprimerturno9){

                document.cross.statusgeneralc9_40.value = "NO OK";
                cross_40_status_ok_9.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_primerturno_14_14_30.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor55){

                  if(valor55["id_departamento_paro"] != "" || valor55["id_departamento_paro"] != null){

                    if(parseInt(valor55["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc9_40.value = "MTTO";

                    } else if(parseInt(valor55["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc9_40.value = "PROD";

                    } else if(parseInt(valor55["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc9_40.value = "QA";

                    } else if(parseInt(valor55["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc9_40.value = "LOG";

                    }

                    cross_40_reson_9.style.backgroundColor="red";

                  } else if( valor55 == "" || valor55 == null){
                    
                    document.cross.reasongeneralc9_40.value = "0";
                    cross_40_reson_9.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

      } else if(valor5["id_turno"] == 2  && valor5["id_turno"] != 1 && valor5["id_turno"] != 3){

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_segundoturno_14_30_15.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor16){

            if(valor16 != null || valor16 != ""){
      
              var prodprimerturno10 = parseInt(valor16["producido"]);
              var rateprimerturno10 = parseInt(valor16["rate"]);
              var horaprimerturno10 = "14:30hr-15hr";

              if(horaprimerturno10 != null || horaprimerturno10 != ""){

                document.cross.turnoprodgeneralc1_40.value = horaprimerturno10;

              } else if(horaprimerturno10 == null || horaprimerturno10 == ""){

                document.cross.turnoprodgeneralc1_40.value = "0";

              }

              if(prodprimerturno10 != null || prodprimerturno10 != ""){

                document.cross.producedgeneralc1_40.value = prodprimerturno10;

              } else if(prodprimerturno10 == null || prodprimerturno10 == ""){

                document.cross.producedgeneralc1_40.value = "0";
                cross_40_status_ok_1.style.backgroundColor="transparent";

              }

              if(rateprimerturno10 != null || rateprimerturno10 != ""){

                document.cross.rategeneralc1_40.value = rateprimerturno10;

              } else if(rateprimerturno10 == null || rateprimerturno10 == ""){

                document.cross.rategeneralc1_40.value = "0";

              }

              if(prodprimerturno10 >= rateprimerturno10){

                document.cross.statusgeneralc1_40.value = "OK";
                cross_40_status_ok_1.style.backgroundColor="green";


              } else if(prodprimerturno10 != rateprimerturno10){

                document.cross.statusgeneralc1_40.value = "NO OK";
                cross_40_status_ok_1.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_segundoturno_14_30_15.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor56){

                  if(valor56["id_departamento_paro"] != "" || valor56["id_departamento_paro"] != null){

                    if(parseInt(valor56["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc1_40.value = "MTTO";

                    } else if(parseInt(valor56["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc1_40.value = "PROD";

                    } else if(parseInt(valor56["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc1_40.value = "QA";

                    } else if(parseInt(valor56["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc1_40.value = "LOG";

                    }

                    cross_40_reson_1.style.backgroundColor="red";

                  } else if( valor56 == "" || valor56 == null){
                    
                    document.cross.reasongeneralc1_40.value = "0";
                    cross_40_reson_1.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_segundoturno_15_16.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor17){

            if(valor17 != null || valor17 != ""){
      
              var prodprimerturno11 = parseInt(valor17["producido"]);
              var rateprimerturno11 = parseInt(valor17["rate"]);
              var horaprimerturno11 = "15hr-16hr";

              if(horaprimerturno11 != null || horaprimerturno11 != ""){

                document.cross.turnoprodgeneralc2_40.value = horaprimerturno11;

              } else if(horaprimerturno11 == null || horaprimerturno11 == ""){

                document.cross.turnoprodgeneralc2_40.value = "0";

              }

              if(prodprimerturno11 != null || prodprimerturno11 != ""){

                document.cross.producedgeneralc2_40.value = prodprimerturno11;

              } else if(prodprimerturno11 == null || prodprimerturno11 == ""){

                document.cross.producedgeneralc2_40.value = "0";
                cross_40_status_ok_2.style.backgroundColor="transparent";

              }

              if(rateprimerturno11 != null || rateprimerturno11 != ""){

                document.cross.rategeneralc2_40.value = rateprimerturno11;

              } else if(rateprimerturno11 == null || rateprimerturno11 == ""){

                document.cross.rategeneralc2_40.value = "0";

              }

              if(prodprimerturno11 >= rateprimerturno11){

                document.cross.statusgeneralc2_40.value = "OK";
                cross_40_status_ok_2.style.backgroundColor="green";


              } else if(prodprimerturno11 != rateprimerturno11){

                document.cross.statusgeneralc2_40.value = "NO OK";
                cross_40_status_ok_2.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_segundoturno_15_16.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor57){

                  if(valor57["id_departamento_paro"] != "" || valor57["id_departamento_paro"] != null){

                    if(parseInt(valor57["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc2_40.value = "MTTO";

                    } else if(parseInt(valor57["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc2_40.value = "PROD";

                    } else if(parseInt(valor57["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc2_40.value = "QA";

                    } else if(parseInt(valor57["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc2_40.value = "LOG";

                    }

                    cross_40_reson_2.style.backgroundColor="red";

                  } else if( valor57 == "" || valor57 == null){
                    
                    document.cross.reasongeneralc2_40.value = "0";
                    cross_40_reson_2.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_segundoturno_16_17.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor18){

            if(valor18 != null || valor18 != ""){
      
              var prodprimerturno12 = parseInt(valor18["producido"]);
              var rateprimerturno12 = parseInt(valor18["rate"]);
              var horaprimerturno12 = "16hr-17hr";

              if(horaprimerturno12 != null || horaprimerturno12 != ""){

                document.cross.turnoprodgeneralc3_40.value = horaprimerturno12;

              } else if(horaprimerturno12 == null || horaprimerturno12 == ""){

                document.cross.turnoprodgeneralc3_40.value = "0";

              }

              if(prodprimerturno12 != null || prodprimerturno12 != ""){

                document.cross.producedgeneralc3_40.value = prodprimerturno12;

              } else if(prodprimerturno12 == null || prodprimerturno12 == ""){

                document.cross.producedgeneralc3_40.value = "0";
                cross_40_status_ok_3.style.backgroundColor="transparent";

              }

              if(rateprimerturno12 != null || rateprimerturno12 != ""){

                document.cross.rategeneralc3_40.value = rateprimerturno12;

              } else if(rateprimerturno12 == null || rateprimerturno12 == ""){

                document.cross.rategeneralc3_40.value = "0";

              }

              if(prodprimerturno12 >= rateprimerturno12){

                document.cross.statusgeneralc3_40.value = "OK";
                cross_40_status_ok_3.style.backgroundColor="green";


              } else if(prodprimerturno12 != rateprimerturno12){

                document.cross.statusgeneralc3_40.value = "NO OK";
                cross_40_status_ok_3.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_segundoturno_16_17.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor58){

                  if(valor58["id_departamento_paro"] != "" || valor58["id_departamento_paro"] != null){

                    if(parseInt(valor58["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc3_40.value = "MTTO";

                    } else if(parseInt(valor58["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc3_40.value = "PROD";

                    } else if(parseInt(valor58["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc3_40.value = "QA";

                    } else if(parseInt(valor58["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc3_40.value = "LOG";

                    }

                    cross_40_reson_3.style.backgroundColor="red";

                  } else if( valor58 == "" || valor58 == null){
                    
                    document.cross.reasongeneralc3_40.value = "0";
                    cross_40_reson_3.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_segundoturno_17_18.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor19){

            if(valor19 != null || valor19 != ""){
      
              var prodprimerturno13= parseInt(valor19["producido"]);
              var rateprimerturno13 = parseInt(valor19["rate"]);
              var horaprimerturno13 = "17hr-18hr";

              if(horaprimerturno13 != null || horaprimerturno13 != ""){

                document.cross.turnoprodgeneralc4_40.value = horaprimerturno13;

              } else if(horaprimerturno13 == null || horaprimerturno13 == ""){

                document.cross.turnoprodgeneralc4_40.value = "0";

              }

              if(prodprimerturno13 != null || prodprimerturno13 != ""){

                document.cross.producedgeneralc4_40.value = prodprimerturno13;

              } else if(prodprimerturno13 == null || prodprimerturno13 == ""){

                document.cross.producedgeneralc4_40.value = "0";
                cross_40_status_ok_4.style.backgroundColor="transparent";

              }

              if(rateprimerturno13 != null || rateprimerturno13 != ""){

                document.cross.rategeneralc4_40.value = rateprimerturno13;

              } else if(rateprimerturno13 == null || rateprimerturno13 == ""){

                document.cross.rategeneralc4_40.value = "0";

              }

              if(prodprimerturno13 >= rateprimerturno13){

                document.cross.statusgeneralc4_40.value = "OK";
                cross_40_status_ok_4.style.backgroundColor="green";


              } else if(prodprimerturno13 != rateprimerturno13){

                document.cross.statusgeneralc4_40.value = "NO OK";
                cross_40_status_ok_4.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_segundoturno_17_18.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor59){

                  if(valor59["id_departamento_paro"] != "" || valor59["id_departamento_paro"] != null){

                    if(parseInt(valor59["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc4_40.value = "MTTO";

                    } else if(parseInt(valor59["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc4_40.value = "PROD";

                    } else if(parseInt(valor59["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc4_40.value = "QA";

                    } else if(parseInt(valor59["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc4_40.value = "LOG";

                    }

                    cross_40_reson_4.style.backgroundColor="red";

                  } else if( valor59 == "" || valor59 == null){
                    
                    document.cross.reasongeneralc4_40.value = "0";
                    cross_40_reson_4.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_segundoturno_18_19.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor20){

            if(valor20 != null || valor20 != ""){
      
              var prodprimerturno14= parseInt(valor20["producido"]);
              var rateprimerturno14 = parseInt(valor20["rate"]);
              var horaprimerturno14 = "18hr-19hr";

              if(horaprimerturno14 != null || horaprimerturno14 != ""){

                document.cross.turnoprodgeneralc5_40.value = horaprimerturno14;

              } else if(horaprimerturno14 == null || horaprimerturno14 == ""){

                document.cross.turnoprodgeneralc5_40.value = "0";

              }

              if(prodprimerturno14 != null || prodprimerturno14 != ""){

                document.cross.producedgeneralc5_40.value = prodprimerturno14;

              } else if(prodprimerturno14 == null || prodprimerturno14 == ""){

                document.cross.producedgeneralc5_40.value = "0";
                cross_40_status_ok_4.style.backgroundColor="transparent";

              }

              if(rateprimerturno14 != null || rateprimerturno14 != ""){

                document.cross.rategeneralc5_40.value = rateprimerturno14;

              } else if(rateprimerturno14 == null || rateprimerturno14 == ""){

                document.cross.rategeneralc5_40.value = "0";

              }

              if(prodprimerturno14 >= rateprimerturno14){

                document.cross.statusgeneralc5_40.value = "OK";
                cross_40_status_ok_5.style.backgroundColor="green";


              } else if(prodprimerturno14 != rateprimerturno14){

                document.cross.statusgeneralc5_40.value = "NO OK";
                cross_40_status_ok_5.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_segundoturno_18_19.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor60){

                  if(valor60["id_departamento_paro"] != "" || valor60["id_departamento_paro"] != null){

                    if(parseInt(valor60["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc5_40.value = "MTTO";

                    } else if(parseInt(valor60["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc5_40.value = "PROD";

                    } else if(parseInt(valor60["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc5_40.value = "QA";

                    } else if(parseInt(valor60["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc5_40.value = "LOG";

                    }

                    cross_40_reson_5.style.backgroundColor="red";

                  } else if( valor60 == "" || valor60 == null){
                    
                    document.cross.reasongeneralc5_40.value = "0";
                    cross_40_reson_5.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_segundoturno_19_20.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor21){

            if(valor21 != null || valor21 != ""){
      
              var prodprimerturno15= parseInt(valor21["producido"]);
              var rateprimerturno15 = parseInt(valor21["rate"]);
              var horaprimerturno15 = "19hr-20hr";

              if(horaprimerturno15 != null || horaprimerturno15 != ""){

                document.cross.turnoprodgeneralc6_40.value = horaprimerturno15;

              } else if(horaprimerturno15 == null || horaprimerturno15 == ""){

                document.cross.turnoprodgeneralc6_40.value = "0";

              }

              if(prodprimerturno15 != null || prodprimerturno15 != ""){

                document.cross.producedgeneralc6_40.value = prodprimerturno15;

              } else if(prodprimerturno15 == null || prodprimerturno15 == ""){

                document.cross.producedgeneralc6_40.value = "0";
                cross_40_status_ok_6.style.backgroundColor="transparent";

              }

              if(rateprimerturno15 != null || rateprimerturno15 != ""){

                document.cross.rategeneralc6_40.value = rateprimerturno15;

              } else if(rateprimerturno15 == null || rateprimerturno15 == ""){

                document.cross.rategeneralc6_40.value = "0";

              }

              if(prodprimerturno15 >= rateprimerturno15){

                document.cross.statusgeneralc6_40.value = "OK";
                cross_40_status_ok_6.style.backgroundColor="green";


              } else if(prodprimerturno15 != rateprimerturno15){

                document.cross.statusgeneralc6_40.value = "NO OK";
                cross_40_status_ok_6.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_segundoturno_19_20.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor61){

                  if(valor61["id_departamento_paro"] != "" || valor61["id_departamento_paro"] != null){

                    if(parseInt(valor61["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc6_40.value = "MTTO";

                    } else if(parseInt(valor61["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc6_40.value = "PROD";

                    } else if(parseInt(valor61["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc6_40.value = "QA";

                    } else if(parseInt(valor61["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc6_40.value = "LOG";

                    }

                    cross_40_reson_6.style.backgroundColor="red";

                  } else if( valor61 == "" || valor61 == null){
                    
                    document.cross.reasongeneralc6_40.value = "0";
                    cross_40_reson_6.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_segundoturno_20_21.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor22){

            if(valor22 != null || valor22 != ""){
      
              var prodprimerturno16= parseInt(valor22["producido"]);
              var rateprimerturno16 = parseInt(valor22["rate"]);
              var horaprimerturno16 = "20hr-21hr";

              if(horaprimerturno16 != null || horaprimerturno16 != ""){

                document.cross.turnoprodgeneralc7_40.value = horaprimerturno16;

              } else if(horaprimerturno16 == null || horaprimerturno16 == ""){

                document.cross.turnoprodgeneralc7_40.value = "0";

              }

              if(prodprimerturno16 != null || prodprimerturno16 != ""){

                document.cross.producedgeneralc7_40.value = prodprimerturno16;

              } else if(prodprimerturno16 == null || prodprimerturno16 == ""){

                document.cross.producedgeneralc7_40.value = "0";
                cross_40_status_ok_7.style.backgroundColor="transparent";

              }

              if(rateprimerturno16 != null || rateprimerturno16 != ""){

                document.cross.rategeneralc7_40.value = rateprimerturno16;

              } else if(rateprimerturno16 == null || rateprimerturno16 == ""){

                document.cross.rategeneralc7_40.value = "0";

              }

              if(prodprimerturno16 >= rateprimerturno16){

                document.cross.statusgeneralc7_40.value = "OK";
                cross_40_status_ok_7.style.backgroundColor="green";


              } else if(prodprimerturno16 != rateprimerturno16){

                document.cross.statusgeneralc7_40.value = "NO OK";
                cross_40_status_ok_7.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_segundoturno_20_21.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor62){

                  if(valor62["id_departamento_paro"] != "" || valor62["id_departamento_paro"] != null){

                    if(parseInt(valor62["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc7_40.value = "MTTO";

                    } else if(parseInt(valor62["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc7_40.value = "PROD";

                    } else if(parseInt(valor62["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc7_40.value = "QA";

                    } else if(parseInt(valor62["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc7_40.value = "LOG";

                    }

                    cross_40_reson_7.style.backgroundColor="red";

                  } else if( valor62 == "" || valor62 == null){
                    
                    document.cross.reasongeneralc7_40.value = "0";
                    cross_40_reson_7.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_segundoturno_21_22.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor23){

            if(valor23 != null || valor23 != ""){
      
              var prodprimerturno17 = parseInt(valor23["producido"]);
              var rateprimerturno17 = parseInt(valor23["rate"]);
              var horaprimerturno17 = "21hr-22hr";

              if(horaprimerturno17 != null || horaprimerturno17 != ""){

                document.cross.turnoprodgeneralc8_40.value = horaprimerturno17;

              } else if(horaprimerturno17 == null || horaprimerturno17 == ""){

                document.cross.turnoprodgeneralc8_40.value = "0";

              }

              if(prodprimerturno17 != null || prodprimerturno17 != ""){

                document.cross.producedgeneralc8_40.value = prodprimerturno17;

              } else if(prodprimerturno17 == null || prodprimerturno17 == ""){

                document.cross.producedgeneralc8_40.value = "0";
                cross_40_status_ok_8.style.backgroundColor="transparent";

              }

              if(rateprimerturno17 != null || rateprimerturno17 != ""){

                document.cross.rategeneralc8_40.value = rateprimerturno17;

              } else if(rateprimerturno17 == null || rateprimerturno17 == ""){

                document.cross.rategeneralc8_40.value = "0";

              }

              if(prodprimerturno17 >= rateprimerturno17){

                document.cross.statusgeneralc8_40.value = "OK";
                cross_40_status_ok_8.style.backgroundColor="green";


              } else if(prodprimerturno17 != rateprimerturno17){

                document.cross.statusgeneralc8_40.value = "NO OK";
                cross_40_status_ok_8.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_segundoturno_21_22.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor63){

                  if(valor63["id_departamento_paro"] != "" || valor63["id_departamento_paro"] != null){

                    if(parseInt(valor63["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc8_40.value = "MTTO";

                    } else if(parseInt(valor63["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc8_40.value = "PROD";

                    } else if(parseInt(valor63["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc8_40.value = "QA";

                    } else if(parseInt(valor63["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc8_40.value = "LOG";

                    }

                    cross_40_reson_8.style.backgroundColor="red";

                  } else if( valor63 == "" || valor63 == null){
                    
                    document.cross.reasongeneralc8_40.value = "0";
                    cross_40_reson_8.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_segundoturno_22_22_30.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor24){

            if(valor24 != null || valor24 != ""){
      
              var prodprimerturno18= parseInt(valor24["producido"]);
              var rateprimerturno18 = parseInt(valor24["rate"]);
              var horaprimerturno18 = "22hr-22:30hr";

              if(horaprimerturno18 != null || horaprimerturno18 != ""){

                document.cross.turnoprodgeneralc9_40.value = horaprimerturno18;

              } else if(horaprimerturno18 == null || horaprimerturno18 == ""){

                document.cross.turnoprodgeneralc9_40.value = "0";

              }

              if(prodprimerturno18 != null || prodprimerturno18 != ""){

                document.cross.producedgeneralc9_40.value = prodprimerturno18;

              } else if(prodprimerturno18 == null || prodprimerturno18 == ""){

                document.cross.producedgeneralc9_40.value = "0";
                cross_40_status_ok_9.style.backgroundColor="transparent";

              }

              if(rateprimerturno18 != null || rateprimerturno18 != ""){

                document.cross.rategeneralc9_40.value = rateprimerturno18;

              } else if(rateprimerturno18 == null || rateprimerturno18 == ""){

                document.cross.rategeneralc9_40.value = "0";

              }

              if(prodprimerturno18 >= rateprimerturno18){

                document.cross.statusgeneralc9_40.value = "OK";
                cross_40_status_ok_9.style.backgroundColor="green";


              } else if(prodprimerturno18 != rateprimerturno18){

                document.cross.statusgeneralc9_40.value = "NO OK";
                cross_40_status_ok_9.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_segundoturno_22_22_30.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor64){

                  if(valor64["id_departamento_paro"] != "" || valor64["id_departamento_paro"] != null){

                    if(parseInt(valor64["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc9_40.value = "MTTO";

                    } else if(parseInt(valor64["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc9_40.value = "PROD";

                    } else if(parseInt(valor64["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc9_40.value = "QA";

                    } else if(parseInt(valor64["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc9_40.value = "LOG";

                    }

                    cross_40_reson_9.style.backgroundColor="red";

                  } else if( valor64 == "" || valor64 == null){
                    
                    document.cross.reasongeneralc9_40.value = "0";
                    cross_40_reson_9.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

      } else if(valor5["id_turno"] == 3 && valor5["id_turno"] != 1 && valor5["id_turno"] != 2){

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_tercerturno_22_30_23.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor25){

            if(valor25 != null || valor25 != ""){
      
              var prodprimerturno19= parseInt(valor25["producido"]);
              var rateprimerturno19 = parseInt(valor25["rate"]);
              var horaprimerturno19 = "22:30hr-23hr";

              if(horaprimerturno19 != null || horaprimerturno19 != ""){

                document.cross.turnoprodgeneralc1_40.value = horaprimerturno19;

              } else if(horaprimerturno19 == null || horaprimerturno19 == ""){

                document.cross.turnoprodgeneralc1_40.value = "0";

              }

              if(prodprimerturno19 != null || prodprimerturno19 != ""){

                document.cross.producedgeneralc1_40.value = prodprimerturno19;

              } else if(prodprimerturno19 == null || prodprimerturno19 == ""){

                document.cross.producedgeneralc1_40.value = "0";
                cross_40_status_ok_1.style.backgroundColor="transparent";

              }

              if(rateprimerturno19 != null || rateprimerturno19 != ""){

                document.cross.rategeneralc1_40.value = rateprimerturno19;

              } else if(rateprimerturno19 == null || rateprimerturno19 == ""){

                document.cross.rategeneralc1_40.value = "0";

              }

              if(prodprimerturno19 >= rateprimerturno19){

                document.cross.statusgeneralc1_40.value = "OK";
                cross_40_status_ok_1.style.backgroundColor="green";


              } else if(prodprimerturno19 != rateprimerturno19){

                document.cross.statusgeneralc1_40.value = "NO OK";
                cross_40_status_ok_1.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_tercerturno_22_30_23.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor65){

                  if(valor65["id_departamento_paro"] != "" || valor65["id_departamento_paro"] != null){

                    if(parseInt(valor65["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc1_40.value = "MTTO";

                    } else if(parseInt(valor65["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc1_40.value = "PROD";

                    } else if(parseInt(valor65["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc1_40.value = "QA";

                    } else if(parseInt(valor65["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc1_40.value = "LOG";

                    }

                    cross_40_reson_1.style.backgroundColor="red";

                  } else if( valor65 == "" || valor65 == null){
                    
                    document.cross.reasongeneralc1_40.value = "0";
                    cross_40_reson_1.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_tercerturno_23_00.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor26){

            if(valor26 != null || valor26 != ""){
      
              var prodprimerturno20= parseInt(valor26["producido"]);
              var rateprimerturno20 = parseInt(valor26["rate"]);
              var horaprimerturno20 = "23hr-24hr";

              if(horaprimerturno20 != null || horaprimerturno20 != ""){

                document.cross.turnoprodgeneralc2_40.value = horaprimerturno20;

              } else if(horaprimerturno20 == null || horaprimerturno20 == ""){

                document.cross.turnoprodgeneralc2_40.value = "0";

              }

              if(prodprimerturno20 != null || prodprimerturno20 != ""){

                document.cross.producedgeneralc2_40.value = prodprimerturno20;

              } else if(prodprimerturno20 == null || prodprimerturno20 == ""){

                document.cross.producedgeneralc2_40.value = "0";
                cross_40_status_ok_2.style.backgroundColor="transparent";

              }

              if(rateprimerturno20 != null || rateprimerturno20 != ""){

                document.cross.rategeneralc2_40.value = rateprimerturno20;

              } else if(rateprimerturno20 == null || rateprimerturno20 == ""){

                document.cross.rategeneralc2_40.value = "0";

              }

              if(prodprimerturno20 >= rateprimerturno20){

                document.cross.statusgeneralc2_40.value = "OK";
                cross_40_status_ok_2.style.backgroundColor="green";


              } else if(prodprimerturno20 != rateprimerturno20){

                document.cross.statusgeneralc2_40.value = "NO OK";
                cross_40_status_ok_2.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_tercerturno_23_00.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor66){

                  if(valor66["id_departamento_paro"] != "" || valor66["id_departamento_paro"] != null){

                    if(parseInt(valor66["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc2_40.value = "MTTO";

                    } else if(parseInt(valor66["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc2_40.value = "PROD";

                    } else if(parseInt(valor66["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc2_40.value = "QA";

                    } else if(parseInt(valor66["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc2_40.value = "LOG";

                    }

                    cross_40_reson_2.style.backgroundColor="red";

                  } else if( valor66 == "" || valor66 == null){
                    
                    document.cross.reasongeneralc2_40.value = "0";
                    cross_40_reson_2.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_tercerturno_00_01.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor27){

            if(valor27 != null || valor27 != ""){
      
              var prodprimerturno21= parseInt(valor27["producido"]);
              var rateprimerturno21 = parseInt(valor27["rate"]);
              var horaprimerturno21 = "24hr-01hr";

              if(horaprimerturno21 != null || horaprimerturno21 != ""){

                document.cross.turnoprodgeneralc3_40.value = horaprimerturno21;

              } else if(horaprimerturno21 == null || horaprimerturno21 == ""){

                document.cross.turnoprodgeneralc3_40.value = "0";

              }

              if(prodprimerturno21 != null || prodprimerturno21 != ""){

                document.cross.producedgeneralc3_40.value = prodprimerturno21;

              } else if(prodprimerturno21 == null || prodprimerturno21 == ""){

                document.cross.producedgeneralc3_40.value = "0";
                cross_40_status_ok_3.style.backgroundColor="transparent";

              }

              if(rateprimerturno21 != null || rateprimerturno21 != ""){

                document.cross.rategeneralc3_40.value = rateprimerturno21;

              } else if(rateprimerturno21 == null || rateprimerturno21 == ""){

                document.cross.rategeneralc3_40.value = "0";

              }

              if(prodprimerturno21 >= rateprimerturno21){

                document.cross.statusgeneralc3_40.value = "OK";
                cross_40_status_ok_3.style.backgroundColor="green";


              } else if(prodprimerturno21 != rateprimerturno21){

                document.cross.statusgeneralc3_40.value = "NO OK";
                cross_40_status_ok_3.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_tercerturno_00_01.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor67){

                  if(valor67["id_departamento_paro"] != "" || valor67["id_departamento_paro"] != null){

                    if(parseInt(valor67["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc3_40.value = "MTTO";

                    } else if(parseInt(valor67["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc3_40.value = "PROD";

                    } else if(parseInt(valor67["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc3_40.value = "QA";

                    } else if(parseInt(valor67["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc3_40.value = "LOG";

                    }

                    cross_40_reson_3.style.backgroundColor="red";

                  } else if( valor67 == "" || valor67 == null){
                    
                    document.cross.reasongeneralc3_40.value = "0";
                    cross_40_reson_3.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_tercerturno_01_02.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor28){

            if(valor28 != null || valor28 != ""){
      
              var prodprimerturno22= parseInt(valor28["producido"]);
              var rateprimerturno22 = parseInt(valor28["rate"]);
              var horaprimerturno22 = "01hr-02hr";

              if(horaprimerturno22 != null || horaprimerturno22 != ""){

                document.cross.turnoprodgeneralc4_40.value = horaprimerturno22;

              } else if(horaprimerturno22 == null || horaprimerturno22 == ""){

                document.cross.turnoprodgeneralc4_40.value = "0";

              }

              if(prodprimerturno22 != null || prodprimerturno22 != ""){

                document.cross.producedgeneralc4_40.value = prodprimerturno22;

              } else if(prodprimerturno22 == null || prodprimerturno22 == ""){

                document.cross.producedgeneralc4_40.value = "0";
                cross_40_status_ok_4.style.backgroundColor="transparent";

              }

              if(rateprimerturno22 != null || rateprimerturno22 != ""){

                document.cross.rategeneralc4_40.value = rateprimerturno22;

              } else if(rateprimerturno22 == null || rateprimerturno22 == ""){

                document.cross.rategeneralc4_40.value = "0";

              }

              if(prodprimerturno22 >= rateprimerturno22){

                document.cross.statusgeneralc4_40.value = "OK";
                cross_40_status_ok_4.style.backgroundColor="green";


              } else if(prodprimerturno22 != rateprimerturno22){

                document.cross.statusgeneralc4_40.value = "NO OK";
                cross_40_status_ok_4.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_tercerturno_01_02.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor68){

                  if(valor68["id_departamento_paro"] != "" || valor68["id_departamento_paro"] != null){

                    if(parseInt(valor68["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc4_40.value = "MTTO";

                    } else if(parseInt(valor68["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc4_40.value = "PROD";

                    } else if(parseInt(valor68["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc4_40.value = "QA";

                    } else if(parseInt(valor68["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc4_40.value = "LOG";

                    }

                    cross_40_reson_4.style.backgroundColor="red";

                  } else if( valor68 == "" || valor68 == null){
                    
                    document.cross.reasongeneralc4_40.value = "0";
                    cross_40_reson_4.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_tercerturno_02_03.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor29){

            if(valor29 != null || valor29 != ""){
      
              var prodprimerturno23= parseInt(valor29["producido"]);
              var rateprimerturno23 = parseInt(valor29["rate"]);
              var horaprimerturno23 = "02hr-03hr";

              if(horaprimerturno23 != null || horaprimerturno23 != ""){

                document.cross.turnoprodgeneralc5_40.value = horaprimerturno23;

              } else if(horaprimerturno23 == null || horaprimerturno23 == ""){

                document.cross.turnoprodgeneralc5_40.value = "0";

              }

              if(prodprimerturno23 != null || prodprimerturno23 != ""){

                document.cross.producedgeneralc5_40.value = prodprimerturno23;

              } else if(prodprimerturno23 == null || prodprimerturno23 == ""){

                document.cross.producedgeneralc5_40.value = "0";
                cross_40_status_ok_5.style.backgroundColor="transparent";

              }

              if(rateprimerturno23 != null || rateprimerturno23 != ""){

                document.cross.rategeneralc5_40.value = rateprimerturno23;

              } else if(rateprimerturno23 == null || rateprimerturno23 == ""){

                document.cross.rategeneralc5_40.value = "0";

              }

              if(prodprimerturno23 >= rateprimerturno23){

                document.cross.statusgeneralc5_40.value = "OK";
                cross_40_status_ok_5.style.backgroundColor="green";


              } else if(prodprimerturno23 != rateprimerturno23){

                document.cross.statusgeneralc5_40.value = "NO OK";
                cross_40_status_ok_5.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_tercerturno_02_03.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor69){

                  if(valor69["id_departamento_paro"] != "" || valor69["id_departamento_paro"] != null){

                    if(parseInt(valor69["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc5_40.value = "MTTO";

                    } else if(parseInt(valor69["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc5_40.value = "PROD";

                    } else if(parseInt(valor69["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc5_40.value = "QA";

                    } else if(parseInt(valor69["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc5_40.value = "LOG";

                    }

                    cross_40_reson_5.style.backgroundColor="red";

                  } else if( valor69 == "" || valor69 == null){
                    
                    document.cross.reasongeneralc5_40.value = "0";
                    cross_40_reson_5.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_tercerturno_03_04.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor30){

            if(valor30 != null || valor30 != ""){
      
              var prodprimerturno24= parseInt(valor30["producido"]);
              var rateprimerturno24 = parseInt(valor30["rate"]);
              var horaprimerturno24 = "03hr-04hr";

              if(horaprimerturno24 != null || horaprimerturno24 != ""){

                document.cross.turnoprodgeneralc6_40.value = horaprimerturno24;

              } else if(horaprimerturno24 == null || horaprimerturno24 == ""){

                document.cross.turnoprodgeneralc6_40.value = "0";

              }

              if(prodprimerturno24 != null || prodprimerturno24 != ""){

                document.cross.producedgeneralc6_40.value = prodprimerturno24;

              } else if(prodprimerturno24 == null || prodprimerturno24 == ""){

                document.cross.producedgeneralc6_40.value = "0";
                cross_40_status_ok_6.style.backgroundColor="transparent";

              }

              if(rateprimerturno24 != null || rateprimerturno24 != ""){

                document.cross.rategeneralc6_40.value = rateprimerturno24;

              } else if(rateprimerturno24 == null || rateprimerturno24 == ""){

                document.cross.rategeneralc6_40.value = "0";

              }

              if(prodprimerturno24 >= rateprimerturno24){

                document.cross.statusgeneralc6_40.value = "OK";
                cross_40_status_ok_6.style.backgroundColor="green";


              } else if(prodprimerturno24 != rateprimerturno24){

                document.cross.statusgeneralc6_40.value = "NO OK";
                cross_40_status_ok_6.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_tercerturno_03_04.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor70){

                  if(valor70["id_departamento_paro"] != "" || valor70["id_departamento_paro"] != null){

                    if(parseInt(valor70["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc6_40.value = "MTTO";

                    } else if(parseInt(valor70["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc6_40.value = "PROD";

                    } else if(parseInt(valor70["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc6_40.value = "QA";

                    } else if(parseInt(valor70["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc6_40.value = "LOG";

                    }

                    cross_40_reson_6.style.backgroundColor="red";

                  } else if( valor70 == "" || valor70 == null){
                    
                    document.cross.reasongeneralc6_40.value = "0";
                    cross_40_reson_6.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_tercerturno_04_05.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor31){

            if(valor31 != null || valor31 != ""){
      
              var prodprimerturno25 = parseInt(valor31["producido"]);
              var rateprimerturno25 = parseInt(valor31["rate"]);
              var horaprimerturno25 = "04hr-05hr";

              if(horaprimerturno25 != null || horaprimerturno25 != ""){

                document.cross.turnoprodgeneralc7_40.value = horaprimerturno25;

              } else if(horaprimerturno25 == null || horaprimerturno25 == ""){

                document.cross.turnoprodgeneralc7_40.value = "0";

              }

              if(prodprimerturno25 != null || prodprimerturno25 != ""){

                document.cross.producedgeneralc7_40.value = prodprimerturno25;

              } else if(prodprimerturno25 == null || prodprimerturno25 == ""){

                document.cross.producedgeneralc7_40.value = "0";
                cross_40_status_ok_7.style.backgroundColor="transparent";

              }

              if(rateprimerturno25 != null || rateprimerturno25 != ""){

                document.cross.rategeneralc7_40.value = rateprimerturno25;

              } else if(rateprimerturno25 == null || rateprimerturno25 == ""){

                document.cross.rategeneralc7_40.value = "0";

              }

              if(prodprimerturno25 >= rateprimerturno25){

                document.cross.statusgeneralc7_40.value = "OK";
                cross_40_status_ok_7.style.backgroundColor="green";


              } else if(prodprimerturno25 != rateprimerturno25){

                document.cross.statusgeneralc7_40.value = "NO OK";
                cross_40_status_ok_7.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_tercerturno_04_05.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor71){

                  if(valor71["id_departamento_paro"] != "" || valor71["id_departamento_paro"] != null){

                    if(parseInt(valor71["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc7_40.value = "MTTO";

                    } else if(parseInt(valor71["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc7_40.value = "PROD";

                    } else if(parseInt(valor71["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc7_40.value = "QA";

                    } else if(parseInt(valor71["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc7_40.value = "LOG";

                    }

                    cross_40_reson_7.style.backgroundColor="red";

                  } else if( valor71 == "" || valor71 == null){
                    
                    document.cross.reasongeneralc7_40.value = "0";
                    cross_40_reson_7.style.backgroundColor="transparent";

                  }

                }

              });

            }
      
          }
      
        });

        $.ajax({

          url:"ajax_cross_40/general_cross_40_prod_tercerturno_05_05_59.ajax.php",
          method:"POST",
          cache: false,
          processData: false,
          dataType: "json",
          success:function(valor32){

            if(valor32 != null || valor32 != ""){
      
              var prodprimerturno26 = parseInt(valor32["producido"]);
              var rateprimerturno26 = parseInt(valor32["rate"]);
              var horaprimerturno26 = "05hr-06hr";

              if(horaprimerturno26 != null || horaprimerturno26 != ""){

                document.cross.turnoprodgeneralc8_40.value = horaprimerturno26;

              } else if(horaprimerturno26 == null || horaprimerturno26 == ""){

                document.cross.turnoprodgeneralc8_40.value = "0";

              }

              if(prodprimerturno26 != null || prodprimerturno26 != ""){

                document.cross.producedgeneralc8_40.value = prodprimerturno26;

              } else if(prodprimerturno26 == null || prodprimerturno26 == ""){

                document.cross.producedgeneralc8_40.value = "0";
                cross_40_status_ok_8.style.backgroundColor="transparent";

              }

              if(rateprimerturno26 != null || rateprimerturno26 != ""){

                document.cross.rategeneralc8_40.value = rateprimerturno26;

              } else if(rateprimerturno26 == null || rateprimerturno26 == ""){

                document.cross.rategeneralc8_40.value = "0";

              }

              if(prodprimerturno26 >= rateprimerturno26){

                document.cross.statusgeneralc8_40.value = "OK";
                cross_40_status_ok_8.style.backgroundColor="green";


              } else if(prodprimerturno26 != rateprimerturno26){

                document.cross.statusgeneralc8_40.value = "NO OK";
                cross_40_status_ok_8.style.backgroundColor="red";

              }

              $.ajax({

                url:"ajax_cross_40/general_cross_40_status_tercerturno_05_06.ajax.php",
                method:"POST",
                cache: false,
                processData: false,
                dataType: "json",
                success:function(valor72){

                  if(valor72["id_departamento_paro"] != "" || valor72["id_departamento_paro"] != null){

                    if(parseInt(valor72["id_departamento_paro"]) == 1){

                      document.cross.reasongeneralc8_40.value = "MTTO";

                    } else if(parseInt(valor72["id_departamento_paro"]) == 2){

                      document.cross.reasongeneralc8_40.value = "PROD";

                    } else if(parseInt(valor72["id_departamento_paro"]) == 3){

                      document.cross.reasongeneralc8_40.value = "QA";

                    } else if(parseInt(valor72["id_departamento_paro"]) == 4){

                      document.cross.reasongeneralc8_40.value = "LOG";

                    }

                    cross_40_reson_8.style.backgroundColor="red";

                  } else if( valor72 == "" || valor72 == null){
                    
                    document.cross.reasongeneralc8_40.value = "0";
                    cross_40_reson_8.style.backgroundColor="transparent";

                  }

                }

              });

              document.cross.turnoprodgeneralc9_40.value = prueba;
              document.cross.producedgeneralc9_40.value = prueba;
              document.cross.rategeneralc9_40.value = prueba;
              document.cross.statusgeneralc9_40.value = prueba;
              document.cross.reasongeneralc9_40.value = prueba;
              cross_40_status_ok_9.style.backgroundColor="transparent";
              document.cross.reasongeneralc9_40.value = "";
              cross_40_reson_9.style.backgroundColor="transparent";

            }
      
          }
      
        });

      }

    }

  });

/*============ CERRANDO TURNO CROSS_40  ============*/

/*=============================================
            CORREOS DE PARO CROSS_40
=============================================*/

st1_cross_40 = document.cross.status_cross_40.value;

if(st1_cross_40 != st2_cross_40){
  cambio_cross_40(

      $.ajax({

        url:"ajax_cross_40/general_cross_40.ajax.php",
        method:"POST",
        cache: false,
        processData: false,
        dataType: "json",
        success:function(valor){
    
          if(valor["status_crossmember_40_mantenimiento"] == 1){
    
            var status_paro_mtto = valor["status_crossmember_40_mantenimiento"];
            var status_paro_mtto_fecha = valor["inicio_paro_crossmember_40_mantenimiento"];
                          
            var datos = new FormData();
            datos.append("status_paro_mtto", status_paro_mtto);
            datos.append("status_paro_mtto_fecha", status_paro_mtto_fecha);
                                  
            $.ajax({
                url:"ajax_cross_40/general_cross_40_correo_mtto.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta1){
                                                    
                }
            });
            
          } else if(valor["status_crossmember_40_produccion"] == 1){
    
            var status_paro_prod = valor["status_crossmember_40_produccion"];
            var status_paro_prod_fecha = valor["inicio_paro_crossmember_40_produccion"];
                          
            var datos = new FormData();
            datos.append("status_paro_prod", status_paro_prod);
            datos.append("status_paro_prod_fecha", status_paro_prod_fecha);
                                  
            $.ajax({
                url:"ajax_cross_40/general_cross_40_correo_prod.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta1){
                                                
                }
    
            });
    
          } else if(valor["status_crossmember_40_calidad"] == 1){
    
            var status_paro_cal = valor["status_crossmember_40_calidad"];
            var status_paro_cal_fecha = valor["inicio_paro_crossmember_40_calidad"];
                          
            var datos = new FormData();
            datos.append("status_paro_cal", status_paro_cal);
            datos.append("status_paro_cal_fecha", status_paro_cal_fecha);
                                  
            $.ajax({
                url:"ajax_cross_40/general_cross_40_correo_cal.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta1){
                                                
                }
    
            });
    
          } else if(valor["status_crossmember_40_logistica"] == 1){
    
            var status_paro_log = valor["status_crossmember_40_logistica"];
            var status_paro_log_fecha = valor["inicio_paro_crossmember_40_logistica"];
                          
            var datos = new FormData();
            datos.append("status_paro_log", status_paro_log);
            datos.append("status_paro_log_fecha", status_paro_log_fecha);
                                  
            $.ajax({
                url:"ajax_cross_40/general_cross_40_correo_log.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta1){
                                                
                }
    
            });
    
          }
    
        }
    
      })
    
    )
    st2_cross_40 = st1_cross_40
}

/*============ CERRANDO CORREOS DE PARO CROSS_40  ============*/

/*=============================================
          INSERTADO DE PARO CROSS_40
=============================================*/

auxiliar1_cross_40 = document.cross.status_cross_40.value;

if(auxiliar1_cross_40 != auxiliar2_cross_40){
  cambio_cross_40(

      
      $.ajax({

        url:"ajax_cross_40/general_cross_40.ajax.php",
        method:"POST",
        cache: false,
        processData: false,
        dataType: "json",
        success:function(valor){

          if(valor["status_crossmember_40_mantenimiento"] == 1 && (valor["inicio_ciclo_crossmember_40"] == 0 || valor["fin_ciclo_crossmember_40"] == 0)){

            $.ajax({
              
              url:"ajax_cross_40/general_cross_40_status_mtto_1.ajax.php",
              method:"POST",
              cache: false,
              processData: false,
              dataType: "json",
              success:function(valor39){

                $.ajax({

                  url:"ajax_cross_40/general_cross_40_producido.ajax.php",
                  method:"POST",
                  cache: false,
                  processData: false,
                  dataType: "json",
                  success:function(valor3){
              
                    $.ajax({
            
                      url:"ajax_cross_40/general_cross_40_turno.ajax.php",
                      method:"POST",
                      cache: false,
                      processData: false,
                      dataType: "json",
                      success:function(valor5){
            
                        $.ajax({
            
                          url:"ajax_cross_40/general_cross_40_rate.ajax.php",
                          method:"POST",
                          cache: false,
                          processData: false,
                          dataType: "json",
                          success:function(valor2){
              
                            var mttoact = "1";
                            var mttodep1 = "1";
                            var mttoare = "3";
                            var mttoest = "8";
                            var mttotur = valor5["id_turno"];
                            var mttora = valor2["rate"];
                            var mttopd = valor3["producido"];
                            var mttooe = document.cross.oee_cross_40.value;
                            var mttoac = valor3["acumulado_crossmember_40"];
                            var mttofha = valor39["inicio_paro_crossmember_40_mantenimiento"];
                        
                            var datos = new FormData();
                            datos.append("mttoact", mttoact);
                            datos.append("mttodep1", mttodep1);
                            datos.append("mttoare", mttoare);
                            datos.append("mttoest", mttoest);
                            datos.append("mttotur", mttotur);
                            datos.append("mttora", mttora);
                            datos.append("mttopd", mttopd);
                            datos.append("mttooe", mttooe);
                            datos.append("mttoac", mttoac);
                            datos.append("mttofha", mttofha);
                        
                            $.ajax({
                                url:"ajax_cross_40/general_cross_40_paro_status_mtto_1.ajax.php",
                                method: "POST",
                                data: datos,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success:function(respuesta1){
                                                
                                }

                            });
            
                          }
            
                        });
                        
                      }
            
                    });
            
                  }
            
                });
        
              }
        
            });

          } else if (valor["status_crossmember_40_produccion"] == 1 && (valor["inicio_ciclo_crossmember_40"] == 0 || valor["fin_ciclo_crossmember_40"] == 0)){

            $.ajax({
              
              url:"ajax_cross_40/general_cross_40_status_prod_1.ajax.php",
              method:"POST",
              cache: false,
              processData: false,
              dataType: "json",
              success:function(valor41){

                $.ajax({

                  url:"ajax_cross_40/general_cross_40_producido.ajax.php",
                  method:"POST",
                  cache: false,
                  processData: false,
                  dataType: "json",
                  success:function(valor3){
              
                    $.ajax({
            
                      url:"ajax_cross_40/general_cross_40_turno.ajax.php",
                      method:"POST",
                      cache: false,
                      processData: false,
                      dataType: "json",
                      success:function(valor5){
            
                        $.ajax({
            
                          url:"ajax_cross_40/general_cross_40_rate.ajax.php",
                          method:"POST",
                          cache: false,
                          processData: false,
                          dataType: "json",
                          success:function(valor2){
              
                            var prodact = "1";
                            var proddep1 = "2";
                            var prodare = "3";
                            var prodest = "8";
                            var prodtur = valor5["id_turno"];
                            var prodra = valor2["rate"];
                            var prodpd = valor3["producido"];
                            var prodoe = document.cross.oee_cross_40.value;
                            var prodac = valor3["acumulado_crossmember_40"];
                            var prodfha = valor41["inicio_paro_crossmember_40_produccion"];
                        
                            var datos = new FormData();
                            datos.append("prodact", prodact);
                            datos.append("proddep1", proddep1);
                            datos.append("prodare", prodare);
                            datos.append("prodest", prodest);
                            datos.append("prodtur", prodtur);
                            datos.append("prodra", prodra);
                            datos.append("prodpd", prodpd);
                            datos.append("prodoe", prodoe);
                            datos.append("prodac", prodac);
                            datos.append("prodfha", prodfha);
                        
                            $.ajax({
                                url:"ajax_cross_40/general_cross_40_paro_status_prod_1.ajax.php",
                                method: "POST",
                                data: datos,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success:function(respuesta1){
                                                
                                }

                            });
            
                          }
            
                        });
                        
                      }
            
                    });
            
                  }
            
                });
        
              }
        
            });

          } else if(valor["status_crossmember_40_calidad"] == 1 && (valor["inicio_ciclo_crossmember_40"] == 0 || valor["fin_ciclo_crossmember_40"] == 0)){

            $.ajax({
              
              url:"ajax_cross_40/general_cross_40_status_cal_1.ajax.php",
              method:"POST",
              cache: false,
              processData: false,
              dataType: "json",
              success:function(valor43){

                $.ajax({

                  url:"ajax_cross_40/general_cross_40_producido.ajax.php",
                  method:"POST",
                  cache: false,
                  processData: false,
                  dataType: "json",
                  success:function(valor3){
              
                    $.ajax({
            
                      url:"ajax_cross_40/general_cross_40_turno.ajax.php",
                      method:"POST",
                      cache: false,
                      processData: false,
                      dataType: "json",
                      success:function(valor5){
            
                        $.ajax({
            
                          url:"ajax_cross_40/general_cross_40_rate.ajax.php",
                          method:"POST",
                          cache: false,
                          processData: false,
                          dataType: "json",
                          success:function(valor2){
              
                            var calact = "1";
                            var caldep1 = "3";
                            var calare = "3";
                            var calest = "8";
                            var caltur = valor5["id_turno"];
                            var calra = valor2["rate"];
                            var calpd = valor3["producido"];
                            var caloe = document.cross.oee_cross_40.value;
                            var calac = valor3["acumulado_crossmember_40"];
                            var calfha = valor43["inicio_paro_crossmember_40_calidad"];
                        
                            var datos = new FormData();
                            datos.append("calact", calact);
                            datos.append("caldep1", caldep1);
                            datos.append("calare", calare);
                            datos.append("calest", calest);
                            datos.append("caltur", caltur);
                            datos.append("calra", calra);
                            datos.append("calpd", calpd);
                            datos.append("caloe", caloe);
                            datos.append("calac", calac);
                            datos.append("calfha", calfha);
                        
                            $.ajax({
                                url:"ajax_cross_40/general_cross_40_paro_status_cali_1.ajax.php",
                                method: "POST",
                                data: datos,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success:function(respuesta1){
                                                
                                }

                            });
            
                          }
            
                        });
                        
                      }
            
                    });
            
                  }
            
                });
        
              }
        
            });

          } else if(valor["status_crossmember_40_logistica"] == 1 && (valor["inicio_ciclo_crossmember_40"] == 0 || valor["fin_ciclo_crossmember_40"] == 0)){

            $.ajax({
              
              url:"ajax_cross_40/general_cross_40_status_log_1.ajax.php",
              method:"POST",
              cache: false,
              processData: false,
              dataType: "json",
              success:function(valor45){

                $.ajax({

                  url:"ajax_cross_40/general_cross_40_producido.ajax.php",
                  method:"POST",
                  cache: false,
                  processData: false,
                  dataType: "json",
                  success:function(valor3){
              
                    $.ajax({
            
                      url:"ajax_cross_40/general_cross_40_turno.ajax.php",
                      method:"POST",
                      cache: false,
                      processData: false,
                      dataType: "json",
                      success:function(valor5){
            
                        $.ajax({
            
                          url:"ajax_cross_40/general_cross_40_rate.ajax.php",
                          method:"POST",
                          cache: false,
                          processData: false,
                          dataType: "json",
                          success:function(valor2){
              
                            var logact = "1";
                            var logdep1 = "4";
                            var logare = "3";
                            var logest = "8";
                            var logtur = valor5["id_turno"];
                            var logra = valor2["rate"];
                            var logpd = valor3["producido"];
                            var logoe = document.cross.oee_cross_40.value;
                            var logac = valor3["acumulado_crossmember_40"];
                            var logfha = valor45["inicio_paro_crossmember_40_logistica"];
                        
                            var datos = new FormData();
                            datos.append("logact", logact);
                            datos.append("logdep1", logdep1);
                            datos.append("logare", logare);
                            datos.append("logest", logest);
                            datos.append("logtur", logtur);
                            datos.append("logra", logra);
                            datos.append("logpd", logpd);
                            datos.append("logoe", logoe);
                            datos.append("logac", logac);
                            datos.append("logfha", logfha);
                        
                            $.ajax({
                                url:"ajax_cross_40/general_cross_40_paro_status_log_1.ajax.php",
                                method: "POST",
                                data: datos,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success:function(respuesta1){
                                                
                                }

                            });
            
                          }
            
                        });
                        
                      }
            
                    });
            
                  }
            
                });
        
              }
        
            });

          }

          $.ajax({
              
            url:"ajax_cross_40/general_cross_40_status_mtto_0.ajax.php",
            method:"POST",
            cache: false,
            processData: false,
            dataType: "json",
            success:function(valor40){
            
              var mttodep1 = "1";
              var mttoare = "3";
              var mttoest = "8";
              var mttofha = valor40["inicio_paro_fin_ciclo_crossmember_40"];
                      
              var datos = new FormData();
              datos.append("mttodep1", mttodep1);
              datos.append("mttoare", mttoare);
              datos.append("mttoest", mttoest);
              datos.append("mttofha", mttofha);
                              
              $.ajax({
                  url:"ajax_cross_40/general_cross_40_paro_status_mtto_0.ajax.php",
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success:function(respuesta1){
                                            
                  }

              });
          
            }
          
          });
          
          $.ajax({
                      
            url:"ajax_cross_40/general_cross_40_status_prod_0.ajax.php",
            method:"POST",
            cache: false,
            processData: false,
            dataType: "json",
            success:function(valor42){
            
              var proddep1 = "2";
              var prodare = "3";
              var prodest = "8";
              var prodfha = valor42["inicio_paro_fin_ciclo_crossmember_40"];
                      
              var datos = new FormData();
              datos.append("proddep1", proddep1);
              datos.append("prodare", prodare);
              datos.append("prodest", prodest);
              datos.append("prodfha", prodfha);
                              
              $.ajax({
                  url:"ajax_cross_40/general_cross_40_paro_status_prod_0.ajax.php",
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success:function(respuesta1){
                                            
                  }

              });
          
            }
          
          });
          
          $.ajax({
                      
            url:"ajax_cross_40/general_cross_40_status_cal_0.ajax.php",
            method:"POST",
            cache: false,
            processData: false,
            dataType: "json",
            success:function(valor44){
            
              var caldep1 = "3";
              var calare = "3";
              var calest = "8";
              var calfha = valor44["inicio_paro_fin_ciclo_crossmember_40"];
                      
              var datos = new FormData();
              datos.append("caldep1", caldep1);
              datos.append("calare", calare);
              datos.append("calest", calest);
              datos.append("calfha", calfha);
                              
              $.ajax({
                  url:"ajax_cross_40/general_cross_40_paro_status_cali_0.ajax.php",
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success:function(respuesta1){
                                            
                  }

              });
          
            }
          
          });
          
          $.ajax({
                      
            url:"ajax_cross_40/general_cross_40_status_log_0.ajax.php",
            method:"POST",
            cache: false,
            processData: false,
            dataType: "json",
            success:function(valor46){
            
              var logdep1 = "4";
              var logare = "3";
              var logest = "8";
              var logfha = valor46["inicio_paro_fin_ciclo_crossmember_40"];
                      
              var datos = new FormData();
              datos.append("logdep1", logdep1);
              datos.append("logare", logare);
              datos.append("logest", logest);
              datos.append("logfha", logfha);
                              
              $.ajax({
                  url:"ajax_cross_40/general_cross_40_paro_status_log_0.ajax.php",
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  success:function(respuesta1){
                                            
                  }

              });
          
            }
          
          });
        
        }

      })

      
    )
    auxiliar2_cross_40 = auxiliar1_cross_40
}


/*============ CERRANDO INSERTADO DE PARO CROSS_40  ============*/ 

}), 400);