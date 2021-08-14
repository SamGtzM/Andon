<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_21_22{

    public function eje_70_status_PrimerTurno_21_22(){

        $valor63 = ControladorEje_70::ctr_eje_70_status_SegundoTurno_21_22();

        echo json_encode($valor63);    

    }

}

$activar = new eje_70_status_primerturno_21_22();
$activar -> eje_70_status_PrimerTurno_21_22();