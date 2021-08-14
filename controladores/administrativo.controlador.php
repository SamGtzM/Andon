<?php

use PHPMailer\PHPMailer\PHPMailer;

class ControladorAdministrativo{

    /*-------------------------------------------------------------------------------------------------
                                            Mantenimiento
    -------------------------------------------------------------------------------------------------*/

    static public function ctrAdministrativoMttoC(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoMttoC($tabla1);
        return $respuesta;

    }
    static public function ctrAdministrativoMttoE(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoMttoE($tabla1);
        return $respuesta;

    }
    static public function ctrAdministrativoMttoL(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoMttoL($tabla1);
        return $respuesta;

    }


    static public function ctrAdministrativoMttoHC(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoMttoHC($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoMttoHE(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoMttoHE($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoMttoHL(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoMttoHL($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoMttoCrossCerrarParo(){

        if(isset($_POST["idparomc"])){

            $tabla = "tabla_paros";
            
            $id_paro = $_POST["idparomc"];
            $fecha_cierre = $_POST["fecha_cierre"];
            $usuario_cierre = $_POST["nombreusuario"];
            $activo_status = $_POST["activo"];
            $nombre_paro = $_POST["nombreparo"];
            $descripcion_paro = $_POST["descripcionparo"];
            $ewo = $_POST["ewo"];

            $respuesta = ModeloAdministrativo::mdlAdministrativoMttoCrossCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido cerrado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_mantenimiento_crossmember_paros_activos"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al cerrar el paro",
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

    static public function ctrAdministrativoMttoEjeCerrarParo(){

        if(isset($_POST["idparome"])){

            $tabla = "tabla_paros";
            
            $id_paro = $_POST["idparome"];
            $fecha_cierre = $_POST["fecha_cierre"];
            $usuario_cierre = $_POST["nombreusuario"];
            $activo_status = $_POST["activo"];
            $nombre_paro = $_POST["nombreparo"];
            $descripcion_paro = $_POST["descripcionparo"];
            $ewo = $_POST["ewo"];

            $respuesta = ModeloAdministrativo::mdlAdministrativoMttoEjeCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido cerrado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_mantenimiento_eje_paros_activos"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al cerrar el paro",
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

    static public function ctrAdministrativoMttoLlantasCerrarParo(){

        if(isset($_POST["idparoml"])){

            $tabla = "tabla_paros";
            
            $id_paro = $_POST["idparoml"];
            $fecha_cierre = $_POST["fecha_cierre"];
            $usuario_cierre = $_POST["nombreusuario"];
            $activo_status = $_POST["activo"];
            $nombre_paro = $_POST["nombreparo"];
            $descripcion_paro = $_POST["descripcionparo"];
            $ewo = $_POST["ewo"];

            $respuesta = ModeloAdministrativo::mdlAdministrativoMttoLlantasCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido cerrado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_mantenimiento_llantas_paros_activos"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al cerrar el paro",
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

    static public function ctr_metricas_top_mtto_primer_turno($id_area, $id_estacion, $inicio_paro, $final_paro){
      
        $tabla = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdl_metricas_top_mtto_primer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro);
        return $respuesta;
    }

    static public function ctr_metricas_top_mtto_segundo_turno($id_area, $id_estacion, $inicio_paro, $final_paro){
      
        $tabla = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdl_metricas_top_mtto_segundo_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro);
        return $respuesta;
    }
    
    static public function ctr_metricas_top_mtto_tercer_turno($id_area, $id_estacion, $inicio_paro, $final_paro){
      
        $tabla = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdl_metricas_top_mtto_tercer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro);
        return $respuesta;
    }

    /*-------------------------------------------------------------------------------------------------
                                           Cerrando Mantenimiento
    -------------------------------------------------------------------------------------------------*/

    /*-------------------------------------------------------------------------------------------------
                                                Producciòn
    -------------------------------------------------------------------------------------------------*/
                                        
    static public function ctrAdministrativoProdC(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoProdC($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoProdE(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoProdE($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoProdL(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoProdL($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoProdHC(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoProdHC($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoProdHE(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoProdHE($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoProdHL(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoProdHL($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoProdCrossCerrarParo(){

        if(isset($_POST["idparopc"])){

            $tabla = "tabla_paros";
                
            $id_paro = $_POST["idparopc"];
            $fecha_cierre = $_POST["fecha_cierre"];
            $usuario_cierre = $_POST["nombreusuario"];
            $activo_status = $_POST["activo"];
            $nombre_paro = $_POST["nombreparo"];
            $descripcion_paro = $_POST["descripcionparo"];
            $ewo = $_POST["ewo"];

            $respuesta = ModeloAdministrativo::mdlAdministrativoProdCrossCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido cerrado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_produccion_crossmember_paros_activos"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al cerrar el paro",
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

    static public function ctrAdministrativoProdEjeCerrarParo(){

        if(isset($_POST["idparope"])){

            $tabla = "tabla_paros";
                
            $id_paro = $_POST["idparope"];
            $fecha_cierre = $_POST["fecha_cierre"];
            $usuario_cierre = $_POST["nombreusuario"];
            $activo_status = $_POST["activo"];
            $nombre_paro = $_POST["nombreparo"];
            $descripcion_paro = $_POST["descripcionparo"];
            $ewo = $_POST["ewo"];

            $respuesta = ModeloAdministrativo::mdlAdministrativoProdEjeCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido cerrado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_produccion_eje_paros_activos"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al cerrar el paro",
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

    static public function ctrAdministrativoProdLlantasCerrarParo(){

        if(isset($_POST["idparopl"])){

            $tabla = "tabla_paros";
                
            $id_paro = $_POST["idparopl"];
            $fecha_cierre = $_POST["fecha_cierre"];
            $usuario_cierre = $_POST["nombreusuario"];
            $activo_status = $_POST["activo"];
            $nombre_paro = $_POST["nombreparo"];
            $descripcion_paro = $_POST["descripcionparo"];
            $ewo = $_POST["ewo"];

            $respuesta = ModeloAdministrativo::mdlAdministrativoProdLlantasCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido cerrado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_produccion_llantas_paros_activos"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al cerrar el paro",
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

    static public function ctr_prod_scrapp_llantas(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloAdministrativo::mdl_prod_scrapp_llantas($tabla);
        return $respuesta;

    }

    static public function ctr_prod_scrapp_cross(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloAdministrativo::mdl_prod_scrapp_cross($tabla);
        return $respuesta;

    }

    static public function ctr_prod_scrapp_eje(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloAdministrativo::mdl_prod_scrapp_eje($tabla);
        return $respuesta;

    }

    static public function ctr_registrar_scrapp_llantas(){

        if(isset($_POST["idscrappl"])){

            $tabla = "tabla_general_prod";
                
            $scrapp = $_POST["scrapp"];
            $retrabajo = $_POST["retrabajo"];
            $ewo = $_POST["ewo"];
            $idscrappl = $_POST["idscrappl"];

            $respuesta = ModeloAdministrativo::mdl_registrar_scrapp_llantas($scrapp, $retrabajo, $ewo, $idscrappl, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro se ha guardado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_produccion_scrapp_retrabajo_llantas"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al registrar los datos",
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

    static public function ctr_registrar_scrapp_cross(){

        if(isset($_POST["idscrappc"])){

            $tabla = "tabla_general_prod";
                
            $scrapp = $_POST["scrapp"];
            $retrabajo = $_POST["retrabajo"];
            $ewo = $_POST["ewo"];
            $idscrappl = $_POST["idscrappc"];

            $respuesta = ModeloAdministrativo::mdl_registrar_scrapp_cross($scrapp, $retrabajo, $ewo, $idscrappl, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro se ha guardado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_produccion_scrapp_retrabajo_crossmember"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al registrar los datos",
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

    static public function ctr_registrar_scrapp_eje(){

        if(isset($_POST["idscrappe"])){

            $tabla = "tabla_general_prod";
                
            $scrapp = $_POST["scrapp"];
            $retrabajo = $_POST["retrabajo"];
            $ewo = $_POST["ewo"];
            $idscrappl = $_POST["idscrappe"];

            $respuesta = ModeloAdministrativo::mdl_registrar_scrapp_eje($scrapp, $retrabajo, $ewo, $idscrappl, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro se ha guardado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_produccion_scrapp_retrabajo_eje"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al registrar los datos",
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

    static public function ctr_prod_scrapp_llantas_h(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloAdministrativo::mdl_prod_scrapp_llantas_h($tabla);
        return $respuesta;

    }

    static public function ctr_prod_scrapp_eje_h(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloAdministrativo::mdl_prod_scrapp_eje_h($tabla);
        return $respuesta;

    }

    static public function ctr_prod_scrapp_cross_h(){

        $tabla = "tabla_general_prod";
        $respuesta = ModeloAdministrativo::mdl_prod_scrapp_cross_h($tabla);
        return $respuesta;

    }

    static public function ctr_metricas_top_prod_primer_turno($id_area, $id_estacion, $inicio_paro, $final_paro){
      
        $tabla = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdl_metricas_top_prod_primer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro);
        return $respuesta;
    }

    static public function ctr_metricas_top_prod_segundo_turno($id_area, $id_estacion, $inicio_paro, $final_paro){
      
        $tabla = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdl_metricas_top_prod_segundo_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro);
        return $respuesta;
    }
    
    static public function ctr_metricas_top_prod_tercer_turno($id_area, $id_estacion, $inicio_paro, $final_paro){
      
        $tabla = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdl_metricas_top_prod_tercer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro);
        return $respuesta;
    }

    /*-------------------------------------------------------------------------------------------------
                                           Cerrando Producciòn
    -------------------------------------------------------------------------------------------------*/

    /*-------------------------------------------------------------------------------------------------
                                                Calidad
    -------------------------------------------------------------------------------------------------*/
                                        
    static public function ctrAdministrativoCalidadC(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoCalidadC($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoCalidadE(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoCalidadE($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoCalidadL(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoCalidadL($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoCalidadHC(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoCalidadHC($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoCalidadHE(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoCalidadHE($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoCalidadHL(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoCalidadHL($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoCalCrossCerrarParo(){

        if(isset($_POST["idparocc"])){

            $tabla = "tabla_paros";
                
            $id_paro = $_POST["idparocc"];
            $fecha_cierre = $_POST["fecha_cierre"];
            $usuario_cierre = $_POST["nombreusuario"];
            $activo_status = $_POST["activo"];
            $nombre_paro = $_POST["nombreparo"];
            $descripcion_paro = $_POST["descripcionparo"];
            $ewo = $_POST["ewo"];

            $respuesta = ModeloAdministrativo::mdlAdministrativoCalCrossCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido cerrado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_calidad_crossmember_paros_activos"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al cerrar el paro",
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

    static public function ctrAdministrativoCalEjeCerrarParo(){

        if(isset($_POST["idparoce"])){

            $tabla = "tabla_paros";
                
            $id_paro = $_POST["idparoce"];
            $fecha_cierre = $_POST["fecha_cierre"];
            $usuario_cierre = $_POST["nombreusuario"];
            $activo_status = $_POST["activo"];
            $nombre_paro = $_POST["nombreparo"];
            $descripcion_paro = $_POST["descripcionparo"];
            $ewo = $_POST["ewo"];

            $respuesta = ModeloAdministrativo::mdlAdministrativoCalEjeCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido cerrado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_calidad_eje_paros_activos"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al cerrar el paro",
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

    static public function ctrAdministrativoCalLlantasCerrarParo(){

        if(isset($_POST["idparocl"])){

            $tabla = "tabla_paros";
                
            $id_paro = $_POST["idparocl"];
            $fecha_cierre = $_POST["fecha_cierre"];
            $usuario_cierre = $_POST["nombreusuario"];
            $activo_status = $_POST["activo"];
            $nombre_paro = $_POST["nombreparo"];
            $descripcion_paro = $_POST["descripcionparo"];
            $ewo = $_POST["ewo"];

            $respuesta = ModeloAdministrativo::mdlAdministrativoCalLlantasCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido cerrado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_calidad_llantas_paros_activos"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al cerrar el paro",
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

    static public function ctr_metricas_top_cal_primer_turno($id_area, $id_estacion, $inicio_paro, $final_paro){
      
        $tabla = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdl_metricas_top_cal_primer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro);
        return $respuesta;
    }

    static public function ctr_metricas_top_cal_segundo_turno($id_area, $id_estacion, $inicio_paro, $final_paro){
      
        $tabla = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdl_metricas_top_cal_segundo_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro);
        return $respuesta;
    }
    
    static public function ctr_metricas_top_cal_tercer_turno($id_area, $id_estacion, $inicio_paro, $final_paro){
      
        $tabla = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdl_metricas_top_cal_tercer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro);
        return $respuesta;
    }

    /*-------------------------------------------------------------------------------------------------
                                           Cerrando Calidad
    -------------------------------------------------------------------------------------------------*/

    /*-------------------------------------------------------------------------------------------------
                                                Logistica
    -------------------------------------------------------------------------------------------------*/
                                        
    static public function ctrAdministrativoLogisticaC(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoLogisticaC($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoLogisticaE(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoLogisticaE($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoLogisticaL(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoLogisticaL($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoLogisticaHC(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoLogisticaHC($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoLogisticaHE(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoLogisticaHE($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoLogisticaHL(){

        $tabla1 = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdlAdministrativoLogisticaHL($tabla1);
        return $respuesta;

    }

    static public function ctrAdministrativoLogCrossCerrarParo(){

        if(isset($_POST["idparolc"])){

            $tabla = "tabla_paros";
                
            $id_paro = $_POST["idparolc"];
            $fecha_cierre = $_POST["fecha_cierre"];
            $usuario_cierre = $_POST["nombreusuario"];
            $activo_status = $_POST["activo"];
            $nombre_paro = $_POST["nombreparo"];
            $descripcion_paro = $_POST["descripcionparo"];
            $ewo = $_POST["ewo"];

            $respuesta = ModeloAdministrativo::mdlAdministrativoLogCrossCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido cerrado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_logistica_crossmember_paros_activos"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al cerrar el paro",
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

    static public function ctrAdministrativoLogEjeCerrarParo(){
        
        if(isset($_POST["idparole"])){

            $tabla = "tabla_paros";
                
            $id_paro = $_POST["idparole"];
            $fecha_cierre = $_POST["fecha_cierre"];
            $usuario_cierre = $_POST["nombreusuario"];
            $activo_status= $_POST["activo"];
            $nombre_paro = $_POST["nombreparo"];
            $descripcion_paro = $_POST["descripcionparo"];
            $ewo = $_POST["ewo"];

            $respuesta = ModeloAdministrativo::mdlAdministrativoLogEjeCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido cerrado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_logistica_eje_paros_activos"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al cerrar el paro",
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

    static public function ctrAdministrativoLogLlantasCerrarParo(){

        if(isset($_POST["idparoll"])){

            $tabla = "tabla_paros";
                
            $id_paro = $_POST["idparoll"];
            $fecha_cierre = $_POST["fecha_cierre"];
            $usuario_cierre = $_POST["nombreusuario"];
            $activo_status = $_POST["activo"];
            $nombre_paro = $_POST["nombreparo"];
            $descripcion_paro = $_POST["descripcionparo"];
            $ewo = $_POST["ewo"];

            $respuesta = ModeloAdministrativo::mdlAdministrativoLogLlantasCerrarParo($id_paro, $fecha_cierre, $usuario_cierre, $activo_status, $nombre_paro, $descripcion_paro, $ewo, $tabla);

            if($respuesta == "ok"){

                echo '<script>

                    swal({
                        title: "OK!!",
                        text: "El registro ha sido cerrado correctamente!",
                        type: "success",
                        ButtonText: "Cerrar",
                        closeOnConfirm: false
                    },

                    function(isConfirm){
                        if(isConfirm){
                            window.location.href = "administrativo_logistica_llantas_paros_activos"; 
                        }
                    });
                    
                </script>';

            } else{

                echo '<script>

                        swal({
                            title: "Error!!",
                            text: "Ha ocurrido un error al cerrar el paro",
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

    static public function ctr_metricas_top_log_primer_turno($id_area, $id_estacion, $inicio_paro, $final_paro){
      
        $tabla = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdl_metricas_top_log_primer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro);
        return $respuesta;
    }

    static public function ctr_metricas_top_log_segundo_turno($id_area, $id_estacion, $inicio_paro, $final_paro){
      
        $tabla = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdl_metricas_top_log_segundo_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro);
        return $respuesta;
    }
    
    static public function ctr_metricas_top_log_tercer_turno($id_area, $id_estacion, $inicio_paro, $final_paro){
      
        $tabla = "tabla_paros";
        $respuesta = ModeloAdministrativo::mdl_metricas_top_log_tercer_turno($tabla, $id_area, $id_estacion, $inicio_paro, $final_paro);
        return $respuesta;
    }

    /*-------------------------------------------------------------------------------------------------
                                           Cerrando Logistica
    -------------------------------------------------------------------------------------------------*/
}