<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_turno{

    public function llantas_50_turno(){

        $valor5 = ControladorLlantas::ctr_llantas_50_turno();

        echo json_encode($valor5);    

    }

}

$activar = new llantas_turno();
$activar -> llantas_50_turno();