<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class cross_producido_tercerturno_00_01_eje_65{

    public function eje_65_Prod_TercerTurno_00_01(){

        $valor27 = ControladorEje_65::ctr_eje_65_Prod_TercerTurno_00_01();

        echo json_encode($valor27);    

    }

}

$activar = new cross_producido_tercerturno_00_01_eje_65();
$activar -> eje_65_Prod_TercerTurno_00_01();