<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_primerturno_10_11_cross_40{

    public function cross_40_Prod_PrimerTurno_10_11(){

        $valor11 = ControladorCross_40::ctr_cross_40_Prod_PrimerTurno_10_11();

        echo json_encode($valor11);    

    }

}

$activar = new cross_producido_primerturno_10_11_cross_40();
$activar -> cross_40_Prod_PrimerTurno_10_11();