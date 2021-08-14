<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_segundoturno_20_21_cross_40{

    public function cross_40_Prod_SegundoTurno_20_21(){

        $valor22 = ControladorCross_40::ctr_cross_40_Prod_SegundoTurno_20_21();

        echo json_encode($valor22);    

    }

}

$activar = new cross_producido_segundoturno_20_21_cross_40();
$activar -> cross_40_Prod_SegundoTurno_20_21();