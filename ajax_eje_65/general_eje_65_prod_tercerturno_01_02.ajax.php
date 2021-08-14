<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class cross_producido_tercerturno_01_02_eje_65{

    public function eje_65_Prod_TercerTurno_01_02(){

        $valor28 = ControladorEje_65::ctr_eje_65_Prod_TercerTurno_01_02();

        echo json_encode($valor28);    

    }

}

$activar = new cross_producido_tercerturno_01_02_eje_65();
$activar -> eje_65_Prod_TercerTurno_01_02();