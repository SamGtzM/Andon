<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_14_30_15{

    public function eje_60_status_PrimerTurno_14_30_15(){

        $valor56 = ControladorEje_60::ctr_eje_60_status_SegundoTurno_14_30_15();

        echo json_encode($valor56);    

    }

}

$activar = new eje_60_status_primerturno_14_30_15();
$activar -> eje_60_status_PrimerTurno_14_30_15();