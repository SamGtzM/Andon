<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class cross_producido_primerturno_11_12_cross_10{

    public function cross_10_Prod_PrimerTurno_11_12(){

        $valor12= ControladorCross_10::ctr_cross_10_Prod_PrimerTurno_11_12();

        echo json_encode($valor12);    

    }

}

$activar = new cross_producido_primerturno_11_12_cross_10();
$activar -> cross_10_Prod_PrimerTurno_11_12();