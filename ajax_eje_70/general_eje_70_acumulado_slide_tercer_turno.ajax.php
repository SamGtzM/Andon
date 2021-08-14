<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_acumulado_slide_tercer_turno_eje_70{

    public function acumulado_slide_tercer_turno_eje_70(){

        $valor35 = ControladorEje_70::ctr_acumulado_slide_tercer_turno_eje_70();

        echo json_encode($valor35);    

    }

}

$activar = new cross_acumulado_slide_tercer_turno_eje_70();
$activar -> acumulado_slide_tercer_turno_eje_70();