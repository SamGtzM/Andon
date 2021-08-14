<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_7_8{

    public function eje_70_status_PrimerTurno_7_8(){

        $valor48 = ControladorEje_70::ctr_eje_70_status_PrimerTurno_7_8();

        echo json_encode($valor48);    

    }

}

$activar = new eje_70_status_primerturno_7_8();
$activar -> eje_70_status_PrimerTurno_7_8();