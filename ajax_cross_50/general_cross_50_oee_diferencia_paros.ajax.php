<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_tiempo_paro_hora_oee_cross_50{

    public function cross_50_tiempo_paro_hora_oee(){

        $valor73 = ControladorCross_50::ctr_cross_50_tiempo_paro_hora_oee();

        echo json_encode($valor73);    

    }

}

$activar = new cross_tiempo_paro_hora_oee_cross_50();
$activar -> cross_50_tiempo_paro_hora_oee();