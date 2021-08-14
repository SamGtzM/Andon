<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_producido_primerturno_7_8_cross_20{

    public function cross_20_Prod_PrimerTurno_7_8(){

        $valor8 = ControladorCross_20::ctr_cross_20_Prod_PrimerTurno_7_8();

        echo json_encode($valor8);    

    }

}

$activar = new cross_producido_primerturno_7_8_cross_20();
$activar -> cross_20_Prod_PrimerTurno_7_8();