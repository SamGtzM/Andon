<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_acumulado_slide_segunto_turno_llantas{

    public function acumulado_slide_segundo_turno_llantas(){

        $valor34 = ControladorLlantas::ctr_acumulado_slide_segundo_turno_llantas();

        echo json_encode($valor34);    

    }

}

$activar = new llantas_acumulado_slide_segunto_turno_llantas();
$activar -> acumulado_slide_segundo_turno_llantas();