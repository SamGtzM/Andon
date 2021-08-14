/*====================================================== MANTENIMIENTO ====================================================*/

/*=============================================
         CERRAR PARO MTTO CROSSMEMBER
=============================================*/

  $('.mttocrosstableactivos tbody').on("click", ".btn_cerrar_paro", function(){

    var idparo = $(this).attr("idparo");
  
    document.cerrarparo.idparomc.value = idparo;
  
  });
  
  
/*============ CERRANDO CERRAR PARO MTTO CROSSMEMBER ============*/

/*=============================================
         CERRAR PARO MTTO EJE ENSAMBLE
=============================================*/

  $('.mttoejetableactivos tbody').on("click", ".btn_cerrar_paro_mtto_e", function(){

    var idparo = $(this).attr("idparo");
  
    document.cerrarparoe.idparome.value = idparo;
  
  });
  
/*============ CERRANDO CERRAR PARO MTTO EJE ENSAMBLE ============*/

/*=============================================
            CERRAR PARO MTTO LLANTAS
=============================================*/

  $('.mttollantastableactivos tbody').on("click", ".btn_cerrar_paro_mtto_l", function(){

    var idparo = $(this).attr("idparo");
  
    document.cerrarparol.idparoml.value = idparo;
  
  });
  
/*============ CERRANDO CERRAR PARO MTTO LLANTAS ============*/

    $("select.turnomtto").change(function(){

      $("select.areamtto").hide();
      $("select.estacionmtto").hide();
      $("#desdemtto").hide();
      $("#hastamtto").hide();
      $("#desdelmtto").hide();
      $("#hastalmtto").hide();
      document.getElementById("areamtto").value = "";
      document.getElementById("estacionmtto").value = "";
      document.getElementById("desdemtto").value = "";
      document.getElementById("hastamtto").value = "";

      var selectturnomtto = $(this).children("option:selected").val();

      $("select.areamtto").show();
      
      if(selectturnomtto == 1){

        $("select.areamtto").change(function(){

          $("select.estacionmtto").show();

          $("select.estacionmtto").change(function(){

            $("#desdemtto").show();
            $("#desdelmtto").show();

            $("#desdemtto").on("change", function(){

              $("#hastamtto").show();
              $("#hastalmtto").show();

              $("#hastamtto").on("change", function(){

                var areamtto = document.getElementById("areamtto").value;
                var estacionmtto = document.getElementById("estacionmtto").value; 
                var desdemtto = document.getElementById("desdemtto").value; 
                var hastamtto = document.getElementById("hastamtto").value; 
                        
                var datos = new FormData();
                datos.append("areamtto", areamtto);
                datos.append("estacionmtto", estacionmtto);
                datos.append("desdemtto", desdemtto);
                datos.append("hastamtto", hastamtto);
                                
                $.ajax({
                    url:"ajax_administrativo/metricas_top_mtto_primer_turno.ajax.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success:function(valor1){

                      MTBF_ARRAYMTTO = [];
                      MTTR_ARRAYMTTO = [];
                      FECHAMTTO = [];
                      
                      for(let i = 0; i < valor1["diferencia"].length; i++){

                        var diferenciamtto = parseInt(valor1["diferencia"][i]);
                        var cantidadmtto = parseInt(valor1["cantidad"][i]);

                        var MTBFMTTO = (((30600 - diferenciamtto) / cantidadmtto));
                        var MTTRMTTO = ((diferenciamtto / cantidadmtto) / 100);

                        fecha_altamtto = valor1["fecha_alta"][i].trim();

                        MTBF_ARRAYMTTO.push(MTBFMTTO);
                        MTTR_ARRAYMTTO.push(MTTRMTTO);
                        FECHAMTTO.push(fecha_altamtto);
                        
                      }

                      // line chart data
                      var buyerDataMTTO = {
                        labels : FECHAMTTO,
                        datasets : [
                        {
                            fillColor : "#158ec5",
                            strokeColor : "#ffffff",
                            pointColor : "#ffffff",
                            pointStrokeColor : "#ffffff",
                            data : MTBF_ARRAYMTTO
                        }
                          ]
                            }
                            // get line chart canvas
                            var buyersmtto = document.getElementById('buyersmtto').getContext('2d');
                            // draw line chart
                            new Chart(buyersmtto).Line(buyerDataMTTO);
                            // pie chart data
                            var pieData = [
                                {
                                    value: 20,
                                    color:"#ffffff"
                                },
                                {
                                    value : 40,
                                    color : "#ffffff"
                                },
                                {
                                    value : 10,
                                    color : "#ffffff"
                                },
                                {
                                    value : 30,
                                    color : "#ffffff"
                                }
                            ];




                             // line chart data
                      var buyerData2MTTO = {
                        labels : FECHAMTTO,
                        datasets : [
                        {
                            fillColor : "#158ec5",
                            strokeColor : "#ffffff",
                            pointColor : "#ffffff",
                            pointStrokeColor : "#ffffff",
                            data : MTTR_ARRAYMTTO
                        }
                          ]
                            }
                            // get line chart canvas
                            var buyers2mtto = document.getElementById('buyers2mtto').getContext('2d');
                            // draw line chart
                            new Chart(buyers2mtto).Line(buyerData2MTTO);
                            // pie chart data
                            var pieData = [
                                {
                                    value: 20,
                                    color:"#ffffff"
                                },
                                {
                                    value : 40,
                                    color : "#ffffff"
                                },
                                {
                                    value : 10,
                                    color : "#ffffff"
                                },
                                {
                                    value : 30,
                                    color : "#ffffff"
                                }
                            ];
                                
                      },

                     /*error:function(data){
                       console.log(data);
                     }*/

                });
  
              });

            });
  
          });

        });

      } else if(selectturnomtto == 2){

        $("select.areamtto").change(function(){

          $("select.estacionmtto").show();

          $("select.estacionmtto").change(function(){

            $("#desdemtto").show();
            $("#desdelmtto").show();

            $("#desdemtto").on("change", function(){

              $("#hastamtto").show();
              $("#hastalmtto").show();

              $("#hastamtto").on("change", function(){

                var areamtto = document.getElementById("areamtto").value;
                var estacionmtto = document.getElementById("estacionmtto").value; 
                var desdemtto = document.getElementById("desdemtto").value; 
                var hastamtto = document.getElementById("hastamtto").value; 
                        
                var datos = new FormData();
                datos.append("areamtto", areamtto);
                datos.append("estacionmtto", estacionmtto);
                datos.append("desdemtto", desdemtto);
                datos.append("hastamtto", hastamtto);
                                
                $.ajax({
                    url:"ajax_administrativo/metricas_top_mtto_segundo_turno.ajax.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success:function(valor1){

                      MTBF_ARRAYMTTO = [];
                      MTTR_ARRAYMTTO = [];
                      FECHAMTTO = [];
                      
                      for(let i = 0; i < valor1["diferencia"].length; i++){

                        var diferenciamtto = parseInt(valor1["diferencia"][i]);
                        var cantidadmtto = parseInt(valor1["cantidad"][i]);

                        var MTBFMTTO = (((30600 - diferenciamtto) / cantidadmtto));
                        var MTTRMTTO = ((diferenciamtto / cantidadmtto) / 100);

                        fecha_altamtto = valor1["fecha_alta"][i].trim();

                        MTBF_ARRAYMTTO.push(MTBFMTTO);
                        MTTR_ARRAYMTTO.push(MTTRMTTO);
                        FECHAMTTO.push(fecha_altamtto);
                        
                      }

                      // line chart data
                      var buyerDataMTTO = {
                        labels : FECHAMTTO,
                        datasets : [
                        {
                            fillColor : "#158ec5",
                            strokeColor : "#ffffff",
                            pointColor : "#ffffff",
                            pointStrokeColor : "#ffffff",
                            data : MTBF_ARRAYMTTO
                        }
                          ]
                            }
                            // get line chart canvas
                            var buyersmtto = document.getElementById('buyersmtto').getContext('2d');
                            // draw line chart
                            new Chart(buyersmtto).Line(buyerDataMTTO);
                            // pie chart data
                            var pieData = [
                                {
                                    value: 20,
                                    color:"#ffffff"
                                },
                                {
                                    value : 40,
                                    color : "#ffffff"
                                },
                                {
                                    value : 10,
                                    color : "#ffffff"
                                },
                                {
                                    value : 30,
                                    color : "#ffffff"
                                }
                            ];




                             // line chart data
                      var buyerData2MTTO = {
                        labels : FECHAMTTO,
                        datasets : [
                        {
                            fillColor : "#158ec5",
                            strokeColor : "#ffffff",
                            pointColor : "#ffffff",
                            pointStrokeColor : "#ffffff",
                            data : MTTR_ARRAYMTTO
                        }
                          ]
                            }
                            // get line chart canvas
                            var buyers2mtto = document.getElementById('buyers2mtto').getContext('2d');
                            // draw line chart
                            new Chart(buyers2mtto).Line(buyerData2MTTO);
                            // pie chart data
                            var pieData = [
                                {
                                    value: 20,
                                    color:"#ffffff"
                                },
                                {
                                    value : 40,
                                    color : "#ffffff"
                                },
                                {
                                    value : 10,
                                    color : "#ffffff"
                                },
                                {
                                    value : 30,
                                    color : "#ffffff"
                                }
                            ];
                                
                      },

                     /*error:function(data){
                       console.log(data);
                     }*/

                });
  
              });

            });
  
          });

        });

      } else if(selectturnomtto == 3){

        $("select.areamtto").change(function(){

          $("select.estacionmtto").show();

          $("select.estacionmtto").change(function(){

            $("#desdemtto").show();
            $("#desdelmtto").show();

            $("#desdemtto").on("change", function(){

              $("#hastamtto").show();
              $("#hastalmtto").show();

              $("#hastamtto").on("change", function(){

                var areamtto = document.getElementById("areamtto").value;
                var estacionmtto = document.getElementById("estacionmtto").value; 
                var desdemtto = document.getElementById("desdemtto").value; 
                var hastamtto = document.getElementById("hastamtto").value; 
                        
                var datos = new FormData();
                datos.append("areamtto", areamtto);
                datos.append("estacionmtto", estacionmtto);
                datos.append("desdemtto", desdemtto);
                datos.append("hastamtto", hastamtto);
                                
                $.ajax({
                    url:"ajax_administrativo/metricas_top_mtto_tercer_turno.ajax.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success:function(valor1){

                      MTBF_ARRAYMTTO = [];
                      MTTR_ARRAYMTTO = [];
                      FECHAMTTO = [];
                      
                      for(let i = 0; i < valor1["diferencia"].length; i++){

                        var diferenciamtto = parseInt(valor1["diferencia"][i]);
                        var cantidadmtto = parseInt(valor1["cantidad"][i]);

                        var MTBFMTTO = (((30600 - diferenciamtto) / cantidadmtto));
                        var MTTRMTTO = ((diferenciamtto / cantidadmtto) / 100);

                        fecha_altamtto = valor1["fecha_alta"][i].trim();

                        MTBF_ARRAYMTTO.push(MTBFMTTO);
                        MTTR_ARRAYMTTO.push(MTTRMTTO);
                        FECHAMTTO.push(fecha_altamtto);
                        
                      }

                      // line chart data
                      var buyerDataMTTO = {
                        labels : FECHAMTTO,
                        datasets : [
                        {
                            fillColor : "#158ec5",
                            strokeColor : "#ffffff",
                            pointColor : "#ffffff",
                            pointStrokeColor : "#ffffff",
                            data : MTBF_ARRAYMTTO
                        }
                          ]
                            }
                            // get line chart canvas
                            var buyersmtto = document.getElementById('buyersmtto').getContext('2d');
                            // draw line chart
                            new Chart(buyersmtto).Line(buyerDataMTTO);
                            // pie chart data
                            var pieData = [
                                {
                                    value: 20,
                                    color:"#ffffff"
                                },
                                {
                                    value : 40,
                                    color : "#ffffff"
                                },
                                {
                                    value : 10,
                                    color : "#ffffff"
                                },
                                {
                                    value : 30,
                                    color : "#ffffff"
                                }
                            ];




                             // line chart data
                      var buyerData2MTTO = {
                        labels : FECHAMTTO,
                        datasets : [
                        {
                            fillColor : "#158ec5",
                            strokeColor : "#ffffff",
                            pointColor : "#ffffff",
                            pointStrokeColor : "#ffffff",
                            data : MTTR_ARRAYMTTO
                        }
                          ]
                            }
                            // get line chart canvas
                            var buyers2mtto = document.getElementById('buyers2mtto').getContext('2d');
                            // draw line chart
                            new Chart(buyers2mtto).Line(buyerData2MTTO);
                            // pie chart data
                            var pieData = [
                                {
                                    value: 20,
                                    color:"#ffffff"
                                },
                                {
                                    value : 40,
                                    color : "#ffffff"
                                },
                                {
                                    value : 10,
                                    color : "#ffffff"
                                },
                                {
                                    value : 30,
                                    color : "#ffffff"
                                }
                            ];
                                
                      },

                     /*error:function(data){
                       console.log(data);
                     }*/

                });
  
              });

            });
  
          });

        });

      }

    });

