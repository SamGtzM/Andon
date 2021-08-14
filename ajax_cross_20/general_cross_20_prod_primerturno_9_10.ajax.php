<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_producido_primerturno_9_10_cross_20{

    public function cross_20_Prod_PrimerTurno_9_10(){

        $valor10 = ControladorCross_20::ctr_cross_20_Prod_PrimerTurno_9_10();

        echo json_encode($valor10);    

    }

}

$activar = new cross_producido_primerturno_9_10_cross_20();
$activar -> cross_20_Prod_PrimerTurno_9_10();