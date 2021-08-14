<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_primerturno_12_13{

    public function llantas_50_Prod_PrimerTurno_12_13(){

        $valor13= ControladorLlantas::ctr_llantas_50_Prod_PrimerTurno_12_13();

        echo json_encode($valor13);    

    }

}

$activar = new llantas_producido_primerturno_12_13();
$activar -> llantas_50_Prod_PrimerTurno_12_13();