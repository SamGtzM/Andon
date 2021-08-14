<?php

require_once "../controladores/general_llantas.controlador.php";
require_once "../modelos/general_llantas.modelo.php";

class Ajaxinsertgen{
    
    public $id_area;
    public $id_estacion;
    public $id_turno;
    public $rate;
    public $producido;
    public $OEE;
    public $acumuladas;
    public $fecha_alta;

    public function ajaxAgregarLike(){
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

        $respuesta = ControladorLlantas::ctr_insert_gen($datos);
        echo $respuesta;
    }

}

if (isset($_POST["are"])) {
    $deseo = new Ajaxinsertgen();
    $deseo -> id_area = $_POST["are"];
    $deseo -> id_estacion = $_POST["est"];
    $deseo -> id_turno = $_POST["tur"];
    $deseo -> rate = $_POST["ra"];
    $deseo -> producido = $_POST["pd"];
    $deseo -> OEE = $_POST["oe"];
    $deseo -> acumuladas = $_POST["ac"];
    $deseo -> fecha_alta = $_POST["fha"];
    $deseo -> ajaxAgregarLike();
}