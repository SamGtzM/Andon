<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class Ajaxinsertinsert_eje_70{
    
    public $status_paro_cal;
    public $status_paro_cal_fecha;

    public function ajaxAgregarinsertstatus_eje_70(){
        $datos = $this->status_paro_cal;
        $fechaparo = $this->status_paro_cal_fecha;

        $respuesta1 = ControladorEje_70::ctr_cal_correo_inf_eje_70($datos, $fechaparo);
        echo $respuesta1;
    }

}

if (isset($_POST["status_paro_cal"])) {
    $deseo = new Ajaxinsertinsert_eje_70();
    $deseo -> status_paro_cal = $_POST["status_paro_cal"];
    $deseo -> status_paro_cal_fecha = $_POST["status_paro_cal_fecha"];
    $deseo -> ajaxAgregarinsertstatus_eje_70();
}