<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class cross_producido_primerturno_11_12_cross_40{

    public function cross_40_Prod_PrimerTurno_11_12(){

        $valor12= ControladorCross_40::ctr_cross_40_Prod_PrimerTurno_11_12();

        echo json_encode($valor12);    

    }

}

$activar = new cross_producido_primerturno_11_12_cross_40();
$activar -> cross_40_Prod_PrimerTurno_11_12();