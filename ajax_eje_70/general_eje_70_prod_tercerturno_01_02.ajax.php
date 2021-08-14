<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_producido_tercerturno_01_02_eje_70{

    public function eje_70_Prod_TercerTurno_01_02(){

        $valor28 = ControladorEje_70::ctr_eje_70_Prod_TercerTurno_01_02();

        echo json_encode($valor28);    

    }

}

$activar = new cross_producido_tercerturno_01_02_eje_70();
$activar -> eje_70_Prod_TercerTurno_01_02();