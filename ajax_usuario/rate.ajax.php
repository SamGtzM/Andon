<?php

require_once "../controladores/rate.controlador.php";
require_once "../modelos/rate.modelo.php";

class rate{
    
    public $idrateconsulta;

    public function rate_mostrar_cambios(){
        $datos = $this->idrateconsulta;

        $valor2 = ControladorRate::ctr_rate_cambio($datos);
        echo json_encode($valor2); 
    }

}

if (isset($_POST["idrateconsulta"])) {
    $deseo = new rate();
    $deseo -> idrateconsulta = $_POST["idrateconsulta"];
    $deseo -> rate_mostrar_cambios();
}