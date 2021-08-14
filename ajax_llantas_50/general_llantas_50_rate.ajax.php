<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class llantas_rate{

    public function llantas_50_rate(){

        $valor2 = ControladorLlantas::ctrmostrarrateLlantas();

        echo json_encode($valor2);    

    }

}

$activar = new llantas_rate();
$activar -> llantas_50_rate();