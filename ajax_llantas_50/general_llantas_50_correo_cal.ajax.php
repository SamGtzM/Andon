<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class Ajaxinsertinsert{
    
    public $status_paro_cal;
    public $status_paro_cal_fecha;

    public function ajaxAgregarinsertstatus(){
        $datos = $this->status_paro_cal;
        $fechaparo = $this->status_paro_cal_fecha;

        $respuesta1 = ControladorLlantas::ctr_cal_correo_inf($datos, $fechaparo);
        echo $respuesta1;
    }

}

if (isset($_POST["status_paro_cal"])) {
    $deseo = new Ajaxinsertinsert();
    $deseo -> status_paro_cal = $_POST["status_paro_cal"];
    $deseo -> status_paro_cal_fecha = $_POST["status_paro_cal_fecha"];
    $deseo -> ajaxAgregarinsertstatus();
}