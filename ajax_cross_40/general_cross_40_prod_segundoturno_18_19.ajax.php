<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_segundoturno_18_19_cross_40{

    public function cross_40_Prod_SegundoTurno_18_19(){

        $valor20 = ControladorCross_40::ctr_cross_40_Prod_SegundoTurno_18_19();

        echo json_encode($valor20);    

    }

}

$activar = new cross_producido_segundoturno_18_19_cross_40();
$activar -> cross_40_Prod_SegundoTurno_18_19();