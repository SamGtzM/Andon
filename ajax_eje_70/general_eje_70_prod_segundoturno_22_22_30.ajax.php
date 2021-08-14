<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_producido_segundoturno_22_22_30_eje_70{

    public function eje_70_Prod_SegundoTurno_22_22_30(){

        $valor24 = ControladorEje_70::ctr_eje_70_Prod_SegundoTurno_22_22_30();

        echo json_encode($valor24);    

    }

}

$activar = new cross_producido_segundoturno_22_22_30_eje_70();
$activar -> eje_70_Prod_SegundoTurno_22_22_30();