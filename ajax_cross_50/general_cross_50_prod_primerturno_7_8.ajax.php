<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_primerturno_7_8_cross_50{

    public function cross_50_Prod_PrimerTurno_7_8(){

        $valor8 = ControladorCross_50::ctr_cross_50_Prod_PrimerTurno_7_8();

        echo json_encode($valor8);    

    }

}

$activar = new cross_producido_primerturno_7_8_cross_50();
$activar -> cross_50_Prod_PrimerTurno_7_8();