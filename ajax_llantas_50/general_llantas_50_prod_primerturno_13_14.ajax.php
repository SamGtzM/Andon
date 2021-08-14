<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_primerturno_13_14{

    public function llantas_50_Prod_PrimerTurno_13_14(){

        $valor14= ControladorLlantas::ctr_llantas_50_Prod_PrimerTurno_13_14();

        echo json_encode($valor14);    

    }

}

$activar = new llantas_producido_primerturno_13_14();
$activar -> llantas_50_Prod_PrimerTurno_13_14();