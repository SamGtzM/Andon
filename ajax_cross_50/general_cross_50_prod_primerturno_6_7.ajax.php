<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_primerturno_6_7_cross_50{

    public function cross_50_Prod_PrimerTurno_6_7(){

        $valor7 = ControladorCross_50::ctr_cross_50_Prod_PrimerTurno_6_7();

        echo json_encode($valor7);    

    }

}

$activar = new cross_producido_primerturno_6_7_cross_50();
$activar -> cross_50_Prod_PrimerTurno_6_7();