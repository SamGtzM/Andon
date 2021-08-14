<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class cross_producido_primerturno_6_7_cross_20{

    public function cross_20_Prod_PrimerTurno_6_7(){

        $valor7 = ControladorCross_20::ctr_cross_20_Prod_PrimerTurno_6_7();

        echo json_encode($valor7);    

    }

}

$activar = new cross_producido_primerturno_6_7_cross_20();
$activar -> cross_20_Prod_PrimerTurno_6_7();