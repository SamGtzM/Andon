<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_segundoturno_19_20{

    public function llantas_50_Prod_SegundoTurno_19_20(){

        $valor21 = ControladorLlantas::ctr_llantas_50_Prod_SegundoTurno_19_20();

        echo json_encode($valor21);    

    }

}

$activar = new llantas_producido_segundoturno_19_20();
$activar -> llantas_50_Prod_SegundoTurno_19_20();