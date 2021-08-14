<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_segundoturno_19_20_eje_60{

    public function eje_60_Prod_SegundoTurno_19_20(){

        $valor21 = ControladorEje_60::ctr_eje_60_Prod_SegundoTurno_19_20();

        echo json_encode($valor21);    

    }

}

$activar = new cross_producido_segundoturno_19_20_eje_60();
$activar -> eje_60_Prod_SegundoTurno_19_20();