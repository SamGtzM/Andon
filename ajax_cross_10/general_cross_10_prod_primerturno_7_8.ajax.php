<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_producido_primerturno_7_8_cross_10{

    public function cross_10_Prod_PrimerTurno_7_8(){

        $valor8 = ControladorCross_10::ctr_cross_10_Prod_PrimerTurno_7_8();

        echo json_encode($valor8);    

    }

}

$activar = new cross_producido_primerturno_7_8_cross_10();
$activar -> cross_10_Prod_PrimerTurno_7_8();