<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_primerturno_8_9{

    public function llantas_50_Prod_PrimerTurno_8_9(){

        $valor9 = ControladorLlantas::ctr_llantas_50_Prod_PrimerTurno_8_9();

        echo json_encode($valor9);    

    }

}

$activar = new llantas_producido_primerturno_8_9();
$activar -> llantas_50_Prod_PrimerTurno_8_9();