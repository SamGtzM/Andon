<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class Ajaxinsertinsert_eje_70{
    
    public $id_departamento_paro;
    public $id_area;
    public $id_estacion;
    public $final_paro;

    public function ajaxAgregarinsertstatus_eje_70(){
        $datos = array(
            "id_departamento_paro" => $this->id_departamento_paro,
            "id_area" => $this->id_area,
            "id_estacion" => $this->id_estacion,
            "final_paro" => $this->final_paro
        );

        $respuesta1 = ControladorEje_70::ctr_insert_paro_status_cal_0_eje_70($datos);
        echo $respuesta1;
    }

}

if (isset($_POST["calfha"])) {
    $deseo = new Ajaxinsertinsert_eje_70();
    $deseo -> id_departamento_paro = $_POST["caldep1"];
    $deseo -> id_area = $_POST["calare"];
    $deseo -> id_estacion = $_POST["calest"];
    $deseo -> final_paro = $_POST["calfha"];
    $deseo -> ajaxAgregarinsertstatus_eje_70();
}