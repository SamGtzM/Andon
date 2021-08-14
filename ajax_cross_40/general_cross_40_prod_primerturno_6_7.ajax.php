<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_primerturno_6_7_cross_40{

    public function cross_40_Prod_PrimerTurno_6_7(){

        $valor7 = ControladorCross_40::ctr_cross_40_Prod_PrimerTurno_6_7();

        echo json_encode($valor7);    

    }

}

$activar = new cross_producido_primerturno_6_7_cross_40();
$activar -> cross_40_Prod_PrimerTurno_6_7();