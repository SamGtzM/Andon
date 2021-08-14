<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class cross_producido_tercerturno_04_05_eje_65{

    public function eje_65_Prod_TercerTurno_04_05(){

        $valor31 = ControladorEje_65::ctr_eje_65_Prod_TercerTurno_04_05();

        echo json_encode($valor31);    

    }

}

$activar = new cross_producido_tercerturno_04_05_eje_65();
$activar -> eje_65_Prod_TercerTurno_04_05();