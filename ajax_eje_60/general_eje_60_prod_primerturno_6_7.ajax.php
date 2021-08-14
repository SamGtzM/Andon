<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_primerturno_6_7_eje_60{

    public function eje_60_Prod_PrimerTurno_6_7(){

        $valor7 = ControladorEje_60::ctr_eje_60_Prod_PrimerTurno_6_7();

        echo json_encode($valor7);    

    }

}

$activar = new cross_producido_primerturno_6_7_eje_60();
$activar -> eje_60_Prod_PrimerTurno_6_7();