<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_producido_tercerturno_00_01_eje_70{

    public function eje_70_Prod_TercerTurno_00_01(){

        $valor27 = ControladorEje_70::ctr_eje_70_Prod_TercerTurno_00_01();

        echo json_encode($valor27);    

    }

}

$activar = new cross_producido_tercerturno_00_01_eje_70();
$activar -> eje_70_Prod_TercerTurno_00_01();