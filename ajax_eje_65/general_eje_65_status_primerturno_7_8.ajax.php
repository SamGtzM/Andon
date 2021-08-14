<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_7_8{

    public function eje_65_status_PrimerTurno_7_8(){

        $valor48 = ControladorEje_65::ctr_eje_65_status_PrimerTurno_7_8();

        echo json_encode($valor48);    

    }

}

$activar = new eje_65_status_primerturno_7_8();
$activar -> eje_65_status_PrimerTurno_7_8();