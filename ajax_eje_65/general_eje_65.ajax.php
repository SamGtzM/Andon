<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65{

    public function eje_65(){

        $valor = ControladorEje_65::ctr_eje_65();

        echo json_encode($valor);    

    }

}

$activar = new eje_65();
$activar -> eje_65();