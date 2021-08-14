<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_producido_segundoturno_19_20_cross_30{

    public function cross_30_Prod_SegundoTurno_19_20(){

        $valor21 = ControladorCross_30::ctr_cross_30_Prod_SegundoTurno_19_20();

        echo json_encode($valor21);    

    }

}

$activar = new cross_producido_segundoturno_19_20_cross_30();
$activar -> cross_30_Prod_SegundoTurno_19_20();