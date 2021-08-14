<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_producido_primerturno_8_9_eje_70{

    public function eje_70_Prod_PrimerTurno_8_9(){

        $valor9 = ControladorEje_70::ctr_eje_70_Prod_PrimerTurno_8_9();

        echo json_encode($valor9);    

    }

}

$activar = new cross_producido_primerturno_8_9_eje_70();
$activar -> eje_70_Prod_PrimerTurno_8_9();