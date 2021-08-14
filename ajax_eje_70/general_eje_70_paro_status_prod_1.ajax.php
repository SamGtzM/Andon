<?php

require_once "../controladores/general_eje_70.controlador.php";
require_once "../modelos/general_eje_70.modelo.php";

class Ajaxinsertinsert_eje_70{
    
    public $activo_status;
    public $id_departamento_paro;
    public $id_area;
    public $id_estacion;
    public $id_turno;
    public $rate;
    public $producido;
    public $OEE;
    public $acumuladas;
    public $fecha_alta;

    public function ajaxAgregarinsertstatus_eje_70(){
        $datos = array(
            "activo_status" => $this->activo_status,
            "id_departamento_paro" => $this->id_departamento_paro,
            "id_area" => $this->id_area,
            "id_estacion" => $this->id_estacion,
            "id_turno" => $this->id_turno,
            "rate" => $this->rate,
            "producido" => $this->producido,
            "OEE" => $this->OEE,
            "acumuladas" => $this->acumuladas,
            "fecha_alta" => $this->fecha_alta
        );

        $respuesta1 = ControladorEje_70::ctr_insert_paro_status_prod_1_eje_70($datos);
        echo $respuesta1;
    }

}

if (isset($_POST["prodact"])) {
    $deseo = new Ajaxinsertinsert_eje_70();
    $deseo -> activo_status = $_POST["prodact"];
    $deseo -> id_departamento_paro = $_POST["proddep1"];
    $deseo -> id_area = $_POST["prodare"];
    $deseo -> id_estacion = $_POST["prodest"];
    $deseo -> id_turno = $_POST["prodtur"];
    $deseo -> rate = $_POST["prodra"];
    $deseo -> producido = $_POST["prodpd"];
    $deseo -> OEE = $_POST["prodoe"];
    $deseo -> acumuladas = $_POST["prodac"];
    $deseo -> fecha_alta = $_POST["prodfha"];
    $deseo -> ajaxAgregarinsertstatus_eje_70();
}