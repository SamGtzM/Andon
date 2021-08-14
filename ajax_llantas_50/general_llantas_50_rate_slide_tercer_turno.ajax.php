<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_rate_slide_tercer_turno_llantas{

    public function rateslide_tercer_turno(){

        $valor38 = ControladorLlantas::ctr_rateslide_tercer_turno();

        echo json_encode($valor38);    

    }

}

$activar = new llantas_rate_slide_tercer_turno_llantas();
$activar -> rateslide_tercer_turno();