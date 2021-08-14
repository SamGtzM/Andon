<?php

require_once "../controladores/administrativo.controlador.php";
require_once "../modelos/administrativo.modelo.php";

class ajaxMetricasMTTO{

	public $id_area;
	public $id_estacion;
	public $inicio_paro;
	public $final_paro;
	public function ajaxMostrarResultadosmtto(){

		$id_area = $this->id_area;
		$id_estacion = $this->id_estacion;
		$inicio_paro = $this->inicio_paro;
		$final_paro = $this->final_paro;

		$valor1 = ControladorAdministrativo::ctr_metricas_top_mtto_segundo_turno($id_area, $id_estacion, $inicio_paro, $final_paro);
		echo json_encode($valor1);

	}
}

if(isset($_POST["hastamtto"])){

	$mostrar = new ajaxMetricasMTTO();
	$mostrar -> id_area = $_POST["areamtto"];
	$mostrar -> id_estacion = $_POST["estacionmtto"] ;
	$mostrar -> inicio_paro = $_POST["desdemtto"];
	$mostrar -> final_paro = $_POST["hastamtto"];
	$mostrar -> ajaxMostrarResultadosmtto();

}