/*=============================================
            METRICAS MTTO TOP 10
=============================================*/

/*============ CERRANDO METRICAS TOP 10 MTTO ============*/

/*====================================================== CERRANDO MANTENIMIENTO ====================================================*/

/*====================================================== PRODUCCIÒN ====================================================*/

/*=============================================
         CERRAR PARO PROD CROSSMEMBER
=============================================*/

  $('.prodcrosstableactivos tbody').on("click", ".btn_cerrar_paro_prod_c", function(){

    var idparo = $(this).attr("idparo");

    document.cerrarparopc.idparopc.value = idparo;
  
  });
  
/*============ CERRANDO CERRAR PARO PROD CROSSMEMBER ============*/

/*=============================================
         CERRAR PARO PROD EJE ENSAMBLE
=============================================*/

  $('.prodejetableactivos tbody').on("click", ".btn_cerrar_paro_prod_e", function(){

    var idparo = $(this).attr("idparo");

    document.cerrarparope.idparope.value = idparo;
  
  });
  
/*============ CERRANDO CERRAR PARO PROD EJE ENSAMBLE ============*/

/*=============================================
            CERRAR PARO PROD LLANTAS
=============================================*/

  $('.prodllantastableactivos tbody').on("click", ".btn_cerrar_paro_prod_l", function(){

    var idparo = $(this).attr("idparo");

    document.cerrarparopl.idparopl.value = idparo;
  
  });
  
