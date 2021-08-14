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
    $idUsuarioActual = $_SESSION["id_usuario"];
    $altaActivo = 1;
    $usuario = $_SESSION["usuario"];
    date_default_timezone_set('America/Mexico_City');
    $fecha=date("Y-m-d H:i:s");

?>

<div class="back_administrativo_tables">

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	+ New
    </button>

    <table id="table_id_administrativos adminusuarios" class="table table-striped table-bordered adminusuarios" style="width:100%">
        <thead>
            <tr>
                <th> User </th>
                <th> Department name </th>
                <th> type of access </th>
                <th> Employee number </th>
                <th> Full name </th>
                <th> Mail </th>
                <th> Register user</th>
                <th> Discharge date </th>
                <th> Edit </th>
                <th> Remove </th>
            </tr>
        </thead>
        <tbody>

            <?php

                $valor = ControladorUsuarios::ctrmostrarusuarios();

                if(@$valor != '' || @$valor != null){

                    $i = 0;
                    foreach (@$valor["id_usuario"] as $value) {

                        echo'
                        <tr>

                            <td>'.@$valor["usuario"][$i].'</td>
                            <td>'.@$valor["nombre_departamento"][$i].'</td>
                            <td>'.@$valor["tipo_acceso"][$i].'</td>
                            <td>'.@$valor["numero_empleado"][$i].'</td>
                            <td>'.@$valor["nombre_completo"][$i].'</td>
                            <td>'.@$valor["correo_electronico"][$i].'</td>
                            <td>'.@$valor["usuario_alta"][$i].'</td>
                            <td>'.@$valor["fecha_alta"][$i].'</td>
                            <td><button type="button" class=" btn-primary btn_consultar_usuario" idusuariocambio="'.@$valor["id_usuario"][$i].'" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalcambio"> 🗒 </button></td>
                            <td><button class="tableeliminar btn_eliminar_usuario" idusuario="'.@$valor["id_usuario"][$i].'" activo="0"> ❌ </button></td>

                        </tr>';

                        $eliminarUsuario = new ControladorUsuarios($usuarioActualEliminar, $fecha, $idUsuarioActual);
                        $eliminarUsuario -> ctreliminarusuario($usuarioActualEliminar, $fecha, $idUsuarioActual);

                        $i++;

                    }

                }

            ?>

        </tbody>
    </table>
</div>


<!-- Modal Alta Usuario -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content"><br>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Users table </h5>
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
                    <select name="departamento">
                        <option value=""> Select department</option>
                        <option value="1"> Maintenance </option>
                        <option value="2"> Production </option>
                        <option value="3"> Quality </option>
                        <option value="4"> Logistics </option>
                        <option value="5"> Management </option>
                        <option value="6"> Administrator </option>
                    </select>
                </div><br>


                <div class="form-group">
                    <select name="acceso">
                        <option value=""> Select Access Type </option>
                        <option value="1"> Administrative </option>
                        <option value="2"> Management </option>
                        <option value="3"> Administrator </option>
                    </select>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Employee number </label>
                    <input id="first" name="numero" class="form-input" type="text" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Full name </label>
                    <input id="first" name="nombre" class="form-input" type="text" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Mail </label>
                    <input id="first" name="correo" class="form-input" type="text" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> User </label>
                    <input id="first" name="usuario" class="form-input" type="text" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Password </label>
                    <input id="first password" name="password" class="form-input" type="password" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Confirm </label>
                    <input id="first password2" name="password2" class="form-input" type="password" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <input class="guardar" type="submit" value="Save">

                    <?php

                        $usuarioAlta = new ControladorUsuarios();
                        $usuarioAlta -> ctraltausuario();

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

<!-- Cerrando Modal Alta Usuario -->


<!-- Modal Cambio Usuario -->
<div class="modal fade" id="exampleModalcambio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content"><br>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Users table </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><br>
      <div class="modal-body">
      <div class="form-wrapper">

        <form method="POST" class="form" id="cambiousuario" name="cambiousuario">
            <center>

                <input type="hidden" id="idusuariomodif" name="idusuariomodif">
                <input type="hidden" value="<?php echo $fecha ?>" id="fecha_altamodif" name="fecha_altamodif">
                <input type="hidden" value="<?php echo $usuario ?>" id="usermodif" name="usermodif">
                <input type="hidden" value="<?php echo $altaActivo ?>" id="activomodif" name="activomodif">

                <div class="form-group">
                    <select name="departamentomodif" id="departamentomodif">
                        <option value=""></option>
                        <option value="1"> Maintenance </option>
                        <option value="2"> Production </option>
                        <option value="3"> Quality </option>
                        <option value="4"> Logistics </option>
                        <option value="5"> Management </option>
                        <option value="6"> Administrator </option>
                    </select>
                </div><br>


                <div class="form-group">
                    <select name="accesomodif" id="accesomodif">
                        <option value=""></option>
                        <option value="1"> Administrative </option>
                        <option value="2"> Management </option>
                        <option value="3"> Administrator </option>
                    </select>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Employee number </label>
                    <input id="first numero" name="numeromodif" class="form-input" type="text" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Full name </label>
                    <input id="first nombre" name="nombremodif" class="form-input" type="text" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Mail </label>
                    <input id="first correo" name="correomodif" class="form-input" type="text" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> User </label>
                    <input id="first usuario" name="usuariomodif" class="form-input" type="text" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Password </label>
                    <input id="first password" name="passwordmodif" class="form-input" type="password" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <label class="form-label" for="first"> Confirm Password </label>
                    <input id="first password2" name="password2modif" class="form-input" type="password" autocomplete="off" require/>
                </div><br>

                <div class="form-group">
                    <input class="guardar" type="submit" value="Save">

                    <?php

                        $usuarioCambio = new ControladorUsuarios();
                        $usuarioCambio -> ctrcambiousuario();

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

<!-- Cerrando Modal Cambio Usuario -->
