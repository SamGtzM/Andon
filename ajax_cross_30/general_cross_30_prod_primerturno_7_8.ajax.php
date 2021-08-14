<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class cross_producido_primerturno_7_8_cross_30{

    public function cross_30_Prod_PrimerTurno_7_8(){

        $valor8 = ControladorCross_30::ctr_cross_30_Prod_PrimerTurno_7_8();

        echo json_encode($valor8);    

    }

}

$activar = new cross_producido_primerturno_7_8_cross_30();
$activar -> cross_30_Prod_PrimerTurno_7_8();