/*============ CERRANDO CERRAR PARO PROD LLANTAS ============*/

/*=============================================
        CONSULTAR  SCRAPP PROD LLANTAS
=============================================*/

$('.scrappllantas tbody').on("click", ".btn_consultar_scrappllantas", function(){

  var idscrappllantasconsulta = $(this).attr("idscrappllantasconsulta");

  document.llenaridscrappl.idscrappl.value = idscrappllantasconsulta;

});

/*============ CERRANDO CERRAR SCRAPP PROD LLANTAS ============*/

/*=============================================
        CONSULTAR  SCRAPP PROD CROSS
=============================================*/

$('.scrappcross tbody').on("click", ".btn_consultar_scrappcross", function(){

  var idscrappcrossconsulta = $(this).attr("idscrappcrossconsulta");

  document.llenaridscrappc.idscrappc.value = idscrappcrossconsulta;

});

/*============ CERRANDO CERRAR SCRAPP PROD CROSS ============*/

/*=============================================
          CONSULTAR  SCRAPP PROD EJE
=============================================*/

$('.scrappeje tbody').on("click", ".btn_consultar_scrappeje", function(){

  var idscrappejeconsulta = $(this).attr("idscrappejeconsulta");

  document.llenaridscrappe.idscrappe.value = idscrappejeconsulta;

});

