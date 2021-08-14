<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class llantas_turno_cross_30{

    public function cross_30_turno_cross_30(){

        $valor5 = ControladorCross_30::ctr_cross_30_turno();

        echo json_encode($valor5);    

    }

}

$activar = new llantas_turno_cross_30();
$activar -> cross_30_turno_cross_30();