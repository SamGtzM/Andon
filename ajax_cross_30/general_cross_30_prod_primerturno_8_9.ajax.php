<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_producido_primerturno_8_9_cross_30{

    public function cross_30_Prod_PrimerTurno_8_9(){

        $valor9 = ControladorCross_30::ctr_cross_30_Prod_PrimerTurno_8_9();

        echo json_encode($valor9);    

    }

}

$activar = new cross_producido_primerturno_8_9_cross_30();
$activar -> cross_30_Prod_PrimerTurno_8_9();