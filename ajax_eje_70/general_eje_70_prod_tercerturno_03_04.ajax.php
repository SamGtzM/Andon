<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_producido_tercerturno_03_04_eje_70{

    public function eje_70_Prod_TercerTurno_03_04(){

        $valor30 = ControladorEje_70::ctr_eje_70_Prod_TercerTurno_03_04();

        echo json_encode($valor30);    

    }

}

$activar = new cross_producido_tercerturno_03_04_eje_70();
$activar -> eje_70_Prod_TercerTurno_03_04();