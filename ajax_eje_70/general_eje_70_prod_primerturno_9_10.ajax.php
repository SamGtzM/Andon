<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_producido_primerturno_9_10_eje_70{

    public function eje_70_Prod_PrimerTurno_9_10(){

        $valor10 = ControladorEje_70::ctr_eje_70_Prod_PrimerTurno_9_10();

        echo json_encode($valor10);    

    }

}

$activar = new cross_producido_primerturno_9_10_eje_70();
$activar -> eje_70_Prod_PrimerTurno_9_10();