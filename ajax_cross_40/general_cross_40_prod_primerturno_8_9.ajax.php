<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_primerturno_8_9_cross_40{

    public function cross_40_Prod_PrimerTurno_8_9(){

        $valor9 = ControladorCross_40::ctr_cross_40_Prod_PrimerTurno_8_9();

        echo json_encode($valor9);    

    }

}

$activar = new cross_producido_primerturno_8_9_cross_40();
$activar -> cross_40_Prod_PrimerTurno_8_9();