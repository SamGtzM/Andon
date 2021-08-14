<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_primerturno_10_11{

    public function llantas_50_Prod_PrimerTurno_10_11(){

        $valor11 = ControladorLlantas::ctr_llantas_50_Prod_PrimerTurno_10_11();

        echo json_encode($valor11);    

    }

}

$activar = new llantas_producido_primerturno_10_11();
$activar -> llantas_50_Prod_PrimerTurno_10_11();