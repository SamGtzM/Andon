<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_rate_slide_tercer_turno_eje_60{

    public function rateslide_tercer_turno_eje_60(){

        $valor38 = ControladorEje_60::ctr_rateslide_tercer_turno_eje_60();

        echo json_encode($valor38);    

    }

}

$activar = new cross_rate_slide_tercer_turno_eje_60();
$activar -> rateslide_tercer_turno_eje_60();