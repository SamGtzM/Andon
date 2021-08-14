<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_acumulado_slide_tercer_turno_llantas{

    public function acumulado_slide_tercer_turno_llantas(){

        $valor35 = ControladorLlantas::ctr_acumulado_slide_tercer_turno_llantas();

        echo json_encode($valor35);    

    }

}

$activar = new llantas_acumulado_slide_tercer_turno_llantas();
$activar -> acumulado_slide_tercer_turno_llantas();