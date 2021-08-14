<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_producido{

    public function llantas_50_producido(){

        $valor3 = ControladorLlantas::ctr_llantas_50_producido_contador();

        echo json_encode($valor3);    

    }

}

$activar = new llantas_producido();
$activar -> llantas_50_producido();