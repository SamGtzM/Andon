<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_tercerturno_22_30_23_eje_60{

    public function eje_60_Prod_TercerTurno_22_30_23(){

        $valor25 = ControladorEje_60::ctr_eje_60_Prod_TercerTurno_22_30_23();

        echo json_encode($valor25);    

    }

}

$activar = new cross_producido_tercerturno_22_30_23_eje_60();
$activar -> eje_60_Prod_TercerTurno_22_30_23();