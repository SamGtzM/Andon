<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_primerturno_13_14_cross_50{

    public function cross_50_Prod_PrimerTurno_13_14(){

        $valor14= ControladorCross_50::ctr_cross_50_Prod_PrimerTurno_13_14();

        echo json_encode($valor14);    

    }

}

$activar = new cross_producido_primerturno_13_14_cross_50();
$activar -> cross_50_Prod_PrimerTurno_13_14();