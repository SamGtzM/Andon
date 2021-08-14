<?php

    $url = Ruta::ctrRuta();

    if (@$_SESSION["validarSesion"] != "ok" ) {

        echo '
            <script>
                window.location = "error404";
            </script>
        ';

    } else if($_SESSION["validarSesion"] == "ok" ){

        if(($_SESSION["id_acceso"] == "2" && $_SESSION["id_departamento"] == "5") || ($_SESSION["id_acceso"] == "3" && $_SESSION["id_departamento"] == "6")){

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

    <table id="table_id_administrativos calejetableahistorial" class="table table-striped table-bordered calejetableahistorial" style="width:100%">
        <thead>
            <tr>
                <th> Area </th>
                <th> Station </th>
                <th> Department </th>
                <th> Turn </th>
                <th> start stop </th>
                <th> end of stop </th>
                <th> Seconds stop </th>
                <th> Minutes stop </th>
                <th> Hours stop </th>
                <th> Close user </th>
                <th> Name stop </th>
                <th> Description stop </th>
                <th> EWO </th>
                <th> Close </th>
            </tr>
        </thead>
        <tbody>       
            <?php

                $valor = ControladorGerencia::ctr_gerencia_top10_cross();

                if(@$valor != '' || @$valor != null){

                    $i = 0;
                    foreach (@$valor["id_paro"] as $value) {
                    
                        echo'
                        <tr>';

                            if(@$valor["id_area"][$i] == '3'){
                                echo'<td>Crossmember</td>';
                            }

                            if(@$valor["id_estacion"][$i] == 5){
                                echo'<td>10</td>';
                            } else if(@$valor["id_estacion"][$i] == 6){
                                echo'<td>20</td>';
                            } else if(@$valor["id_estacion"][$i] == 7){
                                echo'<td>30</td>';
                            }  else if(@$valor["id_estacion"][$i] == 8){
                                echo'<td>40</td>';
                            }  else if(@$valor["id_estacion"][$i] == 9){
                                echo'<td>50</td>';
                            } 

                            if(@$valor["id_departamento_paro"][$i] == 1){
                                echo'<td style="background-color:red;">MTTO</td>';
                            } else if(@$valor["id_departamento_paro"][$i] == 2){
                                echo'<td style="background-color:red;">PROD</td>';
                            } else if(@$valor["id_departamento_paro"][$i] == 3){
                                echo'<td style="background-color:red;">QA</td>';
                            } else if(@$valor["id_departamento_paro"][$i] == 4){
                                echo'<td style="background-color:red;">LOG</td>';
                            }

                            echo'
                                <td>'.@$valor["id_turno"][$i].'</td>
                                <td>'.@$valor["inicio_paro"][$i].'</td>
                                <td>'.@$valor["final_paro"][$i].'</td>
                                <td>'.@$valor["diferencia"][$i].'</td>
                                <td>'.@$valor["diferenciamin"][$i].'</td>
                                <td>'.@$valor["diferenciaho"][$i].'</td>';

                                if(@$valor["usuario_cierre"][$i] == "" || @$valor["usuario_cierre"][$i] == NULL){
                                    echo'<td style="background-color:red;">Awaiting closure</td>';
                                } else {
                                    echo'<td>'.@$valor["usuario_cierre"][$i].'</td>';
                                }

                                if(@$valor["nombre_paro"][$i] == "" || @$valor["nombre_paro"][$i] == NULL){
                                    echo'<td style="background-color:red;">Awaiting closure</td>';
                                } else {
                                    echo'<td>'.@$valor["nombre_paro"][$i].'</td>';
                                }

                                if(@$valor["descripcion_paro"][$i] == "" || @$valor["descripcion_paro"][$i] == NULL){
                                    echo'<td style="background-color:red;">Awaiting closure</td>';
                                } else {
                                    echo'<td>'.@$valor["descripcion_paro"][$i].'</td>';
                                }

                                if(@$valor["ewo"][$i] == "" || @$valor["ewo"][$i] == NULL){
                                    echo'<td style="background-color:red;">Awaiting closure</td>';
                                } else {
                                    echo'<td>'.@$valor["ewo"][$i].'</td>';
                                }

                                if(@$valor["fecha_cierre"][$i] == "" || @$valor["fecha_cierre"][$i] == NULL){
                                    echo'<td style="background-color:red;">Awaiting closure</td>';
                                } else {
                                    echo'<td>'.@$valor["fecha_cierre"][$i].'</td>';
                                }
                        
                            echo'</tr>';

                        $i++;

                    }
                }  
            ?>                     
        </tbody> 
    </table>
</div>