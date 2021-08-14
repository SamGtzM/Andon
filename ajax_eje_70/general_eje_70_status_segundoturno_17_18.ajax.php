<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_17_18{

    public function eje_70_status_PrimerTurno_17_18(){

        $valor59 = ControladorEje_70::ctr_eje_70_status_SegundoTurno_17_18();

        echo json_encode($valor59);    

    }

}

$activar = new eje_70_status_primerturno_17_18();
$activar -> eje_70_status_PrimerTurno_17_18();