/*============ CERRANDO CERRAR SCRAPP PROD EJE ============*/

    $("select.turnoprod").change(function(){

      $("select.areaprod").hide();
      $("select.estacionprod").hide();
      $("#desdeprod").hide();
      $("#hastaprod").hide();
      $("#desdelprod").hide();
      $("#hastalprod").hide();
      document.getElementById("areaprod").value = "";
      document.getElementById("estacionprod").value = "";
      document.getElementById("desdeprod").value = "";
      document.getElementById("hastaprod").value = "";

      var selectturnoprod = $(this).children("option:selected").val();

      $("select.areaprod").show();
      
      if(selectturnoprod == 1){

        $("select.areaprod").change(function(){

          $("select.estacionprod").show();

          $("select.estacionprod").change(function(){

            $("#desdeprod").show();
            $("#desdelprod").show();

            $("#desdeprod").on("change", function(){

              $("#hastaprod").show();
              $("#hastalprod").show();

              $("#hastaprod").on("change", function(){

                var areaprod = document.getElementById("areaprod").value;
                var estacionprod = document.getElementById("estacionprod").value; 
                var desdeprod = document.getElementById("desdeprod").value; 
                var hastaprod = document.getElementById("hastaprod").value; 
                        
                var datos = new FormData();
                datos.append("areaprod", areaprod);
                datos.append("estacionprod", estacionprod);
                datos.append("desdeprod", desdeprod);
                datos.append("hastaprod", hastaprod);
                                
                $.ajax({
                    url:"ajax_administrativo/metricas_top_prod_primer_turno.ajax.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success:function(valor1){

                      MTBF_ARRAYPROD = [];
                      MTTR_ARRAYPROD = [];
                      FECHAPROD = [];
                      
                      for(let i = 0; i < valor1["diferencia"].length; i++){

                        var diferenciaprod = parseInt(valor1["diferencia"][i]);
                        var cantidadprod = parseInt(valor1["cantidad"][i]);

                        var MTBFPROD = (((30600 - diferenciaprod) / cantidadprod));
                        var MTTRPROD = ((diferenciaprod / cantidadprod) / 100);

                        fecha_altaprod = valor1["fecha_alta"][i].trim();

                        MTBF_ARRAYPROD.push(MTBFPROD);
                        MTTR_ARRAYPROD.push(MTTRPROD);
                        FECHAPROD.push(fecha_altaprod);
                        
                      }

                      // line chart data
                      var buyerDataPROD = {
                        labels : FECHAPROD,
                        datasets : [
                        {
                            fillColor : "#158ec5",
                            strokeColor : "#ffffff",
                            pointColor : "#ffffff",
                            pointStrokeColor : "#ffffff",
                            data : MTBF_ARRAYPROD
                        }
                          ]
                            }
                            // get line chart canvas
                            var buyersprod = document.getElementById('buyersprod').getContext('2d');
                            // draw line chart
                            new Chart(buyersprod).Line(buyerDataPROD);
                            // pie chart data
                            var pieData = [
                                {
                                    value: 20,
                                    color:"#ffffff"
                                },
                                {
                                    value : 40,
                                    color : "#ffffff"
                                },
                                {
                                    value : 10,
                                    color : "#ffffff"
                                },
                                {
                                    value : 30,
                                    color : "#ffffff"
                                }
                            ];




                            // line chart data
                      var buyerData2PROD = {
                        labels : FECHAPROD,
                        datasets : [
                        {
                            fillColor : "#158ec5",
                            strokeColor : "#ffffff",
                            pointColor : "#ffffff",
                            pointStrokeColor : "#ffffff",
                            data : MTTR_ARRAYPROD
                        }
                          ]
                            }
                            // get line chart canvas
                            var buyers2prod = document.getElementById('buyers2prod').getContext('2d');
                            // draw line chart
                            new Chart(buyers2prod).Line(buyerData2PROD);
                            // pie chart data
                            var pieData = [
                                {
                                    value: 20,
                                    color:"#ffffff"
                                },
                                {
                                    value : 40,
                                    color : "#ffffff"
                                },
                                {
                                    value : 10,
                                    color : "#ffffff"
                                },
                                {
                                    value : 30,
                                    color : "#ffffff"
                                }
                            ];
                                
                      },

                    /*error:function(data){
                      console.log(data);
                    }*/

                });

              });

            });

          });

        });

      } else if(selectturnoprod == 2){

        $("select.areaprod").change(function(){

          $("select.estacionprod").show();

          $("select.estacionprod").change(function(){

            $("#desdeprod").show();
            $("#desdelprod").show();

            $("#desdeprod").on("change", function(){

              $("#hastaprod").show();
              $("#hastalprod").show();

              $("#hastaprod").on("change", function(){

                var areaprod = document.getElementById("areaprod").value;
                var estacionprod = document.getElementById("estacionprod").value; 
                var desdeprod = document.getElementById("desdeprod").value; 
                var hastaprod = document.getElementById("hastaprod").value; 
                        
                var datos = new FormData();
                datos.append("areaprod", areaprod);
                datos.append("estacionprod", estacionprod);
                datos.append("desdeprod", desdeprod);
                datos.append("hastaprod", hastaprod);
                                
                $.ajax({
                    url:"ajax_administrativo/metricas_top_prod_segundo_turno.ajax.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success:function(valor1){

                      MTBF_ARRAYPROD = [];
                      MTTR_ARRAYPROD = [];
                      FECHAPROD = [];
                      
                      for(let i = 0; i < valor1["diferencia"].length; i++){

                        var diferenciaprod = parseInt(valor1["diferencia"][i]);
                        var cantidadprod = parseInt(valor1["cantidad"][i]);

                        var MTBFPROD = (((30600 - diferenciaprod) / cantidadprod));
                        var MTTRPROD = ((diferenciaprod / cantidadprod) / 100);

                        fecha_altaprod = valor1["fecha_alta"][i].trim();

                        MTBF_ARRAYPROD.push(MTBFPROD);
                        MTTR_ARRAYPROD.push(MTTRPROD);
                        FECHAPROD.push(fecha_altaprod);
                        
                      }

                      // line chart data
                      var buyerDataPROD = {
                        labels : FECHAPROD,
                        datasets : [
                        {
                            fillColor : "#158ec5",
                            strokeColor : "#ffffff",
                            pointColor : "#ffffff",
                            pointStrokeColor : "#ffffff",
                            data : MTBF_ARRAYPROD
                        }
                          ]
                            }
                            // get line chart canvas
                            var buyersprod = document.getElementById('buyersprod').getContext('2d');
                            // draw line chart
                            new Chart(buyersprod).Line(buyerDataPROD);
                            // pie chart data
                            var pieData = [
                                {
                                    value: 20,
                                    color:"#ffffff"
                                },
                                {
                                    value : 40,
                                    color : "#ffffff"
                                },
                                {
                                    value : 10,
                                    color : "#ffffff"
                                },
                                {
                                    value : 30,
                                    color : "#ffffff"
                                }
                            ];




                            // line chart data
                      var buyerData2PROD = {
                        labels : FECHAPROD,
                        datasets : [
                        {
                            fillColor : "#158ec5",
                            strokeColor : "#ffffff",
                            pointColor : "#ffffff",
                            pointStrokeColor : "#ffffff",
                            data : MTTR_ARRAYPROD
                        }
                          ]
                            }
                            // get line chart canvas
                            var buyers2prod = document.getElementById('buyers2prod').getContext('2d');
                            // draw line chart
                            new Chart(buyers2prod).Line(buyerData2PROD);
                            // pie chart data
                            var pieData = [
                                {
                                    value: 20,
                                    color:"#ffffff"
                                },
                                {
                                    value : 40,
                                    color : "#ffffff"
                                },
                                {
                                    value : 10,
                                    color : "#ffffff"
                                },
                                {
                                    value : 30,
                                    color : "#ffffff"
                                }
                            ];
                                
                      },

                    /*error:function(data){
                      console.log(data);
                    }*/

                });

              });

            });

          });

        });

      } else if(selectturnoprod == 3){

        $("select.areaprod").change(function(){

          $("select.estacionprod").show();

          $("select.estacionprod").change(function(){

            $("#desdeprod").show();
            $("#desdelprod").show();

            $("#desdeprod").on("change", function(){

              $("#hastaprod").show();
              $("#hastalprod").show();

              $("#hastaprod").on("change", function(){

                var areaprod = document.getElementById("areaprod").value;
                var estacionprod = document.getElementById("estacionprod").value; 
                var desdeprod = document.getElementById("desdeprod").value; 
                var hastaprod = document.getElementById("hastaprod").value; 
                        
                var datos = new FormData();
                datos.append("areaprod", areaprod);
                datos.append("estacionprod", estacionprod);
                datos.append("desdeprod", desdeprod);
                datos.append("hastaprod", hastaprod);
                                
                $.ajax({
                    url:"ajax_administrativo/metricas_top_prod_tercer_turno.ajax.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success:function(valor1){

                      MTBF_ARRAYPROD = [];
                      MTTR_ARRAYPROD = [];
                      FECHAPROD = [];
                      
                      for(let i = 0; i < valor1["diferencia"].length; i++){

                        var diferenciaprod = parseInt(valor1["diferencia"][i]);
                        var cantidadprod = parseInt(valor1["cantidad"][i]);

                        var MTBFPROD = (((30600 - diferenciaprod) / cantidadprod));
                        var MTTRPROD = ((diferenciaprod / cantidadprod) / 100);

                        fecha_altaprod = valor1["fecha_alta"][i].trim();

                        MTBF_ARRAYPROD.push(MTBFPROD);
                        MTTR_ARRAYPROD.push(MTTRPROD);
                        FECHAPROD.push(fecha_altaprod);
                        
                      }

                      // line chart data
                      var buyerDataPROD = {
                        labels : FECHAPROD,
                        datasets : [
                        {
                            fillColor : "#158ec5",
                            strokeColor : "#ffffff",
                            pointColor : "#ffffff",
                            pointStrokeColor : "#ffffff",
                            data : MTBF_ARRAYPROD
                        }
                          ]
                            }
                            // get line chart canvas
                            var buyersprod = document.getElementById('buyersprod').getContext('2d');
                            // draw line chart
                            new Chart(buyersprod).Line(buyerDataPROD);
                            // pie chart data
                            var pieData = [
                                {
                                    value: 20,
                                    color:"#ffffff"
                                },
                                {
                                    value : 40,
                                    color : "#ffffff"
                                },
                                {
                                    value : 10,
                                    color : "#ffffff"
                                },
                                {
                                    value : 30,
                                    color : "#ffffff"
                                }
                            ];




                            // line chart data
                      var buyerData2PROD = {
                        labels : FECHAPROD,
                        datasets : [
                        {
                            fillColor : "#158ec5",
                            strokeColor : "#ffffff",
                            pointColor : "#ffffff",
                            pointStrokeColor : "#ffffff",
                            data : MTTR_ARRAYPROD
                        }
                          ]
                            }
                            // get line chart canvas
                            var buyers2prod = document.getElementById('buyers2prod').getContext('2d');
                            // draw line chart
                            new Chart(buyers2prod).Line(buyerData2PROD);
                            // pie chart data
                            var pieData = [
                                {
                                    value: 20,
                                    color:"#ffffff"
                                },
                                {
                                    value : 40,
                                    color : "#ffffff"
                                },
                                {
                                    value : 10,
                                    color : "#ffffff"
                                },
                                {
                                    value : 30,
                                    color : "#ffffff"
                                }
                            ];
                                
                      },

                    /*error:function(data){
                      console.log(data);
                    }*/

                });

              });

            });

          });

        });

      }

    });

