<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class cross_acumulado_slide_primer_turno_eje_65{

    public function acumulado_slide_primer_turno_eje_65(){

        $valor33 = ControladorEje_65::ctr_acumulado_slide_primer_turno_eje_65();

        echo json_encode($valor33);    

    }

}

$activar = new cross_acumulado_slide_primer_turno_eje_65();
$activar -> acumulado_slide_primer_turno_eje_65();