<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class cross_producido_primerturno_11_12_eje_60{

    public function eje_60_Prod_PrimerTurno_11_12(){

        $valor12= ControladorEje_60::ctr_eje_60_Prod_PrimerTurno_11_12();

        echo json_encode($valor12);    

    }

}

$activar = new cross_producido_primerturno_11_12_eje_60();
$activar -> eje_60_Prod_PrimerTurno_11_12();