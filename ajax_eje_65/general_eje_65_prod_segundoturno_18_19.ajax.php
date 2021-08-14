<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class cross_producido_segundoturno_18_19_eje_65{

    public function eje_65_Prod_SegundoTurno_18_19(){

        $valor20 = ControladorEje_65::ctr_eje_65_Prod_SegundoTurno_18_19();

        echo json_encode($valor20);    

    }

}

$activar = new cross_producido_segundoturno_18_19_eje_65();
$activar -> eje_65_Prod_SegundoTurno_18_19();