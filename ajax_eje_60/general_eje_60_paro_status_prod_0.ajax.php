<?php

require_once "../controladores/general_eje_60.controlador.php";
require_once "../modelos/general_eje_60.modelo.php";

class Ajaxinsertinsert_eje_60{
    
    public $id_departamento_paro;
    public $id_area;
    public $id_estacion;
    public $final_paro;

    public function ajaxAgregarinsertstatus_eje_60(){
        $datos = array(
            "id_departamento_paro" => $this->id_departamento_paro,
            "id_area" => $this->id_area,
            "id_estacion" => $this->id_estacion,
            "final_paro" => $this->final_paro
        );

        $respuesta1 = ControladorEje_60::ctr_insert_paro_status_prod_0_eje_60($datos);
        echo $respuesta1;
    }

}

if (isset($_POST["prodfha"])) {
    $deseo = new Ajaxinsertinsert_eje_60();
    $deseo -> id_departamento_paro = $_POST["proddep1"];
    $deseo -> id_area = $_POST["prodare"];
    $deseo -> id_estacion = $_POST["prodest"];
    $deseo -> final_paro = $_POST["prodfha"];
    $deseo -> ajaxAgregarinsertstatus_eje_60();
}