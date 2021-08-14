<?php

require_once "../controladores/general_cross_10.controlador.php";
require_once "../modelos/general_cross_10.modelo.php";

class Ajaxinsertinsert_cross_10{
    
    public $status_paro_prod;
    public $status_paro_prod_fecha;

    public function ajaxAgregarinsertstatus_cross_10(){
        $datos = $this->status_paro_prod;
        $fechaparo = $this->status_paro_prod_fecha;

        $respuesta1 = ControladorCross_10::ctr_prod_correo_inf_cross_10($datos, $fechaparo);
        echo $respuesta1;
    }

}

if (isset($_POST["status_paro_prod"])) {
    $deseo = new Ajaxinsertinsert_cross_10();
    $deseo -> status_paro_prod = $_POST["status_paro_prod"];
    $deseo -> status_paro_prod_fecha = $_POST["status_paro_prod_fecha"];
    $deseo -> ajaxAgregarinsertstatus_cross_10();
}