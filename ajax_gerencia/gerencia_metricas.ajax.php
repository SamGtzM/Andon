<?php

require_once "../controladores/gerencia.controlador.php";
require_once "../modelos/gerencia.modelo.php";

class ajaxMetricasGERENCIA{

	public $id_area;
	public $id_estacion;
	public $id_turno;
	public function ajaxMostrarResultadosgerencia(){

		$id_area = $this->id_area;
		$id_estacion = $this->id_estacion;
		$id_turno = $this->id_turno;

		$valor1 = ControladorGerencia::ctr_gerencia_top10_metricos($id_area, $id_estacion, $id_turno);
		echo json_encode($valor1);

	}
}

if(isset($_POST["turgerencia"])){

	$mostrar = new ajaxMetricasGERENCIA();
	$mostrar -> id_area = $_POST["areagerencia"];
	$mostrar -> id_estacion = $_POST["estaciongerencia"] ;
	$mostrar -> id_turno = $_POST["turgerencia"];
	$mostrar -> ajaxMostrarResultadosgerencia();

}