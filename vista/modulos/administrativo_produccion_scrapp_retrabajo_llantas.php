<?php

    $url = Ruta::ctrRuta();

    if (@$_SESSION["validarSesion"] != "ok" ) {

        echo '
            <script>
                window.location = "error404";
            </script>
        ';

    } else if($_SESSION["validarSesion"] == "ok" ){

        if(($_SESSION["id_acceso"] == "1" && $_SESSION["id_departamento"] == "2") || ($_SESSION["id_acceso"] == "2" && $_SESSION["id_departamento"] == "5") || ($_SESSION["id_acceso"] == "3" && $_SESSION["id_departamento"] == "6")){

        } else {

            echo '
                <script>
                    window.location = "error404";
                </script>
            ';

        }
    }

?>

<div class="back_administrativo_tables">

    <table id="table_id_administrativos scrappllantas" class="table table-striped table-bordered scrappllantas" style="width:100%">
        <thead>
            <tr>
                <th> Turn </th>
                <th> Area </th>
                <th> Station </th>
                <th> EWO </th>
                <th> Scrap </th>
                <th> Rework </th>
                <th> Rate </th>
                <th> Produced </th>
                <th> OEE </th>
				<th> Accumulated </th>
                <th> discharge date </th>
                <th> Capture </th>
            </tr>
        </thead>
        <tbody>       
			<?php

				$valor = ControladorAdministrativo::ctr_prod_scrapp_llantas();



				if(@$valor != '' || @$valor != null){

					$i = 0;
					foreach (@$valor["id"] as $value) {
					
						echo'
						<tr>
						
							<td>'.@$valor["id_turno"][$i].'</td>';

                            if(@$valor["id_area"][$i] == 1){
                                echo'<td>Wheels & tires assembly </td>'; 
                            } else {
                                echo'<td></td>'; 
                            }

                            if(@$valor["id_estacion"][$i]== 1){
                                echo'<td>50</td>'; 
                            } else {
                                echo'<td></td>'; 
                            }

                            if(@$valor["ewo"][$i] != "" || @$valor["ewo"][$i] != ""){
                                echo'<td>'.@$valor["ewo"][$i].'</td>';
                            } else {
                                echo'<td></td>';
                            }

                            if(@$valor["scrapp"][$i] != "" || @$valor["scrapp"][$i] != ""){
                                echo'<td>'.@$valor["scrapp"][$i].'</td>';
                            } else {
                                echo'<td></td>';
                            }

                            if(@$valor["retrabajo"][$i] != "" || @$valor["retrabajo"][$i] != ""){
                                echo'<td>'.@$valor["retrabajo"][$i].'</td>';
                            } else {
                                echo'<td></td>';
                            }

							echo'
                            <td>'.@$valor["rate"][$i].'</td>
                            <td>'.@$valor["producido"][$i].'</td>
                            <td>'.@$valor["OEE"][$i].'</td>
                            <td>'.@$valor["acumuladas"][$i].'</td>
                            <td>'.@$valor["fecha_alta"][$i].'</td>
                            <td><button class="btn-primary btn_consultar_scrappllantas" idscrappllantasconsulta="'.@$valor["id"][$i].'" data-toggle="modal" data-target="#exampleModal"> 🗒 </button></td>
						
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
        <h5 class="modal-title" id="exampleModalLabel"> Capture Scrap / Rework / EWO </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><br>
      <div class="modal-body">
      <div class="form-wrapper">

        <form method="POST" class="form" id="llenaridscrappl" name="llenaridscrappl">
            <center>

            <input type="hidden" id="idscrappl" name="idscrappl">

            <div class="form-group">
                <label class="form-label" for="first">Scrap</label>
                <input id="first" class="form-input" name="scrapp" type="text" autocomplete="off" require/>
            </div><br>

            <div class="form-group">
                <label class="form-label" for="first">Rework</label>
                <input id="first" class="form-input" name="retrabajo" type="text" autocomplete="off" require/>
            </div><br>

            <div class="form-group">
                <label class="form-label" for="first"> EWO </label>
                <input id="first" class="form-input" name="ewo" type="text" autocomplete="off" require/>
            </div><br>

            <div class="form-group">
                <input class="guardar" text="submit" type="submit" value="Submit">

                <?php

                    $ingresarscrapp = new ControladorAdministrativo();
                    $ingresarscrapp -> ctr_registrar_scrapp_llantas();

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