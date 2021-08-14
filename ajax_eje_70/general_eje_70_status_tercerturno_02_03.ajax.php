<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_tercerturno_02_03{

    public function eje_70_status_TercerTurno_02_03(){

        $valor69 = ControladorEje_70::ctr_eje_70_status_TercerTurno_02_03();

        echo json_encode($valor69);    

    }

}

$activar = new eje_70_status_tercerturno_02_03();
$activar -> eje_70_status_TercerTurno_02_03();