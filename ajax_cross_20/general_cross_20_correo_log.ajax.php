<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class Ajaxinsertinsert_cross_20{
    
    public $status_paro_log;
    public $status_paro_log_fecha;

    public function ajaxAgregarinsertstatus_cross_20(){
        $datos = $this->status_paro_log;
        $fechaparo = $this->status_paro_log_fecha;

        $respuesta1 = ControladorCross_20::ctr_log_correo_inf_cross_20($datos, $fechaparo);
        echo $respuesta1;
    }

}

if (isset($_POST["status_paro_log"])) {
    $deseo = new Ajaxinsertinsert_cross_20();
    $deseo -> status_paro_log = $_POST["status_paro_log"];
    $deseo -> status_paro_log_fecha = $_POST["status_paro_log_fecha"];
    $deseo -> ajaxAgregarinsertstatus_cross_20();
}