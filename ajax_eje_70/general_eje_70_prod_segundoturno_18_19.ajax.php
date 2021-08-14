<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_producido_segundoturno_18_19_eje_70{

    public function eje_70_Prod_SegundoTurno_18_19(){

        $valor20 = ControladorEje_70::ctr_eje_70_Prod_SegundoTurno_18_19();

        echo json_encode($valor20);    

    }

}

$activar = new cross_producido_segundoturno_18_19_eje_70();
$activar -> eje_70_Prod_SegundoTurno_18_19();