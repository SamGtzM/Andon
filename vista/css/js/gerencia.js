
$("select.turnogerencia").change(function(){

    $("select.areagerencia").hide();
    $("select.estaciongerencia").hide();
    $("#desdegerencia").hide();
    $("#hastagerencia").hide();
    document.getElementById("areagerencia").value = "";
    document.getElementById("estaciongerencia").value = "";


    var selectturnogerencia = $(this).children("option:selected").val();

    $("select.areagerencia").show();
    
    if(selectturnogerencia == 1){

      $("select.areagerencia").change(function(){

        $("select.estaciongerencia").show();

        $("select.estaciongerencia").change(function(){


              var areagerencia = document.getElementById("areagerencia").value;
              var estaciongerencia = document.getElementById("estaciongerencia").value; 
              var turgerencia = document.getElementById("turnogerencia").value; 

              var datos = new FormData();
              datos.append("areagerencia", areagerencia);
              datos.append("estaciongerencia", estaciongerencia);
              datos.append("turgerencia", turgerencia);
                              
              $.ajax({
                  url:"ajax_gerencia/gerencia_metricas.ajax.php",
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  dataType: "json",
                  success:function(valor1){

                    DIFERENCIA_ARRAY = [];
                    DEPARTAMENTO_ARRAY = [];
                    
                    for(let i = 0; i < valor1["diferenciamin"].length; i++){

                      var diferenciamin = parseInt(valor1["diferenciamin"][i]);
                      
                      if(valor1["id_departamento_paro"][i] == 1){

                        var departamento = "MTTO";

                      } else if(valor1["id_departamento_paro"][i] == 2){

                        var departamento = "PROD";

                      } else if(valor1["id_departamento_paro"][i] == 3){

                        var departamento = "QA";

                      } else if(valor1["id_departamento_paro"][i] == 4){

                        var departamento = "LOG";

                      }

                      fecha_altagerencia = valor1["inicio_paro"][i].trim();

                      DIFERENCIA_ARRAY.push(diferenciamin);
                      DEPARTAMENTO_ARRAY.push(departamento);                      
                    }

                    // line chart data
                    var buyerDataPROD = {
                      labels : DEPARTAMENTO_ARRAY,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : DIFERENCIA_ARRAY
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyersgerencia = document.getElementById('buyersgerencia').getContext('2d');
                          // draw line chart
                          new Chart(buyersgerencia).Line(buyerDataPROD);
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

    } else if(selectturnogerencia == 2){

      $("select.areagerencia").change(function(){

        $("select.estaciongerencia").show();

        $("select.estaciongerencia").change(function(){


              var areagerencia = document.getElementById("areagerencia").value;
              var estaciongerencia = document.getElementById("estaciongerencia").value; 
              var turgerencia = document.getElementById("turnogerencia").value; 
                      
              var datos = new FormData();
              datos.append("areagerencia", areagerencia);
              datos.append("estaciongerencia", estaciongerencia);
              datos.append("turgerencia", turgerencia);
                              
              $.ajax({
                  url:"ajax_gerencia/gerencia_metricas.ajax.php",
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  dataType: "json",
                  success:function(valor1){

                    DIFERENCIA_ARRAY = [];
                    DEPARTAMENTO_ARRAY = [];
                    
                    for(let i = 0; i < valor1["diferenciamin"].length; i++){

                      var diferenciamin = parseInt(valor1["diferenciamin"][i]);
                      
                      if(valor1["id_departamento_paro"][i] == 1){

                        var departamento = "MTTO";

                      } else if(valor1["id_departamento_paro"][i] == 2){

                        var departamento = "PROD";

                      } else if(valor1["id_departamento_paro"][i] == 3){

                        var departamento = "QA";

                      } else if(valor1["id_departamento_paro"][i] == 4){

                        var departamento = "LOG";

                      }

                      fecha_altagerencia = valor1["inicio_paro"][i].trim();

                      DIFERENCIA_ARRAY.push(diferenciamin);
                      DEPARTAMENTO_ARRAY.push(departamento);                      
                    }

                    // line chart data
                    var buyerDataPROD = {
                      labels : DEPARTAMENTO_ARRAY,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : DIFERENCIA_ARRAY
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyersgerencia = document.getElementById('buyersgerencia').getContext('2d');
                          // draw line chart
                          new Chart(buyersgerencia).Line(buyerDataPROD);
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

    } else if(selectturnogerencia == 3){

      $("select.areagerencia").change(function(){

        $("select.estaciongerencia").show();

        $("select.estaciongerencia").change(function(){

              var areagerencia = document.getElementById("areagerencia").value;
              var estaciongerencia = document.getElementById("estaciongerencia").value; 
              var turgerencia = document.getElementById("turnogerencia").value; 
                      
              var datos = new FormData();
              datos.append("areagerencia", areagerencia);
              datos.append("estaciongerencia", estaciongerencia);
              datos.append("turgerencia", turgerencia);
                              
              $.ajax({
                  url:"ajax_gerencia/gerencia_metricas.ajax.php",
                  method: "POST",
                  data: datos,
                  cache: false,
                  contentType: false,
                  processData: false,
                  dataType: "json",
                  success:function(valor1){

                    DIFERENCIA_ARRAY = [];
                    DEPARTAMENTO_ARRAY = [];
                    
                    for(let i = 0; i < valor1["diferenciamin"].length; i++){

                      var diferenciamin = parseInt(valor1["diferenciamin"][i]);
                      
                      if(valor1["id_departamento_paro"][i] == 1){

                        var departamento = "MTTO";

                      } else if(valor1["id_departamento_paro"][i] == 2){

                        var departamento = "PROD";

                      } else if(valor1["id_departamento_paro"][i] == 3){

                        var departamento = "QA";

                      } else if(valor1["id_departamento_paro"][i] == 4){

                        var departamento = "LOG";

                      }

                      fecha_altagerencia = valor1["inicio_paro"][i].trim();

                      DIFERENCIA_ARRAY.push(diferenciamin);
                      DEPARTAMENTO_ARRAY.push(departamento);                      
                    }

                    // line chart data
                    var buyerDataPROD = {
                      labels : DEPARTAMENTO_ARRAY,
                      datasets : [
                      {
                          fillColor : "#158ec5",
                          strokeColor : "#ffffff",
                          pointColor : "#ffffff",
                          pointStrokeColor : "#ffffff",
                          data : DIFERENCIA_ARRAY
                      }
                        ]
                          }
                          // get line chart canvas
                          var buyersgerencia = document.getElementById('buyersgerencia').getContext('2d');
                          // draw line chart
                          new Chart(buyersgerencia).Line(buyerDataPROD);
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

    }

  });