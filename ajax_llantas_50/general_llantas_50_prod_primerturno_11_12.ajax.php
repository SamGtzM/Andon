<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido_primerturno_11_12{

    public function llantas_50_Prod_PrimerTurno_11_12(){

        $valor12= ControladorLlantas::ctr_llantas_50_Prod_PrimerTurno_11_12();

        echo json_encode($valor12);    

    }

}

$activar = new llantas_producido_primerturno_11_12();
$activar -> llantas_50_Prod_PrimerTurno_11_12();