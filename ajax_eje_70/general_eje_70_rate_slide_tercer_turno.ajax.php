<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_rate_slide_tercer_turno_eje_70{

    public function rateslide_tercer_turno_eje_70(){

        $valor38 = ControladorEje_70::ctr_rateslide_tercer_turno_eje_70();

        echo json_encode($valor38);    

    }

}

$activar = new cross_rate_slide_tercer_turno_eje_70();
$activar -> rateslide_tercer_turno_eje_70();