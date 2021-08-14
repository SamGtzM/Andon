<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_producido_primerturno_12_13_cross_30{

    public function cross_30_Prod_PrimerTurno_12_13(){

        $valor13= ControladorCross_30::ctr_cross_30_Prod_PrimerTurno_12_13();

        echo json_encode($valor13);    

    }

}

$activar = new cross_producido_primerturno_12_13_cross_30();
$activar -> cross_30_Prod_PrimerTurno_12_13();