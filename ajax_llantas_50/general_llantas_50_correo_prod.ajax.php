<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class Ajaxinsertinsert{
    
    public $status_paro_prod;
    public $status_paro_prod_fecha;

    public function ajaxAgregarinsertstatus(){
        $datos = $this->status_paro_prod;
        $fechaparo = $this->status_paro_prod_fecha;

        $respuesta1 = ControladorLlantas::ctr_prod_correo_inf($datos, $fechaparo);
        echo $respuesta1;
    }

}

if (isset($_POST["status_paro_prod"])) {
    $deseo = new Ajaxinsertinsert();
    $deseo -> status_paro_prod = $_POST["status_paro_prod"];
    $deseo -> status_paro_prod_fecha = $_POST["status_paro_prod_fecha"];
    $deseo -> ajaxAgregarinsertstatus();
}