<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_primerturno_9_10_cross_50{

    public function cross_50_Prod_PrimerTurno_9_10(){

        $valor10 = ControladorCross_50::ctr_cross_50_Prod_PrimerTurno_9_10();

        echo json_encode($valor10);    

    }

}

$activar = new cross_producido_primerturno_9_10_cross_50();
$activar -> cross_50_Prod_PrimerTurno_9_10();