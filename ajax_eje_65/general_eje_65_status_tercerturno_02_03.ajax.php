<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_tercerturno_02_03{

    public function eje_65_status_TercerTurno_02_03(){

        $valor69 = ControladorEje_65::ctr_eje_65_status_TercerTurno_02_03();

        echo json_encode($valor69);    

    }

}

$activar = new eje_65_status_tercerturno_02_03();
$activar -> eje_65_status_TercerTurno_02_03();