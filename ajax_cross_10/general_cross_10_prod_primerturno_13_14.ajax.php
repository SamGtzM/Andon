<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_producido_primerturno_13_14_cross_10{

    public function cross_10_Prod_PrimerTurno_13_14(){

        $valor14= ControladorCross_10::ctr_cross_10_Prod_PrimerTurno_13_14();

        echo json_encode($valor14);    

    }

}

$activar = new cross_producido_primerturno_13_14_cross_10();
$activar -> cross_10_Prod_PrimerTurno_13_14();