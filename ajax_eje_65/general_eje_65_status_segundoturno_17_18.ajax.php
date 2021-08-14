<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_17_18{

    public function eje_65_status_PrimerTurno_17_18(){

        $valor59 = ControladorEje_65::ctr_eje_65_status_SegundoTurno_17_18();

        echo json_encode($valor59);    

    }

}

$activar = new eje_65_status_primerturno_17_18();
$activar -> eje_65_status_PrimerTurno_17_18();