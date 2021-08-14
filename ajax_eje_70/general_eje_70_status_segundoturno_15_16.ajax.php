<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_15_16{

    public function eje_70_status_PrimerTurno_15_16(){

        $valor57 = ControladorEje_70::ctr_eje_70_status_SegundoTurno_15_16();

        echo json_encode($valor57);    

    }

}

$activar = new eje_70_status_primerturno_15_16();
$activar -> eje_70_status_PrimerTurno_15_16();