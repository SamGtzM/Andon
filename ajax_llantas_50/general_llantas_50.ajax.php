<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas{

    public function llantas_50(){

        $valor = ControladorLlantas::ctr_llantas_50();

        echo json_encode($valor);    

    }

}

$activar = new llantas();
$activar -> llantas_50();