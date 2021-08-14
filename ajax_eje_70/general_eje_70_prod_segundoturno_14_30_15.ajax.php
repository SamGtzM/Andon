<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_producido_segundoturno_14_30_15_eje_70{

    public function eje_70_Prod_SegundoTurno_14_30_15(){

        $valor16 = ControladorEje_70::ctr_eje_70_Prod_SegundoTurno_14_30_15();

        echo json_encode($valor16);    

    }

}

$activar = new cross_producido_segundoturno_14_30_15_eje_70();
$activar -> eje_70_Prod_SegundoTurno_14_30_15();