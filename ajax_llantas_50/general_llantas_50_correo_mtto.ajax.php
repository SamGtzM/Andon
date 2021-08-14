<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class Ajaxinsertinsert{
    
    public $status_paro_mtto;
    public $status_paro_mtto_fecha;

    public function ajaxAgregarinsertstatus(){
        $datos = $this->status_paro_mtto;
        $fechaparo = $this->status_paro_mtto_fecha;

        $respuesta1 = ControladorLlantas::ctr_mtto_correo_inf($datos, $fechaparo);
        echo $respuesta1;
    }

}

if (isset($_POST["status_paro_mtto"])) {
    $deseo = new Ajaxinsertinsert();
    $deseo -> status_paro_mtto = $_POST["status_paro_mtto"];
    $deseo -> status_paro_mtto_fecha = $_POST["status_paro_mtto_fecha"];
    $deseo -> ajaxAgregarinsertstatus();
}