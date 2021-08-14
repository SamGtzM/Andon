<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class Ajaxinsertinsert_cross_10{
    
    public $status_paro_mtto;
    public $status_paro_mtto_fecha;

    public function ajaxAgregarinsertstatus_cross_10(){
        $datos = $this->status_paro_mtto;
        $fechaparo = $this->status_paro_mtto_fecha;

        $respuesta1 = ControladorCross_10::ctr_mtto_correo_inf_cross_10($datos, $fechaparo);
        echo $respuesta1;
    }

}

if (isset($_POST["status_paro_mtto"])) {
    $deseo = new Ajaxinsertinsert_cross_10();
    $deseo -> status_paro_mtto = $_POST["status_paro_mtto"];
    $deseo -> status_paro_mtto_fecha = $_POST["status_paro_mtto_fecha"];
    $deseo -> ajaxAgregarinsertstatus_cross_10();
}