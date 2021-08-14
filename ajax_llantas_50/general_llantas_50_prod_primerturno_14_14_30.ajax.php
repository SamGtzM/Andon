<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_primerturno_14_14_30{

    public function llantas_50_Prod_PrimerTurno_14_14_30(){

        $valor15= ControladorLlantas::ctr_llantas_50_Prod_PrimerTurno_14_14_30();

        echo json_encode($valor15);    

    }

}

$activar = new llantas_producido_primerturno_14_14_30();
$activar -> llantas_50_Prod_PrimerTurno_14_14_30();