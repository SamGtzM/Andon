<?php

if (isset($_SESSION["validarSesion"])) {
	if ($_SESSION["validarSesion"] == "ok") {
		echo '
			<script>
				localStorage.setItem("usuario", "'.$_SESSION["usuario"].'");
			</script>
		';
	}
}

$url = Ruta::ctrRuta();

if (isset($_SESSION["validarSesion"])){

    if($_SESSION["validarSesion"] == "ok"){

        if($_SESSION["id_acceso"] == "1"){
    
            if($_SESSION["id_departamento"] == '1'){
    
                //mantenimiento
                echo'
                
                <header class="header">
                    <div class="container">
                    <div class="btn-menu">
                        <label for="btn-menu">☰</label>
                    </div>
            
                </header>
                <div class="capa"></div>
                <!--	--------------->
                <input type="checkbox" id="btn-menu">
                <div class="container-menu">
                    <div class="cont-menu">
                        <div></br></br>
                            <a class="titlemenu">Mantenimiento</a></br>
                            <ul>                
                                <a href="'.$url.'administrativo_mantenimiento_crossmember_paros_activos"> Crossmember / Active stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_crossmember_historial"> Crossmember / History of stoppages  </a>
                                <a href="'.$url.'administrativo_mantenimiento_llantas_paros_activos"> Wheels & tires assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_llantas_historial"> Wheels & tires assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_eje_paros_activos"> Rear axle assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_eje_historial"> Rear axle assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_metricas_llantas"> Metrics  </a>
                            </ul>
                        </div>
                        <label for="btn-menu">✖️</label>
                    </div>
                </div>

                <div class="backgen">
                    <div class="firstnav">
                        <li class="exit"><a style="left: 40% !important;" href="'.$url.'salir">Log out</a></li>
                    </div>
                </div>

                <div class="cabhome">
                    <li><a href="'.$url.'inicio"><img src="'.$url.'vista/css/img/home.svg" alt="" width="18px;" class="dlogo"></a></li>
                </div>

                <div class="menu_general">
                    <ul>
                        <li><a href="'.$url.'general_crossmember">Crossmember</a></li>
                        <li><a href="'.$url.'general_llantas">Wheels & tires assembly</a></li>
                        <li><a href="'.$url.'general_eje_ensamble">Rear axle assembly</a></li>
                    </ul>
                </div>

                ';
            
            } else if($_SESSION["id_departamento"] == '2'){
            
                //producciòn
                echo'

                <div class="cerrarsesion">
                    <a></a>
                </div>
                
                <header class="header">
                    <div class="container">
                    <div class="btn-menu">
                        <label for="btn-menu">☰</label>
                    </div>
            
                </header>
                <div class="capa"></div>
                <!--	--------------->
                <input type="checkbox" id="btn-menu">
                <div class="container-menu">
                    <div class="cont-menu">
                        <div></br></br>
                            <a class="titlemenu">Production</a></br>
                            <ul>                
                                <a href="'.$url.'administrativo_produccion_crossmember_paros_activos"> Crossmember / Active stoppages </a>
                                <a href="'.$url.'administrativo_produccion_crossmember_historial"> Crossmember / History of stoppages  </a>
                                <a href="'.$url.'administrativo_produccion_llantas_paros_activos"> Wheels & tires assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_produccion_llantas_historial"> Wheels & tires assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_produccion_eje_paros_activos"> Rear axle assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_produccion_eje_historial"> Rear axle assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_produccion_metricas"> Metrics </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_crossmember"> Crossmember / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_crossmember_historial"> Crossmember Record / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_llantas"> Wheels & tires assembly / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_llantas_historial"> Wheels & tires assembly Record / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_eje"> Rear axle assembly / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_eje_historial"> Rear axle assembly Record / Scrap / Rework </a>
                            </ul>
                        </div>
                        <label for="btn-menu">✖️</label>
                    </div>
                </div>

                <div class="backgen">
                    <div class="firstnav">
                        <li class="exit"><a style="left: 40% !important;" href="'.$url.'salir">Log out</a></li>
                    </div>
                </div>

                <div class="cabhome">
                    <li><a href="'.$url.'inicio"><img src="'.$url.'vista/css/img/home.svg" alt="" width="18px;" class="dlogo"></a></li>
                </div>

                <div class="menu_general">
                    <ul>
                        <li><a href="'.$url.'general_crossmember">Crossmember</a></li>
                        <li><a href="'.$url.'general_llantas">Wheels & tires assembly</a></li>
                        <li><a href="'.$url.'general_eje_ensamble">Rear axle assembly</a></li>
                    </ul>
                </div>

                ';
            
            } else if($_SESSION["id_departamento"] == '3'){
            
                //calidad
                echo'

                <div class="cerrarsesion">
                    <a></a>
                </div>
                
                <header class="header">
                    <div class="container">
                    <div class="btn-menu">
                        <label for="btn-menu">☰</label>
                    </div>
            
                </header>
                <div class="capa"></div>
                <!--	--------------->
                <input type="checkbox" id="btn-menu">
                <div class="container-menu">
                    <div class="cont-menu">
                        <div></br></br>
                            <a class="titlemenu">Quality</a></br>
                            <ul>                
                                <a href="'.$url.'administrativo_calidad_crossmember_paros_activos"> Crossmember / Active stoppages </a>
                                <a href="'.$url.'administrativo_calidad_crossmember_historial"> Crossmember / History of stoppages  </a>
                                <a href="'.$url.'administrativo_calidad_llantas_paros_activos"> Wheels & tires assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_calidad_llantas_historial"> Wheels & tires assemblyas / History of stoppages </a>
                                <a href="'.$url.'administrativo_calidad_eje_paros_activos"> Rear axle assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_calidad_eje_historial"> Rear axle assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_calidad_metricas"> Metrics </a>
                            </ul>
                        </div>
                        <label for="btn-menu">✖️</label>
                    </div>
                </div>

                <div class="backgen">
                    <div class="firstnav">
                        <li class="exit"><a style="left: 40% !important;" href="'.$url.'salir">Log out</a></li>
                    </div>
                </div>

                <div class="cabhome">
                    <li><a href="'.$url.'inicio"><img src="'.$url.'vista/css/img/home.svg" alt="" width="18px;" class="dlogo"></a></li>
                </div>

                <div class="menu_general">
                    <ul>
                        <li><a href="'.$url.'general_crossmember">Crossmember</a></li>
                        <li><a href="'.$url.'general_llantas">Wheels & tires assembly</a></li>
                        <li><a href="'.$url.'general_eje_ensamble">Rear axle assembly</a></li>
                    </ul>
                </div>

                ';
            
            } else if($_SESSION["id_departamento"] == '4'){
            
                //logistica/materiales
                echo'

                <div class="cerrarsesion">
                    <a></a>
                </div>
                
                <header class="header">
                    <div class="container">
                    <div class="btn-menu">
                        <label for="btn-menu">☰</label>
                    </div>
            
                </header>
                <div class="capa"></div>
                <!--	--------------->
                <input type="checkbox" id="btn-menu">
                <div class="container-menu">
                    <div class="cont-menu">
                        <div></br></br>
                            <a class="titlemenu">Logistics</a></br>
                            <ul>                
                                <a href="'.$url.'administrativo_logistica_crossmember_paros_activos"> Crossmember / Active stoppages </a>
                                <a href="'.$url.'administrativo_logistica_crossmember_historial"> Crossmember / History of stoppages  </a>
                                <a href="'.$url.'administrativo_logistica_llantas_paros_activos"> Wheels & tires assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_logistica_llantas_historial"> Wheels & tires assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_logistica_eje_paros_activos"> Rear axle assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_logistica_eje_historial"> Rear axle assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_logistica_metricas"> Metrics </a>
                            </ul>
                        </div>
                        <label for="btn-menu">✖️</label>
                    </div>
                </div>

                <div class="backgen">
                    <div class="firstnav">
                        <li class="exit"><a style="left: 40% !important;" href="'.$url.'salir">Log out</a></li>
                    </div>
                </div>

                <div class="cabhome">
                    <li><a href="'.$url.'inicio"><img src="'.$url.'vista/css/img/home.svg" alt="" width="18px;" class="dlogo"></a></li>
                </div>

                <div class="menu_general">
                    <ul>
                        <li><a href="'.$url.'general_crossmember">Crossmember</a></li>
                        <li><a href="'.$url.'general_llantas">Wheels & tires assembly</a></li>
                        <li><a href="'.$url.'general_eje_ensamble">Rear axle assembly</a></li>
                    </ul>
                </div>

                ';
            
            }
    
        } else if($_SESSION["id_acceso"] == "2"){

            if($_SESSION["id_departamento"] == '5'){
            
                //gerencia
                echo'

                <div class="cerrarsesion">
                    <a></a>
                </div>
                
                <header class="header">
                    <div class="container">
                    <div class="btn-menu">
                        <label for="btn-menu">☰</label>
                    </div>
            
                </header>
                <div class="capa"></div>
                <!--	--------------->
                <input type="checkbox" id="btn-menu">
                <div class="container-menu">
                    <div class="cont-menu">
                        
                        <div></br></br>
                            <a class="titlemenu">Management</a></br>
                            <ul>                
                                <a href="'.$url.'gerencia_10_crossmember"> Crossmember top 10 </a>
                                <a href="'.$url.'gerencia_10_eje"> Rear axle assembly top 10 </a>
                                <a href="'.$url.'gerencia_10_llantas"> Wheels & tires assembly top 10 </a>
                                <a href="'.$url.'gerencia_metricas"> Metrics </a>
                            </ul>
                        </div>

                        <div></br></br>
                            <a class="titlemenu">Maintenance</a></br>
                            <ul>                
                                <a href="'.$url.'administrativo_mantenimiento_crossmember_paros_activos"> Crossmember / Active stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_crossmember_historial"> Crossmember / History of stoppages  </a>
                                <a href="'.$url.'administrativo_mantenimiento_llantas_paros_activos"> Wheels & tires assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_llantas_historial"> Wheels & tires assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_eje_paros_activos"> Rear axle assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_eje_historial"> Rear axle assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_metricas_llantas"> Metrics  </a>
                            </ul>
                        </div>

                        <div></br></br></br></br>
                            <a class="titlemenu">Production</a></br>
                            <ul>                
                                <a href="'.$url.'administrativo_produccion_crossmember_paros_activos"> Crossmember / Active stoppages </a>
                                <a href="'.$url.'administrativo_produccion_crossmember_historial"> Crossmember / History of stoppages  </a>
                                <a href="'.$url.'administrativo_produccion_llantas_paros_activos"> Wheels & tires assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_produccion_llantas_historial"> Wheels & tires assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_produccion_eje_paros_activos"> Rear axle assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_produccion_eje_historial"> Rear axle assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_produccion_metricas"> Metrics </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_crossmember"> Crossmember / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_crossmember_historial"> Crossmember Record / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_llantas"> Wheels & tires assembly / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_llantas_historial"> Wheels & tires assembly Record / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_eje"> Rear axle assembly / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_eje_historial"> Rear axle assembly Record / Scrap / Rework </a>
                            </ul>
                        </div>

                        <div></br></br></br></br></br></br>
                            <a class="titlemenu">Quality</a></br>
                            <ul>                
                                <a href="'.$url.'administrativo_calidad_crossmember_paros_activos"> Crossmember / Active stoppages </a>
                                <a href="'.$url.'administrativo_calidad_crossmember_historial"> Crossmember / History of stoppages  </a>
                                <a href="'.$url.'administrativo_calidad_llantas_paros_activos"> Wheels & tires assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_calidad_llantas_historial"> Wheels & tires assemblyas / History of stoppages </a>
                                <a href="'.$url.'administrativo_calidad_eje_paros_activos"> Rear axle assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_calidad_eje_historial"> Rear axle assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_calidad_metricas"> Metrics </a>
                            </ul>
                        </div>

                        <div></br></br></br></br>
                            <a class="titlemenu">Logistics</a></br>
                            <ul>                
                                <a href="'.$url.'administrativo_logistica_crossmember_paros_activos"> Crossmember / Active stoppages </a>
                                <a href="'.$url.'administrativo_logistica_crossmember_historial"> Crossmember / History of stoppages  </a>
                                <a href="'.$url.'administrativo_logistica_llantas_paros_activos"> Wheels & tires assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_logistica_llantas_historial"> Wheels & tires assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_logistica_eje_paros_activos"> Rear axle assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_logistica_eje_historial"> Rear axle assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_logistica_metricas"> Metrics </a>
                            </ul>
                        </div>

                        <label for="btn-menu">✖️</label>
                    </div>
                </div>

                <div class="backgen">
                    <div class="firstnav">
                        <li class="exit"><a style="left: 40% !important;" href="'.$url.'salir">Log out</a></li>
                    </div>
                </div>

                <div class="cabhome">
                    <li><a href="'.$url.'inicio"><img src="'.$url.'vista/css/img/home.svg" alt="" width="18px;" class="dlogo"></a></li>
                </div>

                <div class="menu_general">
                    <ul>
                        <li><a href="'.$url.'general_crossmember">Crossmember</a></li>
                        <li><a href="'.$url.'general_llantas">Wheels & tires assembly</a></li>
                        <li><a href="'.$url.'general_eje_ensamble">Rear axle assembly</a></li>
                    </ul>
                </div>

                ';
            
            }
    
        } else if($_SESSION["id_acceso"] == "3"){

            if($_SESSION["id_departamento"] == '6'){
            
                //administrador
                echo'

                <div class="cerrarsesion">
                    <a></a>
                </div>
                
                <header class="header">
                    <div class="container">
                    <div class="btn-menu">
                        <label for="btn-menu">☰</label>
                    </div>
            
                </header>
                <div class="capa"></div>
                <!--	--------------->
                <input type="checkbox" id="btn-menu">
                <div class="container-menu">
                    <div class="cont-menu">
                    
                        <div></br></br>
                            <a class="titlemenu">Administrator</a></br>
                            <ul>                
                                <a href="'.$url.'administrador_altas_bajas_rate"> Changes rate </a>
                                <a href="'.$url.'administrador_altas_bajas_usuarios"> User accounts</a>
                            </ul>
                        </div>
                        
                        <div></br></br>
                            <a class="titlemenu">Management</a></br>
                            <ul>                
                                <a href="'.$url.'gerencia_10_crossmember"> Crossmember top 10 </a>
                                <a href="'.$url.'gerencia_10_eje"> Rear axle assembly top 10 </a>
                                <a href="'.$url.'gerencia_10_llantas"> Wheels & tires assembly top 10 </a>
                                <a href="'.$url.'gerencia_metricas"> Metrics </a>
                            </ul>
                        </div>

                        <div></br></br>
                            <a class="titlemenu">Maintenance</a></br>
                            <ul>                
                                <a href="'.$url.'administrativo_mantenimiento_crossmember_paros_activos"> Crossmember / Active stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_crossmember_historial"> Crossmember / History of stoppages  </a>
                                <a href="'.$url.'administrativo_mantenimiento_llantas_paros_activos"> Wheels & tires assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_llantas_historial"> Wheels & tires assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_eje_paros_activos"> Rear axle assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_eje_historial"> Rear axle assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_mantenimiento_metricas_llantas"> Metrics   </a>
                            </ul>
                        </div>

                        <div></br></br></br></br>
                            <a class="titlemenu">Production</a></br>
                            <ul>                
                                <a href="'.$url.'administrativo_produccion_crossmember_paros_activos"> Crossmember / Active stoppages </a>
                                <a href="'.$url.'administrativo_produccion_crossmember_historial"> Crossmember / History of stoppages  </a>
                                <a href="'.$url.'administrativo_produccion_llantas_paros_activos"> Wheels & tires assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_produccion_llantas_historial"> Wheels & tires assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_produccion_eje_paros_activos"> Rear axle assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_produccion_eje_historial"> Rear axle assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_produccion_metricas"> Metrics </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_crossmember"> Crossmember / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_crossmember_historial"> Crossmember Record / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_llantas"> Wheels & tires assembly / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_llantas_historial"> Wheels & tires assembly Record / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_eje"> Rear axle assembly / Scrap / Rework </a>
                                <a href="'.$url.'administrativo_produccion_scrapp_retrabajo_eje_historial"> Rear axle assembly Record / Scrap / Rework </a>
                            </ul>
                        </div>

                        <div></br></br></br></br></br></br>
                            <a class="titlemenu">Quality</a></br>
                            <ul>                
                                <a href="'.$url.'administrativo_calidad_crossmember_paros_activos"> Crossmember / Active stoppages </a>
                                <a href="'.$url.'administrativo_calidad_crossmember_historial"> Crossmember / History of stoppages  </a>
                                <a href="'.$url.'administrativo_calidad_llantas_paros_activos"> Wheels & tires assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_calidad_llantas_historial"> Wheels & tires assemblyas / History of stoppages </a>
                                <a href="'.$url.'administrativo_calidad_eje_paros_activos"> Rear axle assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_calidad_eje_historial"> Rear axle assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_calidad_metricas"> Metrics </a>
                            </ul>
                        </div>

                        <div></br></br></br></br>
                            <a class="titlemenu">Logistics</a></br>
                            <ul>                
                                <a href="'.$url.'administrativo_logistica_crossmember_paros_activos"> Crossmember / Active stoppages </a>
                                <a href="'.$url.'administrativo_logistica_crossmember_historial"> Crossmember / History of stoppages  </a>
                                <a href="'.$url.'administrativo_logistica_llantas_paros_activos"> Wheels & tires assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_logistica_llantas_historial"> Wheels & tires assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_logistica_eje_paros_activos"> Rear axle assembly / Active stoppages </a>
                                <a href="'.$url.'administrativo_logistica_eje_historial"> Rear axle assembly / History of stoppages </a>
                                <a href="'.$url.'administrativo_logistica_metricas"> Metrics </a>
                            </ul>
                        </div>

                        <label for="btn-menu">✖️</label>
                    </div>
                </div>

                <div class="backgen">
                    <div class="firstnav">
                        <li class="exit"><a style="left: 40% !important;" href="'.$url.'salir">Log out</a></li>
                    </div>
                </div>

                <div class="cabhome">
                    <li><a href="'.$url.'inicio"><img src="'.$url.'vista/css/img/home.svg" alt="" width="18px;" class="dlogo"></a></li>
                </div>

                <div class="menu_general">
                     <ul>
                        <li><a href="'.$url.'general_crossmember">Crossmember</a></li>
                        <li><a href="'.$url.'general_llantas">Wheels & tires assembly</a></li>
                        <li><a href="'.$url.'general_eje_ensamble">Rear axle assembly</a></li>
                    </ul>
                </div>

                ';
            
            }

        } 
    
    } 

} else {
    
    //general
    echo'

        <div class="backgen">
            <div class="firstnav">
                <li class="exit"><a style="left: 35% !important;" href="'.$url.'login">Log in</a></li>
            </div>
        </div>

        <div class="cabhome">
            <li><a href="'.$url.'inicio"><img src="'.$url.'vista/css/img/home.svg" alt="" width="18px;" class="dlogo"></a></li>
        </div>
        
        <div class="menu_general">
            <ul>
                <li><a href="'.$url.'general_crossmember">Crossmember</a></li>
                <li><a href="'.$url.'general_llantas">Wheels & tires assembly</a></li>
                <li><a href="'.$url.'general_eje_ensamble">Rear axle assembly</a></li>
            </ul>
        </div>

    ';

}