/*====================================================== CERRANDO PRODUCCIÒN ====================================================*/

/*====================================================== CALIDAD ====================================================*/

/*=============================================
         CERRAR PARO CAL CROSSMEMBER
=============================================*/

  $('.calcrosstableactivos tbody').on("click", ".btn_cerrar_paro_cal_c", function(){

    var idparo = $(this).attr("idparo");
  
    document.cerrarparocc.idparocc.value = idparo;
  
  });
  
/*============ CERRANDO CERRAR PARO CAL CROSSMEMBER ============*/

/*=============================================
         CERRAR PARO CAL EJE ENSAMBLE
=============================================*/

  $('.calejetableactivos tbody').on("click", ".btn_cerrar_paro_cal_e", function(){

    var idparo = $(this).attr("idparo");
  
    document.cerrarparoce.idparoce.value = idparo;
  
  });
  
/*============ CERRANDO CERRAR PARO CAL EJE ENSAMBLE ============*/

/*=============================================
            CERRAR PARO CAL LLANTAS
=============================================*/

  $('.calllantastableactivos tbody').on("click", ".btn_cerrar_paro_cal_l", function(){

    var idparo = $(this).attr("idparo");
  
    document.cerrarparocl.idparocl.value = idparo;
  
  });
  
/*============ CERRANDO CERRAR PARO CAL LLANTAS ============*/

  $("select.turnocal").change(function(){

    $("select.areacal").hide();
    $("select.estacioncal").hide();
    $("#desdecal").hide();
    $("#hastacal").hide();
    $("#desdelcal").hide();
    $("#hastalcal").hide();
    document.getElementById("areacal").value = "";
    document.getElementById("estacioncal").value = "";
    document.getElementById("desdecal").value = "";
    document.getElementById("hastacal").value = "";

    var selectturnocal = $(this).children("option:selected").val();

    $("select.areacal").show();
    
    if(selectturnocal == 1){

      $("select.areacal").change(function(){

        $("select.estacioncal").show();

        $("select.estacioncal").change(function(){

          $("#desdecal").show();
          $("#desdelcal").show();

          $("#desdecal").on("change", function(){

            $("#hastacal").show();
            $("#hastalcal").show();

            $("#hastacal").on("change", function(){

              var areacal = document.getElementById("areacal").value;
              var estacioncal = document.getElementById("estacioncal").value; 
              var desdecal = document.getElementById("desdecal").value; 
              var hastacal = document.getElementById("hastacal").value; 
                      
              var datos = new FormData();
              datos.append("areacal", areacal);
              datos.append("estacioncal", estacioncal);
              datos.append("desdecal", desdecal);
              datos.append("hastacal", hastacal);
                              
              $.ajax({
                  url:"ajax_administrativo/metricas_top_cal_primer_turno.ajax.php",
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  dataType: "json",
                  success:function(valor1){

                    MTBF_ARRAYCAL = [];
                    MTTR_ARRAYCAL = [];
                    FECHACAL = [];
                    
                    for(let i = 0; i < valor1["diferencia"].length; i++){

                      var diferenciacal = parseInt(valor1["diferencia"][i]);
                      var cantidadcal = parseInt(valor1["cantidad"][i]);

                      var MTBFCAL = (((30600 - diferenciacal) / cantidadcal));
                      var MTTRCAL = ((diferenciacal / cantidadcal) / 100);

                      fecha_altacal = valor1["fecha_alta"][i].trim();

                      MTBF_ARRAYCAL.push(MTBFCAL);
                      MTTR_ARRAYCAL.push(MTTRCAL);
                      FECHACAL.push(fecha_altacal);
                      
                    }

                    // line chart data
                    var buyerDataCAL = {
                      labels : FECHACAL,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : MTBF_ARRAYCAL
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyerscal = document.getElementById('buyerscal').getContext('2d');
                          // draw line chart
                          new Chart(buyerscal).Line(buyerDataCAL);
                          // pie chart data
                          var pieData = [
                              {
                                  value: 20,
                                  color:"#ffffff"
                              },
                              {
                                  value : 40,
                                  color : "#ffffff"
                              },
                              {
                                  value : 10,
                                  color : "#ffffff"
                              },
                              {
                                  value : 30,
                                  color : "#ffffff"
                              }
                          ];




                          // line chart data
                    var buyerData2CAL = {
                      labels : FECHACAL,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : MTTR_ARRAYCAL
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyers2cal = document.getElementById('buyers2cal').getContext('2d');
                          // draw line chart
                          new Chart(buyers2cal).Line(buyerData2CAL);
                          // pie chart data
                          var pieData = [
                              {
                                  value: 20,
                                  color:"#ffffff"
                              },
                              {
                                  value : 40,
                                  color : "#ffffff"
                              },
                              {
                                  value : 10,
                                  color : "#ffffff"
                              },
                              {
                                  value : 30,
                                  color : "#ffffff"
                              }
                          ];
                              
                    },

                  /*error:function(data){
                    console.log(data);
                  }*/

              });

            });

          });

        });

      });

    } else if(selectturnocal == 2){

      $("select.areacal").change(function(){

        $("select.estacioncal").show();

        $("select.estacioncal").change(function(){

          $("#desdecal").show();
          $("#desdelcal").show();

          $("#desdecal").on("change", function(){

            $("#hastacal").show();
            $("#hastalcal").show();

            $("#hastacal").on("change", function(){

              var areacal = document.getElementById("areacal").value;
              var estacioncal = document.getElementById("estacioncal").value; 
              var desdecal = document.getElementById("desdecal").value; 
              var hastacal = document.getElementById("hastacal").value; 
                      
              var datos = new FormData();
              datos.append("areacal", areacal);
              datos.append("estacioncal", estacioncal);
              datos.append("desdecal", desdecal);
              datos.append("hastacal", hastacal);
                              
              $.ajax({
                  url:"ajax_administrativo/metricas_top_cal_segundo_turno.ajax.php",
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  dataType: "json",
                  success:function(valor1){

                    MTBF_ARRAYCAL = [];
                    MTTR_ARRAYCAL = [];
                    FECHACAL = [];
                    
                    for(let i = 0; i < valor1["diferencia"].length; i++){

                      var diferenciacal = parseInt(valor1["diferencia"][i]);
                      var cantidadcal = parseInt(valor1["cantidad"][i]);

                      var MTBFCAL = (((30600 - diferenciacal) / cantidadcal));
                      var MTTRCAL = ((diferenciacal / cantidadcal) / 100);

                      fecha_altacal = valor1["fecha_alta"][i].trim();

                      MTBF_ARRAYCAL.push(MTBFCAL);
                      MTTR_ARRAYCAL.push(MTTRCAL);
                      FECHACAL.push(fecha_altacal);
                      
                    }

                    // line chart data
                    var buyerDataCAL = {
                      labels : FECHACAL,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : MTBF_ARRAYCAL
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyerscal = document.getElementById('buyerscal').getContext('2d');
                          // draw line chart
                          new Chart(buyerscal).Line(buyerDataCAL);
                          // pie chart data
                          var pieData = [
                              {
                                  value: 20,
                                  color:"#ffffff"
                              },
                              {
                                  value : 40,
                                  color : "#ffffff"
                              },
                              {
                                  value : 10,
                                  color : "#ffffff"
                              },
                              {
                                  value : 30,
                                  color : "#ffffff"
                              }
                          ];




                          // line chart data
                    var buyerData2CAL = {
                      labels : FECHACAL,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : MTTR_ARRAYCAL
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyers2cal = document.getElementById('buyers2cal').getContext('2d');
                          // draw line chart
                          new Chart(buyers2cal).Line(buyerData2CAL);
                          // pie chart data
                          var pieData = [
                              {
                                  value: 20,
                                  color:"#ffffff"
                              },
                              {
                                  value : 40,
                                  color : "#ffffff"
                              },
                              {
                                  value : 10,
                                  color : "#ffffff"
                              },
                              {
                                  value : 30,
                                  color : "#ffffff"
                              }
                          ];
                              
                    },

                  /*error:function(data){
                    console.log(data);
                  }*/

              });

            });

          });

        });

      });

    } else if(selectturnocal == 3){

      $("select.areacal").change(function(){

        $("select.estacioncal").show();

        $("select.estacioncal").change(function(){

          $("#desdecal").show();
          $("#desdelcal").show();

          $("#desdecal").on("change", function(){

            $("#hastacal").show();
            $("#hastalcal").show();

            $("#hastacal").on("change", function(){

              var areacal = document.getElementById("areacal").value;
              var estacioncal = document.getElementById("estacioncal").value; 
              var desdecal = document.getElementById("desdecal").value; 
              var hastacal = document.getElementById("hastacal").value; 
                      
              var datos = new FormData();
              datos.append("areacal", areacal);
              datos.append("estacioncal", estacioncal);
              datos.append("desdecal", desdecal);
              datos.append("hastacal", hastacal);
                              
              $.ajax({
                  url:"ajax_administrativo/metricas_top_cal_tercer_turno.ajax.php",
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  dataType: "json",
                  success:function(valor1){

                    MTBF_ARRAYCAL = [];
                    MTTR_ARRAYCAL = [];
                    FECHACAL = [];
                    
                    for(let i = 0; i < valor1["diferencia"].length; i++){

                      var diferenciacal = parseInt(valor1["diferencia"][i]);
                      var cantidadcal = parseInt(valor1["cantidad"][i]);

                      var MTBFCAL = (((30600 - diferenciacal) / cantidadcal));
                      var MTTRCAL = ((diferenciacal / cantidadcal) / 100);

                      fecha_altacal = valor1["fecha_alta"][i].trim();

                      MTBF_ARRAYCAL.push(MTBFCAL);
                      MTTR_ARRAYCAL.push(MTTRCAL);
                      FECHACAL.push(fecha_altacal);
                      
                    }

                    // line chart data
                    var buyerDataCAL = {
                      labels : FECHACAL,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : MTBF_ARRAYCAL
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyerscal = document.getElementById('buyerscal').getContext('2d');
                          // draw line chart
                          new Chart(buyerscal).Line(buyerDataCAL);
                          // pie chart data
                          var pieData = [
                              {
                                  value: 20,
                                  color:"#ffffff"
                              },
                              {
                                  value : 40,
                                  color : "#ffffff"
                              },
                              {
                                  value : 10,
                                  color : "#ffffff"
                              },
                              {
                                  value : 30,
                                  color : "#ffffff"
                              }
                          ];




                          // line chart data
                    var buyerData2CAL = {
                      labels : FECHACAL,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : MTTR_ARRAYCAL
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyers2cal = document.getElementById('buyers2cal').getContext('2d');
                          // draw line chart
                          new Chart(buyers2cal).Line(buyerData2CAL);
                          // pie chart data
                          var pieData = [
                              {
                                  value: 20,
                                  color:"#ffffff"
                              },
                              {
                                  value : 40,
                                  color : "#ffffff"
                              },
                              {
                                  value : 10,
                                  color : "#ffffff"
                              },
                              {
                                  value : 30,
                                  color : "#ffffff"
                              }
                          ];
                              
                    },

                  /*error:function(data){
                    console.log(data);
                  }*/

              });

            });

          });

        });

      });

    }

  });

/*====================================================== CERRANDO CALIDAD ====================================================*/

/*====================================================== LOGISTICA ====================================================*/

/*=============================================
         CERRAR PARO LOG CROSSMEMBER
=============================================*/

  $('.logcrosstableactivos tbody').on("click", ".btn_cerrar_paro_log_c", function(){

    var idparo = $(this).attr("idparo");

    document.cerrarparolc.idparolc.value = idparo;
  
  });
  
/*============ CERRANDO CERRAR PARO LOG CROSSMEMBER ============*/

/*=============================================
         CERRAR PARO LOG EJE ENSAMBLE
=============================================*/

  $('.logejetableactivos tbody').on("click", ".btn_cerrar_paro_log_e", function(){

    var idparo = $(this).attr("idparo");
  
    document.cerrarparole.idparole.value = idparo;
  
  });
  
/*============ CERRANDO CERRAR PARO LOG EJE ENSAMBLE ============*/

/*=============================================
            CERRAR PARO LOG LLANTAS
=============================================*/

  $('.logllantastableactivos tbody').on("click", ".btn_cerrar_paro_log_l", function(){

    var idparo = $(this).attr("idparo");
  
    document.cerrarparoll.idparoll.value = idparo;
  
  })
  
/*============ CERRANDO CERRAR LOG CAL LLANTAS ============*/

  $("select.turnolog").change(function(){

    $("select.arealog").hide();
    $("select.estacionlog").hide();
    $("#desdelog").hide();
    $("#hastalog").hide();
    $("#desdellog").hide();
    $("#hastallog").hide();
    document.getElementById("arealog").value = "";
    document.getElementById("estacionlog").value = "";
    document.getElementById("desdelog").value = "";
    document.getElementById("hastalog").value = "";

    var selectturnolog = $(this).children("option:selected").val();

    $("select.arealog").show();
    
    if(selectturnolog == 1){

      $("select.arealog").change(function(){

        $("select.estacionlog").show();

        $("select.estacionlog").change(function(){

          $("#desdelog").show();
          $("#desdellog").show();

          $("#desdelog").on("change", function(){

            $("#hastalog").show();
            $("#hastallog").show();

            $("#hastalog").on("change", function(){

              var arealog = document.getElementById("arealog").value;
              var estacionlog = document.getElementById("estacionlog").value; 
              var desdelog = document.getElementById("desdelog").value; 
              var hastalog = document.getElementById("hastalog").value; 
                      
              var datos = new FormData();
              datos.append("arealog", arealog);
              datos.append("estacionlog", estacionlog);
              datos.append("desdelog", desdelog);
              datos.append("hastalog", hastalog);
                              
              $.ajax({
                  url:"ajax_administrativo/metricas_top_log_primer_turno.ajax.php",
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  dataType: "json",
                  success:function(valor1){

                    MTBF_ARRAYLOG = [];
                    MTTR_ARRAYLOG = [];
                    FECHALOG = [];
                    
                    for(let i = 0; i < valor1["diferencia"].length; i++){

                      var diferencialog = parseInt(valor1["diferencia"][i]);
                      var cantidadlog = parseInt(valor1["cantidad"][i]);

                      var MTBFLOG = (((30600 - diferencialog) / cantidadlog));
                      var MTTRLOG = ((diferencialog / cantidadlog) / 100);

                      fecha_altalog = valor1["fecha_alta"][i].trim();

                      MTBF_ARRAYLOG.push(MTBFLOG);
                      MTTR_ARRAYLOG.push(MTTRLOG);
                      FECHALOG.push(fecha_altalog);
                      
                    }

                    // line chart data
                    var buyerDataLOG = {
                      labels : FECHALOG,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : MTBF_ARRAYLOG
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyerslog = document.getElementById('buyerslog').getContext('2d');
                          // draw line chart
                          new Chart(buyerslog).Line(buyerDataLOG);
                          // pie chart data
                          var pieData = [
                              {
                                  value: 20,
                                  color:"#ffffff"
                              },
                              {
                                  value : 40,
                                  color : "#ffffff"
                              },
                              {
                                  value : 10,
                                  color : "#ffffff"
                              },
                              {
                                  value : 30,
                                  color : "#ffffff"
                              }
                          ];




                          // line chart data
                    var buyerData2LOG = {
                      labels : FECHALOG,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : MTTR_ARRAYLOG
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyers2log = document.getElementById('buyers2log').getContext('2d');
                          // draw line chart
                          new Chart(buyers2log).Line(buyerData2LOG);
                          // pie chart data
                          var pieData = [
                              {
                                  value: 20,
                                  color:"#ffffff"
                              },
                              {
                                  value : 40,
                                  color : "#ffffff"
                              },
                              {
                                  value : 10,
                                  color : "#ffffff"
                              },
                              {
                                  value : 30,
                                  color : "#ffffff"
                              }
                          ];
                              
                    },

                  /*error:function(data){
                    console.log(data);
                  }*/

              });

            });

          });

        });

      });

    } else if(selectturnolog == 2){

      $("select.arealog").change(function(){

        $("select.estacionlog").show();

        $("select.estacionlog").change(function(){

          $("#desdelog").show();
          $("#desdellog").show();

          $("#desdelog").on("change", function(){

            $("#hastalog").show();
            $("#hastallog").show();

            $("#hastalog").on("change", function(){

              var arealog = document.getElementById("arealog").value;
              var estacionlog = document.getElementById("estacionlog").value; 
              var desdelog = document.getElementById("desdelog").value; 
              var hastalog = document.getElementById("hastalog").value; 
                      
              var datos = new FormData();
              datos.append("arealog", arealog);
              datos.append("estacionlog", estacionlog);
              datos.append("desdelog", desdelog);
              datos.append("hastalog", hastalog);
                              
              $.ajax({
                  url:"ajax_administrativo/metricas_top_log_segundo_turno.ajax.php",
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  dataType: "json",
                  success:function(valor1){

                    MTBF_ARRAYLOG = [];
                    MTTR_ARRAYLOG = [];
                    FECHALOG = [];
                    
                    for(let i = 0; i < valor1["diferencia"].length; i++){

                      var diferencialog = parseInt(valor1["diferencia"][i]);
                      var cantidadlog = parseInt(valor1["cantidad"][i]);

                      var MTBFLOG = (((30600 - diferencialog) / cantidadlog));
                      var MTTRLOG = ((diferencialog / cantidadlog) / 100);

                      fecha_altalog = valor1["fecha_alta"][i].trim();

                      MTBF_ARRAYLOG.push(MTBFLOG);
                      MTTR_ARRAYLOG.push(MTTRLOG);
                      FECHALOG.push(fecha_altalog);
                      
                    }

                    // line chart data
                    var buyerDataLOG = {
                      labels : FECHALOG,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : MTBF_ARRAYLOG
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyerslog = document.getElementById('buyerslog').getContext('2d');
                          // draw line chart
                          new Chart(buyerslog).Line(buyerDataLOG);
                          // pie chart data
                          var pieData = [
                              {
                                  value: 20,
                                  color:"#ffffff"
                              },
                              {
                                  value : 40,
                                  color : "#ffffff"
                              },
                              {
                                  value : 10,
                                  color : "#ffffff"
                              },
                              {
                                  value : 30,
                                  color : "#ffffff"
                              }
                          ];




                          // line chart data
                    var buyerData2LOG = {
                      labels : FECHALOG,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : MTTR_ARRAYLOG
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyers2log = document.getElementById('buyers2log').getContext('2d');
                          // draw line chart
                          new Chart(buyers2log).Line(buyerData2LOG);
                          // pie chart data
                          var pieData = [
                              {
                                  value: 20,
                                  color:"#ffffff"
                              },
                              {
                                  value : 40,
                                  color : "#ffffff"
                              },
                              {
                                  value : 10,
                                  color : "#ffffff"
                              },
                              {
                                  value : 30,
                                  color : "#ffffff"
                              }
                          ];
                              
                    },

                  /*error:function(data){
                    console.log(data);
                  }*/

              });

            });

          });

        });

      });

    } else if(selectturnolog == 3){

      $("select.arealog").change(function(){

        $("select.estacionlog").show();

        $("select.estacionlog").change(function(){

          $("#desdelog").show();
          $("#desdellog").show();

          $("#desdelog").on("change", function(){

            $("#hastalog").show();
            $("#hastallog").show();

            $("#hastalog").on("change", function(){

              var arealog = document.getElementById("arealog").value;
              var estacionlog = document.getElementById("estacionlog").value; 
              var desdelog = document.getElementById("desdelog").value; 
              var hastalog = document.getElementById("hastalog").value; 
                      
              var datos = new FormData();
              datos.append("arealog", arealog);
              datos.append("estacionlog", estacionlog);
              datos.append("desdelog", desdelog);
              datos.append("hastalog", hastalog);
                              
              $.ajax({
                  url:"ajax_administrativo/metricas_top_log_tercer_turno.ajax.php",
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  dataType: "json",
                  success:function(valor1){

                    MTBF_ARRAYLOG = [];
                    MTTR_ARRAYLOG = [];
                    FECHALOG = [];
                    
                    for(let i = 0; i < valor1["diferencia"].length; i++){

                      var diferencialog = parseInt(valor1["diferencia"][i]);
                      var cantidadlog = parseInt(valor1["cantidad"][i]);

                      var MTBFLOG = (((30600 - diferencialog) / cantidadlog));
                      var MTTRLOG = ((diferencialog / cantidadlog) / 100);

                      fecha_altalog = valor1["fecha_alta"][i].trim();

                      MTBF_ARRAYLOG.push(MTBFLOG);
                      MTTR_ARRAYLOG.push(MTTRLOG);
                      FECHALOG.push(fecha_altalog);
                      
                    }

                    // line chart data
                    var buyerDataLOG = {
                      labels : FECHALOG,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : MTBF_ARRAYLOG
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyerslog = document.getElementById('buyerslog').getContext('2d');
                          // draw line chart
                          new Chart(buyerslog).Line(buyerDataLOG);
                          // pie chart data
                          var pieData = [
                              {
                                  value: 20,
                                  color:"#ffffff"
                              },
                              {
                                  value : 40,
                                  color : "#ffffff"
                              },
                              {
                                  value : 10,
                                  color : "#ffffff"
                              },
                              {
                                  value : 30,
                                  color : "#ffffff"
                              }
                          ];




                          // line chart data
                    var buyerData2LOG = {
                      labels : FECHALOG,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : MTTR_ARRAYLOG
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyers2log = document.getElementById('buyers2log').getContext('2d');
                          // draw line chart
                          new Chart(buyers2log).Line(buyerData2LOG);
                          // pie chart data
                          var pieData = [
                              {
                                  value: 20,
                                  color:"#ffffff"
                              },
                              {
                                  value : 40,
                                  color : "#ffffff"
                              },
                              {
                                  value : 10,
                                  color : "#ffffff"
                              },
                              {
                                  value : 30,
                                  color : "#ffffff"
                              }
                          ];
                              
                    },

                  /*error:function(data){
                    console.log(data);
                  }*/

              });

            });

          });

        });

      });

    }

  });

/*====================================================== CERRANDO LOGISTICA ====================================================*/