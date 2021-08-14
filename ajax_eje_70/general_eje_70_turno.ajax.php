<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class llantas_turno_eje_70{

    public function eje_70_turno_eje_70(){

        $valor5 = ControladorEje_70::ctr_eje_70_turno();

        echo json_encode($valor5);    

    }

}

$activar = new llantas_turno_eje_70();
$activar -> eje_70_turno_eje_70();