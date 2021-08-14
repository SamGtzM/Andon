<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_tiempo_paro_hora_oee_cross_30{

    public function cross_30_tiempo_paro_hora_oee(){

        $valor73 = ControladorCross_30::ctr_cross_30_tiempo_paro_hora_oee();

        echo json_encode($valor73);    

    }

}

$activar = new cross_tiempo_paro_hora_oee_cross_30();
$activar -> cross_30_tiempo_paro_hora_oee();