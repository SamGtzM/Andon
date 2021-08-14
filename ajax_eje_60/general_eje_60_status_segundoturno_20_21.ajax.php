<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_20_21{

    public function eje_60_status_PrimerTurno_20_21(){

        $valor62 = ControladorEje_60::ctr_eje_60_status_SegundoTurno_20_21();

        echo json_encode($valor62);    

    }

}

$activar = new eje_60_status_primerturno_20_21();
$activar -> eje_60_status_PrimerTurno_20_21();