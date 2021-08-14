<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_producido_primerturno_13_14_eje_70{

    public function eje_70_Prod_PrimerTurno_13_14(){

        $valor14= ControladorEje_70::ctr_eje_70_Prod_PrimerTurno_13_14();

        echo json_encode($valor14);    

    }

}

$activar = new cross_producido_primerturno_13_14_eje_70();
$activar -> eje_70_Prod_PrimerTurno_13_14();