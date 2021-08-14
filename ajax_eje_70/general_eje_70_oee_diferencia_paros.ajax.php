<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class cross_tiempo_paro_hora_oee_eje_70{

    public function eje_70_tiempo_paro_hora_oee(){

        $valor73 = ControladorEje_70::ctr_eje_70_tiempo_paro_hora_oee();

        echo json_encode($valor73);    

    }

}

$activar = new cross_tiempo_paro_hora_oee_eje_70();
$activar -> eje_70_tiempo_paro_hora_oee();