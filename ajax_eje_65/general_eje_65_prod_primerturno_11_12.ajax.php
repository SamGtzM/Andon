<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class cross_producido_primerturno_11_12_cross_50{

    public function cross_50_Prod_PrimerTurno_11_12(){

        $valor12= ControladorEje_65::ctr_cross_50_Prod_PrimerTurno_11_12();

        echo json_encode($valor12);    

    }

}

$activar = new cross_producido_primerturno_11_12_cross_50();
$activar -> cross_50_Prod_PrimerTurno_11_12();