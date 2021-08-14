<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_tercerturno_00_01_eje_60{

    public function eje_60_Prod_TercerTurno_00_01(){

        $valor27 = ControladorEje_60::ctr_eje_60_Prod_TercerTurno_00_01();

        echo json_encode($valor27);    

    }

}

$activar = new cross_producido_tercerturno_00_01_eje_60();
$activar -> eje_60_Prod_TercerTurno_00_01();