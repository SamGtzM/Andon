<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_primerturno_12_13_cross_40{

    public function cross_40_Prod_PrimerTurno_12_13(){

        $valor13= ControladorCross_40::ctr_cross_40_Prod_PrimerTurno_12_13();

        echo json_encode($valor13);    

    }

}

$activar = new cross_producido_primerturno_12_13_cross_40();
$activar -> cross_40_Prod_PrimerTurno_12_13();