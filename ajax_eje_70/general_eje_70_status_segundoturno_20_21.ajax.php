<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class eje_70_status_primerturno_20_21{

    public function eje_70_status_PrimerTurno_20_21(){

        $valor62 = ControladorEje_70::ctr_eje_70_status_SegundoTurno_20_21();

        echo json_encode($valor62);    

    }

}

$activar = new eje_70_status_primerturno_20_21();
$activar -> eje_70_status_PrimerTurno_20_21();