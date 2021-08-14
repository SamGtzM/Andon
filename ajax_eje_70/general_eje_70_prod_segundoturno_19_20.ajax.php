<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_producido_segundoturno_19_20_eje_70{

    public function eje_70_Prod_SegundoTurno_19_20(){

        $valor21 = ControladorEje_70::ctr_eje_70_Prod_SegundoTurno_19_20();

        echo json_encode($valor21);    

    }

}

$activar = new cross_producido_segundoturno_19_20_eje_70();
$activar -> eje_70_Prod_SegundoTurno_19_20();