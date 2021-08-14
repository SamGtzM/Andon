<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_producido_primerturno_9_10_cross_30{

    public function cross_30_Prod_PrimerTurno_9_10(){

        $valor10 = ControladorCross_30::ctr_cross_30_Prod_PrimerTurno_9_10();

        echo json_encode($valor10);    

    }

}

$activar = new cross_producido_primerturno_9_10_cross_30();
$activar -> cross_30_Prod_PrimerTurno_9_10();