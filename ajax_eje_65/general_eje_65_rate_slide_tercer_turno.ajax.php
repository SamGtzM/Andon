<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class cross_rate_slide_tercer_turno_eje_65{

    public function rateslide_tercer_turno_eje_65(){

        $valor38 = ControladorEje_65::ctr_rateslide_tercer_turno_eje_65();

        echo json_encode($valor38);    

    }

}

$activar = new cross_rate_slide_tercer_turno_eje_65();
$activar -> rateslide_tercer_turno_eje_65();