<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_producido_primerturno_11_12_cross_30{

    public function cross_30_Prod_PrimerTurno_11_12(){

        $valor12= ControladorCross_30::ctr_cross_30_Prod_PrimerTurno_11_12();

        echo json_encode($valor12);    

    }

}

$activar = new cross_producido_primerturno_11_12_cross_30();
$activar -> cross_30_Prod_PrimerTurno_11_12();