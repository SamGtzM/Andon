<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class cross_producido_primerturno_9_10_eje_65{

    public function eje_65_Prod_PrimerTurno_9_10(){

        $valor10 = ControladorEje_65::ctr_eje_65_Prod_PrimerTurno_9_10();

        echo json_encode($valor10);    

    }

}

$activar = new cross_producido_primerturno_9_10_eje_65();
$activar -> eje_65_Prod_PrimerTurno_9_10();