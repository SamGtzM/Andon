<?php

require_once "../controladores/general_cross_50.controlador.php";
require_once "../modelos/general_cross_50.modelo.php";

class Ajaxinsertinsert_cross_50{
    
    public $status_paro_cal;
    public $status_paro_cal_fecha;

    public function ajaxAgregarinsertstatus_cross_50(){
        $datos = $this->status_paro_cal;
        $fechaparo = $this->status_paro_cal_fecha;

        $respuesta1 = ControladorCross_50::ctr_cal_correo_inf_cross_50($datos, $fechaparo);
        echo $respuesta1;
    }

}

if (isset($_POST["status_paro_cal"])) {
    $deseo = new Ajaxinsertinsert_cross_50();
    $deseo -> status_paro_cal = $_POST["status_paro_cal"];
    $deseo -> status_paro_cal_fecha = $_POST["status_paro_cal_fecha"];
    $deseo -> ajaxAgregarinsertstatus_cross_50();
}