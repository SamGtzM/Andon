<?php

use PHPMailer\PHPMailer\PHPMailer;

class ControladorUsuarios{

    static public function ctrusuario(){

        if (isset($_POST["password"])) {

            $pass = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');


            $tabla1 = "tabla_usuario";
            $tabla2 = "tabla_departamento";
            $tabla3 = "tabla_accesos";
            $user = $_POST["username"];
            $respuesta = ModeloUsuarios::mdlusuario($tabla1, $tabla2, $tabla3, $user, $pass);

            if(@$respuesta["usuario"] == $user){

                $_SESSION["validarSesion"] = "ok";
                $_SESSION["id_usuario"] = $respuesta["id_usuario"];
                $_SESSION["numero_empleado"] = $respuesta["numero_empleado"];
                $_SESSION["nombre_completo"] = $respuesta["nombre_completo"];
                $_SESSION["correo_electronico"] = $respuesta["correo_electronico"];
                $_SESSION["usuario"] =  $respuesta["usuario"];
                $_SESSION["id_departamento"] = $respuesta["id_departamento"];
                $_SESSION["nombre_departamento"] = $respuesta["nombre_departamento"];
                $_SESSION["id_acceso"] = $respuesta["id_acceso"];
                $_SESSION["tipo_acceso"] = $respuesta["tipo_acceso"];                

                /*rutaActual*/

                echo'
                    <script>
                        window.location.href = "inicio";
                    </script>
                ';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Error al ingresar a la plataforma.",
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
    
    static public function ctrmostrarusuarios(){

            $tabla1 = "tabla_usuario";
            $tabla2 = "tabla_departamento";
            $tabla3 = "tabla_accesos";
            $respuesta = ModeloUsuarios::mdlmostrarusuarios($tabla1, $tabla2, $tabla3);
            return $respuesta;

    }
    
    static public function ctreliminarusuario($usuarioActualEliminar, $fecha, $idUsuarioActual){

        if(isset($_GET["idusuario"])){

            $tabla = "tabla_usuario";
            $datos = $_GET["idusuario"];
            $activo = $_GET["activo"];

            if($idUsuarioActual != $datos){

                $respuesta = ModeloUsuarios::mdleliminarusuario($usuarioActualEliminar, $fecha, $datos, $activo, $tabla, $idUsuarioActual);

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
                                window.location.href = "administrador_altas_bajas_usuarios"; 
                            }
                        });
                    
                    </script>';

                }

            } else if($idUsuarioActual == $datos){

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "No puedes eliminar tu propia cuenta!",
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

    static public function ctraltausuario(){ 

        if(isset($_POST["password"])){

            $password1 = $_POST["password"];
            $password2 = $_POST["password2"];

            if($password1 == $password2){

                $encriptar = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $datos = array(
					"id_departamento" => $_POST["departamento"],
					"id_acceso" => $_POST["acceso"],
					"numero_empleado" => $_POST["numero"],
                    "nombre_completo" => $_POST["nombre"],
                    "correo_electronico" => $_POST["correo"],
                    "usuario" => $_POST["usuario"],
					"pass" => $encriptar,
					"usuario_alta" => $_POST["user"],
					"fecha_alta" => $_POST["fecha_alta"],
					"activo" => $_POST["activo"]
                );

                $tabla = "tabla_usuario";

                $respuesta = ModeloUsuarios::mdlaltausuario($tabla, $datos);

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
                                window.location.href = "administrador_altas_bajas_usuarios"; 
                            }
                        });
                    
                    </script>';

                }

            } else {

                echo '<script>
    
                    swal({
                        title: "Error!!",
                        text: "Las contraseñas no coinciden!",
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

    static public function ctrinfousuario(){

        if(isset($_GET["idusuario"])){

            $tabla1 = "tabla_usuario";
            $tabla2 = "tabla_departamento";
            $tabla3 = "tabla_accesos";
            $id_usuario = $_GET["idusuariocambio"];
            $respuesta = ModeloUsuarios::mdlinfousuario($tabla1, $tabla2, $tabla3, $id_usuario);
            return $respuesta;

        }
    }

    static public function ctrcambiousuario(){ 

        if(isset($_POST["passwordmodif"])){

            $password1 = $_POST["passwordmodif"];
            $password2 = $_POST["password2modif"];

            if($password1 != "" && $password2 != "" || $password1 != NULL || $password2 != NULL ){

                if($password1 == $password2){

                    $encriptar = crypt($_POST["passwordmodif"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                    $datos = array(
                        "id_departamento" => $_POST["departamentomodif"],
                        "id_acceso" => $_POST["accesomodif"],
                        "numero_empleado" => $_POST["numeromodif"],
                        "nombre_completo" => $_POST["nombremodif"],
                        "correo_electronico" => $_POST["correomodif"],
                        "usuario" => $_POST["usuariomodif"],
                        "pass" => $encriptar,
                        "usuario_alta" => $_POST["usermodif"],
                        "fecha_alta" => $_POST["fecha_altamodif"],
                        "activo" => $_POST["activomodif"],
                        "id_usuario" => $_POST["idusuariomodif"]
                    );

                    $tabla = "tabla_usuario";

                    $respuesta = ModeloUsuarios::mdlcambiousuario($tabla, $datos);

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
                                    window.location.href = "administrador_altas_bajas_usuarios"; 
                                }
                            });
                        
                        </script>';

                    }

                } else {

                    echo '<script>
        
                        swal({
                            title: "Error!!",
                            text: "Las contraseñas no coinciden!",
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

            } else {

                echo '<script>
        
                    swal({
                        title: "Error!!",
                        text: "Favor de ingresar una contraseña!",
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

    static public function ctrmostrarusuarios2($datos){

            $tabla1 = "tabla_usuario";
            $tabla2 = "tabla_departamento";
            $tabla3 = "tabla_accesos";
            $idusuario = $datos;
            $respuesta = ModeloUsuarios::mdlmostrarusuarios2($tabla1, $tabla2, $tabla3, $idusuario);
            return $respuesta;
    }
}
















