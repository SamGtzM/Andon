<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_tercerturno_02_03{

    public function eje_60_status_TercerTurno_02_03(){

        $valor69 = ControladorEje_60::ctr_eje_60_status_TercerTurno_02_03();

        echo json_encode($valor69);    

    }

}

$activar = new eje_60_status_tercerturno_02_03();
$activar -> eje_60_status_TercerTurno_02_03();