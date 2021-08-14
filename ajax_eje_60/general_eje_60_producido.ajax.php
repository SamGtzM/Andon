<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class eje_60_producido{

    public function eje_60_producido(){

        $valor3 = ControladorEje_60::ctr_eje_60_producido_contador();

        echo json_encode($valor3);    

    }

}

$activar = new eje_60_producido();
$activar -> eje_60_producido();