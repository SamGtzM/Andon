<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_7_8{

    public function eje_60_status_PrimerTurno_7_8(){

        $valor48 = ControladorEje_60::ctr_eje_60_status_PrimerTurno_7_8();

        echo json_encode($valor48);    

    }

}

$activar = new eje_60_status_primerturno_7_8();
$activar -> eje_60_status_PrimerTurno_7_8();