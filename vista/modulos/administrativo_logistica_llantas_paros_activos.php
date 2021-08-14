<?php

    $url = Ruta::ctrRuta();

    if (@$_SESSION["validarSesion"] != "ok" ) {

        echo '
            <script>
                window.location = "error404";
            </script>
        ';

    } else if($_SESSION["validarSesion"] == "ok" ){

        if(($_SESSION["id_acceso"] == "1" && $_SESSION["id_departamento"] == "4") || ($_SESSION["id_acceso"] == "2" && $_SESSION["id_departamento"] == "5") || ($_SESSION["id_acceso"] == "3" && $_SESSION["id_departamento"] == "6")){

        } else {

            echo '
                <script>
                    window.location = "error404";
                </script>
            ';

        }
    }

    $nombrecierre = $_SESSION["nombre_completo"];
    $activo = 0;
    date_default_timezone_set('America/Mexico_City');
    $fecha=date("Y-m-d H:i:s");

?>

<div class="back_administrativo_tables">

    <table id="table_id_administrativos logllantastableactivos" class="table table-striped table-bordered logllantastableactivos" style="width:100%">
        <thead>
            <tr>
                <th> Area </th>
                <th> OP </th>
                <th> Accumulated </th>
                <th> Start stop </th>
                <th> End of stop </th>
                <th> Close </th>
            </tr>
        </thead>
        <tbody>       
            <?php

                $valor = ControladorAdministrativo::ctrAdministrativoLogisticaL();

                if(@$valor != '' || @$valor != null){

                    $i = 0;
                    foreach (@$valor["id_paro"] as $value) {
                    
                        echo'
                        <tr>';

                            if(@$valor["id_area"][$i] == 1){
                                echo'<td>Wheels & tires assembly</td>';
                            } else {
                                echo'<td></td>';
                            }

                            if(@$valor["id_estacion"][$i] == 1){
                                echo'<td>50</td>';
                            } else {
                                echo'<td></td>';
                            }

                            echo'<td>'.@$valor["acumuladas"][$i].'</td>
                            <td>'.@$valor["inicio_paro"][$i].'</td>';
                            
                            if(@$valor["final_paro"][$i] == "" || @$valor["final_paro"][$i] == NULL){
                                echo'<td>EN PARO</td>';
                            } else {
                                echo'<td>'.@$valor["final_paro"][$i].'</td>';
                            }
                            
                            if(@$valor["final_paro"][$i] == "" || @$valor["final_paro"][$i] == NULL){
                                echo'<td>EN PARO</td>';
                            } else {
                                echo'<td><button class="btn-primary btn_consultar_rate tablecerrar btn_cerrar_paro_log_l" idparo="'.@$valor["id_paro"][$i].'" data-toggle="modal" data-target="#exampleModal"> ❌ </button></td>';
                            }

                        echo'
                        </tr>';

                        $i++;

                    }

                }

            ?>                    
        </tbody>  
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content"><br>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Closing stop </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><br>
      <div class="modal-body">
      <div class="form-wrapper">

        <form method="POST" class="form" id="cerrarparoll" name="cerrarparoll">
            <center>

            <input type="hidden" id="idparoll" name="idparoll">
            <input type="hidden" value="<?php echo $fecha ?>" id="fecha_cierre" name="fecha_cierre">
            <input type="hidden" value="<?php echo $nombrecierre ?>" id="nombreusuario" name="nombreusuario">
            <input type="hidden" value="<?php echo $activo ?>" id="activo" name="activo">

            <div class="form-group">
                <label class="form-label" for="first">Name of stop </label>
                <input id="first" class="form-input" name="nombreparo" type="text" autocomplete="off" require/>
            </div><br>

            <div class="form-group">
            <textarea id="w3review" name="descripcionparo" rows="4" cols="50" autocomplete="off" require> Descripcion of stop </textarea>
            </div><br>

            <div class="form-group">
                <label class="form-label" for="first"> EWO </label>
                <input id="first" class="form-input" name="ewo" type="text" autocomplete="off" require/>
            </div><br>

            <div class="form-group">
                <input class="guardar" type="submit" value="Submit">

                <?php

                    $cierreParo = new ControladorAdministrativo();
                    $cierreParo -> ctrAdministrativoLogLlantasCerrarParo();

                ?>

            </div>
            </center>
        </form>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>