<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_producido_primerturno_11_12_eje_70{

    public function eje_70_Prod_PrimerTurno_11_12(){

        $valor12= ControladorEje_70::ctr_eje_70_Prod_PrimerTurno_11_12();

        echo json_encode($valor12);    

    }

}

$activar = new cross_producido_primerturno_11_12_eje_70();
$activar -> eje_70_Prod_PrimerTurno_11_12();