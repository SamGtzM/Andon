<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_rate_slide_primer_turno_eje_70{

    public function rateslide_primer_turno_eje_70(){

        $valor36 = ControladorEje_70::ctr_rateslide_primer_turno_eje_70();

        echo json_encode($valor36);    

    }

}

$activar = new cross_rate_slide_primer_turno_eje_70();
$activar -> rateslide_primer_turno_eje_70();