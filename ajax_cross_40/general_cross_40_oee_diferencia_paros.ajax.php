<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_tiempo_paro_hora_oee_cross_40{

    public function cross_40_tiempo_paro_hora_oee(){

        $valor73 = ControladorCross_40::ctr_cross_40_tiempo_paro_hora_oee();

        echo json_encode($valor73);    

    }

}

$activar = new cross_tiempo_paro_hora_oee_cross_40();
$activar -> cross_40_tiempo_paro_hora_oee();