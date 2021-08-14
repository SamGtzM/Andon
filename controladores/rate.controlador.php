<?php

use PHPMailer\PHPMailer\PHPMailer;

class ControladorRate{

    static public function ctrmostrarrate(){

        $tabla1 = "tabla_rate";
        $tabla2 = "tabla_turno";
        $tabla3 = "tabla_area";
        $tabla4 = "tabla_estacion";
        $respuesta = ModeloRate::mdlmostrarrate($tabla1, $tabla2, $tabla3, $tabla4);
        return $respuesta;

    }

    static public function ctreliminarrate($usuarioActualEliminar, $fecha){

        if(isset($_GET["idrate"])){

            $tabla = "tabla_rate";
            $datos = $_GET["idrate"];
            $activo = $_GET["activo"];

            $respuesta = ModeloRate::mdleliminarrate($usuarioActualEliminar, $fecha, $datos, $activo, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido borrado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrador_altas_bajas_rate"; 
                        }
                    });
                    
                </script>';

            }
        }
    }

    static public function ctraltarate(){ 

        if(isset($_POST["rate"])){

            $datos = array(
				"id_turno" => $_POST["turno"],
				"id_area" => $_POST["area"],
				"id_estacion" => $_POST["estacion"],
                "rate" => $_POST["rate"],
                "rate_desde" => $_POST["rate_desde"],
                "rate_hasta" => $_POST["rate_hasta"],
                "fecha_alta" => $_POST["fecha_alta"],
				"Usuario_alta" => $_POST["user"],
				"activo" => $_POST["activo"]
            );

            $tabla = "tabla_rate";

            $respuesta = ModeloRate::mdlaltarate($tabla, $datos);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido guardado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrador_altas_bajas_rate"; 
                        }
                    });
                    
                </script>';

            }
        }
    }

    static public function ctr_rate_cambio($datos){

        $tabla1 = "tabla_rate";
        $tabla2 = "tabla_turno";
        $tabla3 = "tabla_area";
        $tabla4 = "tabla_estacion";
        $idrate = $datos;
        $respuesta = ModeloRate::mdl_rate_cambio($tabla1, $tabla2, $tabla3, $tabla4, $idrate);
        return $respuesta;
    }

    static public function ctr_update_rate(){ 

        if(isset($_POST["idratemodif"])){

                    $id_rate = $_POST["idratemodif"];
                    $id_turno = $_POST["turnomodif"];
                    $id_area = $_POST["areamodif"];
                    $id_estacion = $_POST["estacionmodif"];
                    $rate = $_POST["ratemodif"];
                    $rate_desde = $_POST["rate_desdemodif"];
                    $rate_hasta = $_POST["rate_hastamodif"];
                    $fecha_alta = $_POST["fecha_altamodif"];
                    $Usuario_alta = $_POST["usermodif"];
                    $activo = $_POST["activomodif"];

                $tabla = "tabla_rate";

                $respuesta = ModeloRate::mdl_update_rate($tabla, $id_rate, $id_turno, $id_area, $id_estacion, $rate, $rate_desde, $rate_hasta, $fecha_alta, $Usuario_alta, $activo);

                if($respuesta == "ok"){

                    echo '<script>
    
                        swal({
                            title: "OK!!",
                            text: "El registro ha sido guardado correctamente!",
                            type: "success",
                            ButtonText: "Cerrar",
                            closeOnConfirm: false
                        },
    
                        function(isConfirm){
                            if(isConfirm){
                                window.location.href = "administrador_altas_bajas_rate"; 
                            }
                        });
                        
                    </script>';
    
                } else {
    
                    echo '<script>
    
                            swal({
                                title: "Error!!",
                                text: "Ha ocurrido un error al guardar el registro",
                                type: "error",
                                ButtonText: "Cerrar",
                                closeOnConfirm: false
                            },
    
                            function(isConfirm){
                                if(isConfirm){
                                    history.back();
                                }
                            });
    
                    </script>';
    
                }
        }
    }
}