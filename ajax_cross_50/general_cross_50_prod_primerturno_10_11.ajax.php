<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_primerturno_10_11_cross_50{

    public function cross_50_Prod_PrimerTurno_10_11(){

        $valor11 = ControladorCross_50::ctr_cross_50_Prod_PrimerTurno_10_11();

        echo json_encode($valor11);    

    }

}

$activar = new cross_producido_primerturno_10_11_cross_50();
$activar -> cross_50_Prod_PrimerTurno_10_11();