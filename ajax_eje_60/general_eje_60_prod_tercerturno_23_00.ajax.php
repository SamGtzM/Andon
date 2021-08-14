<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_tercerturno_23_00_eje_60{

    public function eje_60_Prod_TercerTurno_23_00(){

        $valor26 = ControladorEje_60::ctr_eje_60_Prod_TercerTurno_23_00();

        echo json_encode($valor26);    

    }

}

$activar = new cross_producido_tercerturno_23_00_eje_60();
$activar -> eje_60_Prod_TercerTurno_23_00();