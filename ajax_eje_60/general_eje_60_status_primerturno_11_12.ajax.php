<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_status_primerturno_11_12{

    public function eje_60_status_PrimerTurno_11_12(){

        $valor52 = ControladorEje_60::ctr_eje_60_status_PrimerTurno_11_12();

        echo json_encode($valor52);    

    }

}

$activar = new eje_60_status_primerturno_11_12();
$activar -> eje_60_status_PrimerTurno_11_12();