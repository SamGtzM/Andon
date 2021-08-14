<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_primerturno_7_8_cross_40{

    public function cross_40_Prod_PrimerTurno_7_8(){

        $valor8 = ControladorCross_40::ctr_cross_40_Prod_PrimerTurno_7_8();

        echo json_encode($valor8);    

    }

}

$activar = new cross_producido_primerturno_7_8_cross_40();
$activar -> cross_40_Prod_PrimerTurno_7_8();