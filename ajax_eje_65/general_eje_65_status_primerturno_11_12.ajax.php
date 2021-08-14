<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_status_primerturno_11_12{

    public function eje_65_status_PrimerTurno_11_12(){

        $valor52 = ControladorEje_65::ctr_eje_65_status_PrimerTurno_11_12();

        echo json_encode($valor52);    

    }

}

$activar = new eje_65_status_primerturno_11_12();
$activar -> eje_65_status_PrimerTurno_11_12();