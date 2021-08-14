<?php

require_once "../controladores/administrativo.controlador.php";
require_once "../modelos/administrativo.modelo.php";

class ajaxMetricasLOG{

	public $id_area;
	public $id_estacion;
	public $inicio_paro;
	public $final_paro;
	public function ajaxMostrarResultadoslog(){

		$id_area = $this->id_area;
		$id_estacion = $this->id_estacion;
		$inicio_paro = $this->inicio_paro;
		$final_paro = $this->final_paro;

		$valor1 = ControladorAdministrativo::ctr_metricas_top_log_primer_turno($id_area, $id_estacion, $inicio_paro, $final_paro);
		echo json_encode($valor1);

	}
}

if(isset($_POST["hastalog"])){

	$mostrar = new ajaxMetricasLOG();
	$mostrar -> id_area = $_POST["arealog"];
	$mostrar -> id_estacion = $_POST["estacionlog"] ;
	$mostrar -> inicio_paro = $_POST["desdelog"];
	$mostrar -> final_paro = $_POST["hastalog"];
	$mostrar -> ajaxMostrarResultadoslog();

}