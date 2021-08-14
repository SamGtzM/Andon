<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class cross_tiempo_paro_hora_oee_eje_65{

    public function eje_65_tiempo_paro_hora_oee(){

        $valor73 = ControladorEje_65::ctr_eje_65_tiempo_paro_hora_oee();

        echo json_encode($valor73);    

    }

}

$activar = new cross_tiempo_paro_hora_oee_eje_65();
$activar -> eje_65_tiempo_paro_hora_oee();