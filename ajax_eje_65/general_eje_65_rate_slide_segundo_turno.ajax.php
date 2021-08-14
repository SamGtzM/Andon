<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class cross_rate_slide_segundo_turno_eje_65{

    public function rateslide_segundo_turno(){

        $valor37 = ControladorEje_65::ctr_rateslide_segundo_turno_eje_65();

        echo json_encode($valor37);    

    }

}

$activar = new cross_rate_slide_segundo_turno_eje_65();
$activar -> rateslide_segundo_turno();