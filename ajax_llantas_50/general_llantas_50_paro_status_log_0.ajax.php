<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class Ajaxinsertinsert{
    
    public $id_departamento_paro;
    public $id_area;
    public $id_estacion;
    public $final_paro;

    public function ajaxAgregarinsertstatus(){
        $datos = array(
            "id_departamento_paro" => $this->id_departamento_paro,
            "id_area" => $this->id_area,
            "id_estacion" => $this->id_estacion,
            "final_paro" => $this->final_paro
        );

        $respuesta1 = ControladorLlantas::ctr_insert_paro_status_log_0($datos);
        echo $respuesta1;
    }

}

if (isset($_POST["logfha"])) {
    $deseo = new Ajaxinsertinsert();
    $deseo -> id_departamento_paro = $_POST["logdep1"];
    $deseo -> id_area = $_POST["logare"];
    $deseo -> id_estacion = $_POST["logest"];
    $deseo -> final_paro = $_POST["logfha"];
    $deseo -> ajaxAgregarinsertstatus();
}