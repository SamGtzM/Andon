<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_status_mtto_1{

    public function status_mtto_1(){

        $valor39 = ControladorLlantas::ctr_status_mtto_1();

        echo json_encode($valor39);    

    }

}

$activar = new llantas_status_mtto_1();
$activar -> status_mtto_1();