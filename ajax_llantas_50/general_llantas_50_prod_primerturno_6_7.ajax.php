<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_primerturno_6_7{

    public function llantas_50_Prod_PrimerTurno_6_7(){

        $valor7 = ControladorLlantas::ctr_llantas_50_Prod_PrimerTurno_6_7();

        echo json_encode($valor7);    

    }

}

$activar = new llantas_producido_primerturno_6_7();
$activar -> llantas_50_Prod_PrimerTurno_6_7();