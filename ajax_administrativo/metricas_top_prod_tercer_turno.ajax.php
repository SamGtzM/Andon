<?php

require_once "../controladores/administrativo.controlador.php";
require_once "../modelos/administrativo.modelo.php";

class ajaxMetricasPROD{

	public $id_area;
	public $id_estacion;
	public $inicio_paro;
	public $final_paro;
	public function ajaxMostrarResultadosprod(){

		$id_area = $this->id_area;
		$id_estacion = $this->id_estacion;
		$inicio_paro = $this->inicio_paro;
		$final_paro = $this->final_paro;

		$valor1 = ControladorAdministrativo::ctr_metricas_top_prod_tercer_turno($id_area, $id_estacion, $inicio_paro, $final_paro);
		echo json_encode($valor1);

	}
}

if(isset($_POST["hastaprod"])){

	$mostrar = new ajaxMetricasPROD();
	$mostrar -> id_area = $_POST["areaprod"];
	$mostrar -> id_estacion = $_POST["estacionprod"] ;
	$mostrar -> inicio_paro = $_POST["desdeprod"];
	$mostrar -> final_paro = $_POST["hastaprod"];
	$mostrar -> ajaxMostrarResultadosprod();

}