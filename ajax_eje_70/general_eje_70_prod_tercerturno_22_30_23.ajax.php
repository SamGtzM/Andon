<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_producido_tercerturno_22_30_23_eje_70{

    public function eje_70_Prod_TercerTurno_22_30_23(){

        $valor25 = ControladorEje_70::ctr_eje_70_Prod_TercerTurno_22_30_23();

        echo json_encode($valor25);    

    }

}

$activar = new cross_producido_tercerturno_22_30_23_eje_70();
$activar -> eje_70_Prod_TercerTurno_22_30_23();