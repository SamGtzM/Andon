<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_mtto_0{

    public function status_mtto_0(){

        $valor40 = ControladorLlantas::ctr_status_mtto_0();

        echo json_encode($valor40);    

    }

}

$activar = new llantas_status_mtto_0();
$activar -> status_mtto_0();