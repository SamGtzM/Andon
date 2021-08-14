<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_primerturno_8_9_cross_50{

    public function cross_50_Prod_PrimerTurno_8_9(){

        $valor9 = ControladorCross_50::ctr_cross_50_Prod_PrimerTurno_8_9();

        echo json_encode($valor9);    

    }

}

$activar = new cross_producido_primerturno_8_9_cross_50();
$activar -> cross_50_Prod_PrimerTurno_8_9();