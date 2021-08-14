<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_14_30_15{

    public function eje_70_status_PrimerTurno_14_30_15(){

        $valor56 = ControladorEje_70::ctr_eje_70_status_SegundoTurno_14_30_15();

        echo json_encode($valor56);    

    }

}

$activar = new eje_70_status_primerturno_14_30_15();
$activar -> eje_70_status_PrimerTurno_14_30_15();