<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class Ajaxinsertinsert_eje_60{
    
    public $status_paro_prod;
    public $status_paro_prod_fecha;

    public function ajaxAgregarinsertstatus_eje_60(){
        $datos = $this->status_paro_prod;
        $fechaparo = $this->status_paro_prod_fecha;

        $respuesta1 = ControladorEje_60::ctr_prod_correo_inf_eje_60($datos, $fechaparo);
        echo $respuesta1;
    }

}

if (isset($_POST["status_paro_prod"])) {
    $deseo = new Ajaxinsertinsert_eje_60();
    $deseo -> status_paro_prod = $_POST["status_paro_prod"];
    $deseo -> status_paro_prod_fecha = $_POST["status_paro_prod_fecha"];
    $deseo -> ajaxAgregarinsertstatus_eje_60();
}