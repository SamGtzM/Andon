<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class Ajaxinsertinsert{
    
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

    public function ajaxAgregarinsertstatus(){
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

        $respuesta1 = ControladorLlantas::ctr_insert_paro_status_cal_1($datos);
        echo $respuesta1;
    }

}

if (isset($_POST["calact"])) {
    $deseo = new Ajaxinsertinsert();
    $deseo -> activo_status = $_POST["calact"];
    $deseo -> id_departamento_paro = $_POST["caldep1"];
    $deseo -> id_area = $_POST["calare"];
    $deseo -> id_estacion = $_POST["calest"];
    $deseo -> id_turno = $_POST["caltur"];
    $deseo -> rate = $_POST["calra"];
    $deseo -> producido = $_POST["calpd"];
    $deseo -> OEE = $_POST["caloe"];
    $deseo -> acumuladas = $_POST["calac"];
    $deseo -> fecha_alta = $_POST["calfha"];
    $deseo -> ajaxAgregarinsertstatus();
}