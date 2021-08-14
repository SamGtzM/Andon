<?php

    $url = Ruta::ctrRuta();

    if (@$_SESSION["validarSesion"] != "ok" ) {

        echo '
            <script>
                window.location = "error404";
            </script>
        ';

    } else if($_SESSION["validarSesion"] == "ok" ){

        if(($_SESSION["id_acceso"] == "1" && $_SESSION["id_departamento"] == "1") || ($_SESSION["id_acceso"] == "2" && $_SESSION["id_departamento"] == "5") || ($_SESSION["id_acceso"] == "3" && $_SESSION["id_departamento"] == "6")){

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

    <table id="table_id_administrativos mttoejetablehist" class="table table-striped table-bordered mttoejetablehist" style="width:100%">
        <thead>
            <tr>
                <th> Area </th>
                <th> OP </th>
                <th> Start stop </th>
                <th> End of stop </th>
                <th> Stop </th>
                <th> Descripcion stop </th>
                <th> EWO </th>
                <th> User close </th>
                <th> Deadline </th>
            </tr>
        </thead>
        <tbody>       
            <?php

                $valor = ControladorAdministrativo::ctrAdministrativoMttoHE();

                if(@$valor != '' || @$valor != null){

                    $i = 0;
                    foreach (@$valor["id_paro"] as $value) {
                    
                        echo'
                        <tr>';

                            if(@$valor["id_area"][$i] == 2){
                                echo'<td>Rear axle assembly</td>';
                            }

                            if(@$valor["id_estacion"][$i] == 2){
                                echo'<td>60</td>';
                            } else if(@$valor["id_estacion"][$i] == 3){
                                echo'<td>65</td>';
                            } else if(@$valor["id_estacion"][$i] == 4){
                                echo'<td>70</td>';
                            }

                            echo'<td>'.@$valor["inicio_paro"][$i].'</td>
                            <td>'.@$valor["final_paro"][$i].'</td>
                            <td>'.@$valor["nombre_paro"][$i].'</td>
                            <td>'.@$valor["descripcion_paro"][$i].'</td>
                            <td>'.@$valor["ewo"][$i].'</td>
                            <td>'.@$valor["usuario_cierre"][$i].'</td>
                            <td>'.@$valor["fecha_cierre"][$i].'</td>
                        
                        </tr>';

                        $i++;

                    }
                }  
            ?>                   
        </tbody> 
    </table>
</div>