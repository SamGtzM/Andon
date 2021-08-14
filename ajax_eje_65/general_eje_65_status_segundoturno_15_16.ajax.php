<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_15_16{

    public function eje_65_status_PrimerTurno_15_16(){

        $valor57 = ControladorEje_65::ctr_eje_65_status_SegundoTurno_15_16();

        echo json_encode($valor57);    

    }

}

$activar = new eje_65_status_primerturno_15_16();
$activar -> eje_65_status_PrimerTurno_15_16();