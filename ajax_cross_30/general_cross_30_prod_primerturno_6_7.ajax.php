<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_producido_primerturno_6_7_cross_30{

    public function cross_30_Prod_PrimerTurno_6_7(){

        $valor7 = ControladorCross_30::ctr_cross_30_Prod_PrimerTurno_6_7();

        echo json_encode($valor7);    

    }

}

$activar = new cross_producido_primerturno_6_7_cross_30();
$activar -> cross_30_Prod_PrimerTurno_6_7();