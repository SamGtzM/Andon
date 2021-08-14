<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class llantas_turno_eje_60{

    public function eje_60_turno_eje_60(){

        $valor5 = ControladorEje_60::ctr_eje_60_turno();

        echo json_encode($valor5);    

    }

}

$activar = new llantas_turno_eje_60();
$activar -> eje_60_turno_eje_60();