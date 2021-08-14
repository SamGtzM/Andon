<?php

require_once "../controladores/general_eje_65.controlador.php";
require_once "../modelos/general_eje_65.modelo.php";

class eje_65_producido{

    public function eje_65_producido(){

        $valor3 = ControladorEje_65::ctr_eje_65_producido_contador();

        echo json_encode($valor3);    

    }

}

$activar = new eje_65_producido();
$activar -> eje_65_producido();