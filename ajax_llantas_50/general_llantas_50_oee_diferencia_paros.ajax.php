<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_tiempo_paro_hora_oee{

    public function llantas_50_tiempo_paro_hora_oee(){

        $valor73 = ControladorLlantas::ctr_llantas_50_tiempo_paro_hora_oee();

        echo json_encode($valor73);    

    }

}

$activar = new llantas_tiempo_paro_hora_oee();
$activar -> llantas_50_tiempo_paro_hora_oee();