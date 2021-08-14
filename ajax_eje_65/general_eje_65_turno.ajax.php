<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class llantas_turno_eje_65{

    public function eje_65_turno_eje_65(){

        $valor5 = ControladorEje_65::ctr_eje_65_turno();

        echo json_encode($valor5);    

    }

}

$activar = new llantas_turno_eje_65();
$activar -> eje_65_turno_eje_65();