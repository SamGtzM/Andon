<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_rate_slide_segundo_turno_llantas{

    public function rateslide_segundo_turno(){

        $valor37 = ControladorLlantas::ctr_rateslide_segundo_turno();

        echo json_encode($valor37);    

    }

}

$activar = new llantas_rate_slide_segundo_turno_llantas();
$activar -> rateslide_segundo_turno();