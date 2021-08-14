<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_primerturno_13_14_cross_40{

    public function cross_40_Prod_PrimerTurno_13_14(){

        $valor14= ControladorCross_40::ctr_cross_40_Prod_PrimerTurno_13_14();

        echo json_encode($valor14);    

    }

}

$activar = new cross_producido_primerturno_13_14_cross_40();
$activar -> cross_40_Prod_PrimerTurno_13_14();