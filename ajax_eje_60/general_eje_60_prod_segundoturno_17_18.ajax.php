<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_segundoturno_17_18_eje_60{

    public function eje_60_Prod_SegundoTurno_17_18(){

        $valor19 = ControladorEje_60::ctr_eje_60_Prod_SegundoTurno_17_18();

        echo json_encode($valor19);    

    }

}

$activar = new cross_producido_segundoturno_17_18_eje_60();
$activar -> eje_60_Prod_SegundoTurno_17_18();