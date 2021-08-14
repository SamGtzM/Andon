<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_14_30_15{

    public function eje_65_status_PrimerTurno_14_30_15(){

        $valor56 = ControladorEje_65::ctr_eje_65_status_SegundoTurno_14_30_15();

        echo json_encode($valor56);    

    }

}

$activar = new eje_65_status_primerturno_14_30_15();
$activar -> eje_65_status_PrimerTurno_14_30_15();