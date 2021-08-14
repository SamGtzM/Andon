<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_rate_slide_primer_turno_llantas{

    public function rateslide_primer_turno(){

        $valor36 = ControladorLlantas::ctr_rateslide_primer_turno();

        echo json_encode($valor36);    

    }

}

$activar = new llantas_rate_slide_primer_turno_llantas();
$activar -> rateslide_primer_turno();