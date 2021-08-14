<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

class usuarios{
    
    public $idusuariocambio;

    public function usuarios_mostrar_cambios(){
        $datos = $this->idusuariocambio;

        $valor = ControladorUsuarios::ctrmostrarusuarios2($datos);
        echo json_encode($valor); 
    }

}

if (isset($_POST["idusuariocambio"])) {
    $deseo = new usuarios();
    $deseo -> idusuariocambio = $_POST["idusuariocambio"];
    $deseo -> usuarios_mostrar_cambios();
}