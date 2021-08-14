<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_tiempo_paro_hora_oee_cross_20{

    public function cross_20_tiempo_paro_hora_oee(){

        $valor73 = ControladorCross_20::ctr_cross_20_tiempo_paro_hora_oee();

        echo json_encode($valor73);    

    }

}

$activar = new cross_tiempo_paro_hora_oee_cross_20();
$activar -> cross_20_tiempo_paro_hora_oee();