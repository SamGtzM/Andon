<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_tiempo_paro_hora_oee_cross_10{

    public function cross_10_tiempo_paro_hora_oee(){

        $valor73 = ControladorCross_10::ctr_cross_10_tiempo_paro_hora_oee();

        echo json_encode($valor73);    

    }

}

$activar = new cross_tiempo_paro_hora_oee_cross_10();
$activar -> cross_10_tiempo_paro_hora_oee();