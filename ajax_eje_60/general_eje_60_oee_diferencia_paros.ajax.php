<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_tiempo_paro_hora_oee_eje_60{

    public function eje_60_tiempo_paro_hora_oee(){

        $valor73 = ControladorEje_60::ctr_eje_60_tiempo_paro_hora_oee();

        echo json_encode($valor73);    

    }

}

$activar = new cross_tiempo_paro_hora_oee_eje_60();
$activar -> eje_60_tiempo_paro_hora_oee();