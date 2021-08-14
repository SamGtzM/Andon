<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_20_21{

    public function eje_65_status_PrimerTurno_20_21(){

        $valor62 = ControladorEje_65::ctr_eje_65_status_SegundoTurno_20_21();

        echo json_encode($valor62);    

    }

}

$activar = new eje_65_status_primerturno_20_21();
$activar -> eje_65_status_PrimerTurno_20_21();