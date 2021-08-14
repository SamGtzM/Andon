<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_primerturno_12_13_cross_50{

    public function cross_50_Prod_PrimerTurno_12_13(){

        $valor13= ControladorCross_50::ctr_cross_50_Prod_PrimerTurno_12_13();

        echo json_encode($valor13);    

    }

}

$activar = new cross_producido_primerturno_12_13_cross_50();
$activar -> cross_50_Prod_PrimerTurno_12_13();