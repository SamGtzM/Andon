<?php

require_once "../controladores/general_cross_20.controlador.php";
require_once "../modelos/general_cross_20.modelo.php";

class Ajaxinsertgen_cross_20{
    
    public $id_area;
    public $id_estacion;
    public $id_turno;
    public $rate;
    public $producido;
    public $OEE;
    public $acumuladas;
    public $fecha_alta;

    public function ajaxAgregarLike_cross_20(){
        $datos = array(
            "id_area" => $this->id_area,
            "id_estacion" => $this->id_estacion,
            "id_turno" => $this->id_turno,
            "rate" => $this->rate,
            "producido" => $this->producido,
            "OEE" => $this->OEE,
            "acumuladas" => $this->acumuladas,
            "fecha_alta" => $this->fecha_alta
        );

        $respuesta = ControladorCross_20::ctr_insert_gen_cross_20($datos);
        echo $respuesta;
    }

}

if (isset($_POST["are"])) {
    $deseo = new Ajaxinsertgen_cross_20();
    $deseo -> id_area = $_POST["are"];
    $deseo -> id_estacion = $_POST["est"];
    $deseo -> id_turno = $_POST["tur"];
    $deseo -> rate = $_POST["ra"];
    $deseo -> producido = $_POST["pd"];
    $deseo -> OEE = $_POST["oe"];
    $deseo -> acumuladas = $_POST["ac"];
    $deseo -> fecha_alta = $_POST["fha"];
    $deseo -> ajaxAgregarLike_cross_20();
}