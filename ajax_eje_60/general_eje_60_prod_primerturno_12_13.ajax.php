<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_primerturno_12_13_eje_60{

    public function eje_60_Prod_PrimerTurno_12_13(){

        $valor13= ControladorEje_60::ctr_eje_60_Prod_PrimerTurno_12_13();

        echo json_encode($valor13);    

    }

}

$activar = new cross_producido_primerturno_12_13_eje_60();
$activar -> eje_60_Prod_PrimerTurno_12_13();