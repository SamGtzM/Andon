<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_primerturno_14_14_30_cross_40{

    public function cross_40_Prod_PrimerTurno_14_14_30(){

        $valor15= ControladorCross_40::ctr_cross_40_Prod_PrimerTurno_14_14_30();

        echo json_encode($valor15);    

    }

}

$activar = new cross_producido_primerturno_14_14_30_cross_40();
$activar -> cross_40_Prod_PrimerTurno_14_14_30();