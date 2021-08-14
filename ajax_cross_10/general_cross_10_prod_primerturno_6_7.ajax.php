<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_producido_primerturno_6_7_cross_10{

    public function cross_10_Prod_PrimerTurno_6_7(){

        $valor7 = ControladorCross_10::ctr_cross_10_Prod_PrimerTurno_6_7();

        echo json_encode($valor7);    

    }

}

$activar = new cross_producido_primerturno_6_7_cross_10();
$activar -> cross_10_Prod_PrimerTurno_6_7();