<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_tercerturno_04_05_eje_60{

    public function eje_60_Prod_TercerTurno_04_05(){

        $valor31 = ControladorEje_60::ctr_eje_60_Prod_TercerTurno_04_05();

        echo json_encode($valor31);    

    }

}

$activar = new cross_producido_tercerturno_04_05_eje_60();
$activar -> eje_60_Prod_TercerTurno_04_05();