<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_producido_primerturno_14_14_30_cross_10{

    public function cross_10_Prod_PrimerTurno_14_14_30(){

        $valor15= ControladorCross_10::ctr_cross_10_Prod_PrimerTurno_14_14_30();

        echo json_encode($valor15);    

    }

}

$activar = new cross_producido_primerturno_14_14_30_cross_10();
$activar -> cross_10_Prod_PrimerTurno_14_14_30();