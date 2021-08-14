<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_producido_primerturno_8_9_cross_20{

    public function cross_20_Prod_PrimerTurno_8_9(){

        $valor9 = ControladorCross_20::ctr_cross_20_Prod_PrimerTurno_8_9();

        echo json_encode($valor9);    

    }

}

$activar = new cross_producido_primerturno_8_9_cross_20();
$activar -> cross_20_Prod_PrimerTurno_8_9();