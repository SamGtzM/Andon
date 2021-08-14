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
            </tr>
        </thead>
        <tbody>       
			<?php

				$valor = ControladorAdministrativo::ctr_prod_scrapp_llantas_h();



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
						
						</tr>';

						$i++;

					}

				}

			?>                     
        </tbody>  
    </table>
</div>