<?php

require_once "../controladores/general_cross_30.controlador.php";
require_once "../modelos/general_cross_30.modelo.php";

class Ajaxinsertinsert_cross_30{
    
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

    public function ajaxAgregarinsertstatus_cross_30(){
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

        $respuesta1 = ControladorCross_30::ctr_insert_paro_status_log_1_cross_30($datos);
        echo $respuesta1;
    }

}

if (isset($_POST["logact"])) {
    $deseo = new Ajaxinsertinsert_cross_30();
    $deseo -> activo_status = $_POST["logact"];
    $deseo -> id_departamento_paro = $_POST["logdep1"];
    $deseo -> id_area = $_POST["logare"];
    $deseo -> id_estacion = $_POST["logest"];
    $deseo -> id_turno = $_POST["logtur"];
    $deseo -> rate = $_POST["logra"];
    $deseo -> producido = $_POST["logpd"];
    $deseo -> OEE = $_POST["logoe"];
    $deseo -> acumuladas = $_POST["logac"];
    $deseo -> fecha_alta = $_POST["logfha"];
    $deseo -> ajaxAgregarinsertstatus_cross_30();
}