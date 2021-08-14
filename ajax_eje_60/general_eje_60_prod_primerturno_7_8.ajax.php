<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_primerturno_7_8_eje_60{

    public function eje_60_Prod_PrimerTurno_7_8(){

        $valor8 = ControladorEje_60::ctr_eje_60_Prod_PrimerTurno_7_8();

        echo json_encode($valor8);    

    }

}

$activar = new cross_producido_primerturno_7_8_eje_60();
$activar -> eje_60_Prod_PrimerTurno_7_8();