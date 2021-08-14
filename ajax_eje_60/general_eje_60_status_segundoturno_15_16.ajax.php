<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_15_16{

    public function eje_60_status_PrimerTurno_15_16(){

        $valor57 = ControladorEje_60::ctr_eje_60_status_SegundoTurno_15_16();

        echo json_encode($valor57);    

    }

}

$activar = new eje_60_status_primerturno_15_16();
$activar -> eje_60_status_PrimerTurno_15_16();