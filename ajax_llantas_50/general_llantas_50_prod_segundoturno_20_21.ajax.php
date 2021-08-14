<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_segundoturno_20_21{

    public function llantas_50_Prod_SegundoTurno_20_21(){

        $valor22 = ControladorLlantas::ctr_llantas_50_Prod_SegundoTurno_20_21();

        echo json_encode($valor22);    

    }

}

$activar = new llantas_producido_segundoturno_20_21();
$activar -> llantas_50_Prod_SegundoTurno_20_21();