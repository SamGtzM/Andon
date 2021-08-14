<?php

	$url = Ruta::ctrRuta();

	if (@$_SESSION["validarSesion"] != "ok" || @$_SESSION["id_acceso"] != 3 || @$_SESSION["id_departamento"] != 6) {
		echo '
	        <script>
	            window.location = "error404";
	        </script>
	    ';
	}
	
	$usuarioActualEliminar = $_SESSION["nombre_completo"];
    $altaActivo = 1;
    $usuario = $_SESSION["usuario"];
    date_default_timezone_set('America/Mexico_City');
    $fecha=date("Y-m-d H:i:s");

?>

<div class="back_administrativo_tables">

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalrate">
		+ New
	</button>

    <table id="table_id_administrativos administrarrate" class="table table-striped table-bordered administrarrate" style="width:100%">
        <thead>
            <tr>
                <th> Turn </th>
                <th> Area </th>
                <th> Station </th>
                <th> Rate </th>
                <th> Since </th>
                <th> Until </th>
                <th> User Register </th>
                <th> Date Added </th>
                <th> Edit </th>
				<th> Delete </th>
            </tr>
        </thead>
        <tbody>       
			<?php

				$valor = ControladorRate::ctrmostrarrate();

				if(@$valor != '' || @$valor != null){

					$i = 0;
					foreach (@$valor["id_rate"] as $value) {
					
						echo'
						<tr>
						
							<td>'.@$valor["nombre_turno"][$i].'</td>
							<td>'.@$valor["nombre_area"][$i].'</td>
							<td>'.@$valor["nombre_estacion"][$i].'</td>
							<td>'.@$valor["rate"][$i].'</td>
							<td>'.@$valor["rate_desde"][$i].'</td>
							<td>'.@$valor["rate_hasta"][$i].'</td>
							<td>'.@$valor["usuario_alta"][$i].'</td>
                            <td>'.@$valor["fecha_alta"][$i].'</td>
                            <td><button class="btn-primary btn_consultar_rate" idrateconsulta="'.@$valor["id_rate"][$i].'" data-toggle="modal" data-target="#exampleModalcambio"> 🗒 </button></td>
							<td><button class="tableeliminar btn_eliminar_rate" idrate="'.@$valor["id_rate"][$i].'" activo="0"> ❌ </button></td>
						
						</tr>';

						$eliminarRate = new ControladorRate($usuarioActualEliminar, $fecha);
						$eliminarRate -> ctreliminarrate($usuarioActualEliminar, $fecha);

						$i++;

					}

				}

			?>                     
        </tbody>  
    </table>
</div>

<!-- Modal Alta Rate -->
<div class="modal fade" id="exampleModalrate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content"><br>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Rate register </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><br>
      <div class="modal-body">
      <div class="form-wrapper">

        <form method="POST" class="form">
            <center>

                <input type="hidden" value="<?php echo $fecha ?>" id="fecha_alta" name="fecha_alta">
                <input type="hidden" value="<?php echo $usuario ?>" id="user" name="user">
                <input type="hidden" value="<?php echo $altaActivo ?>" id="activo" name="activo">

                <div class="form-group">
                    <select name="turno" required>
                        <option value=""> Select a shift</option>
                        <option value="1">first turn</option>
                        <option value="2">second shift</option>
                        <option value="3">third shift</option>
                    </select>
                </div><br>


                <div class="form-group">
                    <select name="area" required>
                        <option value=""> Select an area </option>
                        <option value="1"> Wheels & Tires Assembly </option>
                        <option value="2"> Rear Axle Assembly </option>
                        <option value="3"> Crossmember </option>
                    </select>
                </div><br>

				<div class="form-group">
                    <select name="estacion" required>
                        <option value=""> Select station </option>
                        <option value="1"> Wheels & Tires Assembly - 50 </option>
                        <option value="2"> Rear Axle Assembly - 60 </option>
                        <option value="3"> Rear Axle Assembly - 65 </option>
						<option value="4"> Rear Axle Assembly - 70 </option>
                        <option value="5"> Crossmember - 10 </option>
                        <option value="6"> Crossmember - 20 </option>
						<option value="7"> Crossmember - 30 </option>
                        <option value="8"> Crossmember - 40 </option>
                        <option value="9"> Crossmember - 50 </option>
                    </select>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Rate </label>
                    <input id="first" name="rate" class="form-input" type="text" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Rate Start Time </label>
                    <input id="first" name="rate_desde" class="form-input" type="time" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Rate End Time </label>
                    <input id="first" name="rate_hasta" class="form-input" type="time" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <input class="guardar" type="submit" value="Save">

                    <?php

                        $rateAlta = new ControladorRate();
                        $rateAlta -> ctraltarate();

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

<!-- Cerrando Modal Alta Rate -->

<!-- Modal Cambio Rate -->
<div class="modal fade" id="exampleModalcambio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content"><br>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Rate change </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><br>
      <div class="modal-body">
      <div class="form-wrapper">

        <form method="POST" class="form" id="cambiorate" name="cambiorate">
            <center>

                <input type="hidden" id="idratemodif" name="idratemodif">
                <input type="hidden" value="<?php echo $fecha ?>" id="fecha_altamodif" name="fecha_altamodif">
                <input type="hidden" value="<?php echo $usuario ?>" id="usermodif" name="usermodif">
                <input type="hidden" value="<?php echo $altaActivo ?>" id="activomodif" name="activomodif">

                <div class="form-group">
                    <select name="turnomodif" id="turnomodif" required>
                        <option value=""></option>
                        <option value="1">first turn</option>
                        <option value="2">second shift</option>
                        <option value="3">third shift</option>
                    </select>
                </div><br>


                <div class="form-group">
                    <select name="areamodif" id="areamodif" required>
                        <option value=""></option>
                        <option value="1"> Wheels & Tires Assembly </option>
                        <option value="2"> Rear Axle Assembly </option>
                        <option value="3"> Crossmember </option>
                    </select>
                </div><br>

				<div class="form-group">
                    <select name="estacionmodif" id="estacionmodif" required>
                        <option value=""></option>
                        <option value="1"> Wheels & Tires Assembly - 50 </option>
                        <option value="2"> Rear Axle Assembly - 60 </option>
                        <option value="3"> Rear Axle Assembly - 65 </option>
						<option value="4"> Rear Axle Assembly - 70 </option>
                        <option value="5"> Crossmember - 10 </option>
                        <option value="6"> Crossmember - 20 </option>
						<option value="7"> Crossmember - 30 </option>
                        <option value="8"> Crossmember - 40 </option>
                        <option value="9"> Crossmember - 50 </option>
                    </select>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Rate </label>
                    <input id="first ratemodif" name="ratemodif" class="form-input" type="text" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Rate Start Time </label>
                    <input id="first rate_desdemodif" name="rate_desdemodif" class="form-input" type="time" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Rate End Time </label>
                    <input id="first rate_hastamodif" name="rate_hastamodif" class="form-input" type="time" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <input class="guardar" type="submit" value="Save">

                    <?php

                        $ratecambio = new ControladorRate();
                        $ratecambio -> ctr_update_rate();

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

<!-- Cerrando Modal Cambio Rate -->