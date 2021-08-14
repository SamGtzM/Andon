<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_17_18{

    public function eje_60_status_PrimerTurno_17_18(){

        $valor59 = ControladorEje_60::ctr_eje_60_status_SegundoTurno_17_18();

        echo json_encode($valor59);    

    }

}

$activar = new eje_60_status_primerturno_17_18();
$activar -> eje_60_status_PrimerTurno_17_18();