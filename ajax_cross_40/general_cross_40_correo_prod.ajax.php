<?php

require_once "../controladores/general_cross_40.controlador.php";
require_once "../modelos/general_cross_40.modelo.php";

class Ajaxinsertinsert_cross_40{
    
    public $status_paro_prod;
    public $status_paro_prod_fecha;

    public function ajaxAgregarinsertstatus_cross_40(){
        $datos = $this->status_paro_prod;
        $fechaparo = $this->status_paro_prod_fecha;

        $respuesta1 = ControladorCross_40::ctr_prod_correo_inf_cross_40($datos, $fechaparo);
        echo $respuesta1;
    }

}

if (isset($_POST["status_paro_prod"])) {
    $deseo = new Ajaxinsertinsert_cross_40();
    $deseo -> status_paro_prod = $_POST["status_paro_prod"];
    $deseo -> status_paro_prod_fecha = $_POST["status_paro_prod_fecha"];
    $deseo -> ajaxAgregarinsertstatus_cross_40();
}