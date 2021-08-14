<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Marelli" />
<meta name="description" content="Marelli - Template maked bye BIT AUTOMATION" />
<meta name="author" content="Dtech" />
<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="vista/css/img/default/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<title>Marelli</title>

<?php

	session_start();

	/*=======================================================
	=            Mantener Ruta fija del proyecto            =
	=======================================================*/
	$url = Ruta::ctrRuta();
	/*=====  End of Mantener Ruta fija del proyecto  ======*/

?>

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="vista/css/img/default/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="vista/css/img/default/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="vista/css/img/default/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="vista/css/img/default/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="vista/css/img/default/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="vista/css/img/default/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="vista/css/img/default/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="vista/css/img/default/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="vista/css/img/default/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="vista/css/img/default/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="vista/css/img/default/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="vista/css/img/default/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="vista/css/img/default/favicon/favicon-16x16.png">
<link rel="manifest" href="vista/css/img/default/favicon/manifest.json">
<!-- cerrando favicon -->

<!-- dropzone -->
<link href="<?php echo $url; ?>vista/css/plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
<!-- cerrando dropzone -->

<!-- bootstrap -->
<link href="<?php echo $url; ?>vista/bootstrap_4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/bootstrap_4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css" />
<!-- cerrando bootstrap -->

<!-- font-awesome -->
<link href="<?php echo $url; ?>vista/fontawesome_5.15.2/fontawesome-free-5.15.2-web/css/fontawesome.min.css" rel="stylesheet" type="text/css" />
<!-- cerrando font-awesome -->

<!-- Flaticon -->
<link href="<?php echo $url; ?>vista/css/plugins/flaticon.css" rel="stylesheet" type="text/css" />
<!-- cerrando flaticon -->

<!-- sweet alert -->
<link rel="stylesheet" href="<?php echo $url; ?>vista/sweetalert2/sweetalert.css">
<!-- sweet alert -->

<!-- main style -->
<link href="<?php echo $url; ?>vista/css/cabezote.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/css/inicio.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/css/footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/css/error404.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/css/login.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/css/datatablede_designe.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/css/general_crossmember.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/css/general_eje_ensamble.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/css/general_llantas.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/css/metricas.css" rel="stylesheet" type="text/css" />
<!-- cerrando main style -->

<!-- Datatable -->
<link href="<?php echo $url; ?>vista/datatables_1.10.23/DataTables-1.10.23/media/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/datatables_1.10.23/DataTables-1.10.23/media/Buttons-1.7.0/css/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $url; ?>vista/datatables_1.10.23/DataTables-1.10.23/media/Buttons-1.7.0/css/buttons.dataTables.css" rel="stylesheet" type="text/css" />
<!-- Cerrando datatable -->

<!-- google fonts -->
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<!-- cerrando google fonts -->

<!-- jquery -->
<script type="text/javascript" charset="utf8" src="<?php echo $url; ?>vista/jquery/jquery-3.3.1.min.js"></script>
<!-- cerrando jquery -->

<!-- jquery  -->
<script src="<?php echo $url; ?>vista/sweetalert2/sweetalert.min.js"></script>
<script src="<?php echo $url; ?>vista/css/js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/plugins/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/plugins/popper.min.js"></script>
<!-- cerrando jquery -->

<!-- popper -->
<script type="text/javascript" charset="utf8" src="<?php echo $url; ?>vista/popper/popper.min.js"></script>
<!-- cerrando popper -->

<!-- bootstrap -->
<script type="text/javascript" src="<?php echo $url; ?>vista/bootstrap_4.1.3/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/bootstrap_4.1.3/js/bootstrap.min.js"></script>
<!-- cerrando bootstrap -->

</head>

<body>

<?php

	/*================================
	=            Cabezote            =
	================================*/

	include "modulos/cabezote.php";
    /*=====  End of Cabezote  ======*/

    $rutas = array();
    $ruta = null;
    $infoUsuario = null;

    if (isset($_GET["ruta"])) {
        $rutas = explode("/", $_GET["ruta"]);
        if ($rutas[0] == "salir" || $rutas[0] == "login" || $rutas[0] == "general_crossmember" || $rutas[0] == "general_eje_ensamble" || $rutas[0] == "general_llantas" || $rutas[0] == "administrativo_mantenimiento_crossmember_paros_activos" || $rutas[0] == "administrativo_mantenimiento_crossmember_historial" || $rutas[0] == "administrativo_mantenimiento_llantas_paros_activos" || $rutas[0] == "administrativo_mantenimiento_llantas_historial" || $rutas[0] == "administrativo_mantenimiento_eje_paros_activos" || $rutas[0] == "administrativo_mantenimiento_eje_historial" || $rutas[0] == "administrativo_mantenimiento_metricas_llantas" || $rutas[0] == "administrativo_produccion_crossmember_paros_activos" || $rutas[0] == "administrativo_produccion_crossmember_historial" || $rutas[0] == "administrativo_produccion_llantas_paros_activos" || $rutas[0] == "administrativo_produccion_llantas_historial" || $rutas[0] == "administrativo_produccion_eje_paros_activos" || $rutas[0] == "administrativo_produccion_eje_historial" || $rutas[0] == "administrativo_produccion_metricas" || $rutas[0] == "administrativo_calidad_crossmember_paros_activos" || $rutas[0] == "administrativo_calidad_crossmember_historial" || $rutas[0] == "administrativo_calidad_llantas_paros_activos" || $rutas[0] == "administrativo_calidad_llantas_historial" || $rutas[0] == "administrativo_calidad_eje_paros_activos" || $rutas[0] == "administrativo_calidad_eje_historial" || $rutas[0] == "administrativo_logistica_crossmember_paros_activos" || $rutas[0] == "administrativo_logistica_crossmember_historial" || $rutas[0] == "administrativo_logistica_llantas_paros_activos" || $rutas[0] == "administrativo_logistica_llantas_historial" || $rutas[0] == "administrativo_logistica_eje_paros_activos" || $rutas[0] == "administrativo_logistica_eje_historial" || $rutas[0] == "administrador_altas_bajas_usuarios" || $rutas[0] == "administrador_altas_bajas_rate" || $rutas[0] == "administrativo_calidad_metricas" || $rutas[0] == "administrativo_logistica_metricas" || $rutas[0] == "gerencia_10_crossmember" || $rutas[0] == "gerencia_10_eje" || $rutas[0] == "gerencia_10_llantas" || $rutas[0] == "gerencia_metricas" || $rutas[0] == "administrativo_produccion_scrapp_retrabajo_llantas" || $rutas[0] == "administrativo_produccion_scrapp_retrabajo_crossmember" || $rutas[0] == "administrativo_produccion_scrapp_retrabajo_eje" || $rutas[0] == "administrativo_produccion_scrapp_retrabajo_crossmember_historial"  || $rutas[0] == "administrativo_produccion_scrapp_retrabajo_eje_historial" || $rutas[0] == "administrativo_produccion_scrapp_retrabajo_llantas_historial"){
    		include "modulos/".$rutas[0].".php";
    	}else if($rutas[0] == "" || $rutas[0] == "inicio"){
			include "modulos/inicio.php";
		} else {
			include "modulos/error404.php";
		}
	} else {
		include "modulos/inicio.php";
	}


?>

<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">

<!--=================================
 jquery -->

<!-- dropzone -->
<script type="text/javascript" src="<?php echo $url; ?>vista/css/plugins/dropzone/dropzone.js"></script>
<!-- cerrando dropzone -->

<!-- appear -->
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/plugins/jquery.appear.js"></script>
<!-- cerrando appear -->

<!-- bootstrap -->
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/plugins/mega-menu/mega_menu.js"></script>
<!-- cerrando bootstrap -->

<!-- Datatable -->
<script type="text/javascript" charset="utf8" src="<?php echo $url; ?>vista/datatables_1.10.23/DataTables-1.10.23/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo $url; ?>vista/datatables_1.10.23/DataTables-1.10.23/media/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript" charset="utf8" src="<?php echo $url; ?>vista/datatables_1.10.23/DataTables-1.10.23/media/Buttons-1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo $url; ?>vista/datatables_1.10.23/DataTables-1.10.23/media/Buttons-1.7.0/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo $url; ?>vista/datatables_1.10.23/DataTables-1.10.23/media/Buttons-1.7.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo $url; ?>vista/datatables_1.10.23/DataTables-1.10.23/media/Buttons-1.7.0/js/buttons.print.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo $url; ?>vista/datatables_1.10.23/DataTables-1.10.23/media/Buttons-1.7.0/js/buttons.colVis.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo $url; ?>vista/datatables_1.10.23/DataTables-1.10.23/media/Buttons-1.7.0/js/buttons.jqueryui.min.js"></script>
<!-- Cerrando Datatable -->

<!-- Metricos -->
<script type="text/javascript" charset="utf8" src="<?php echo $url; ?>vista/metricos/js/Chart.min.js"></script>
<!-- Cerrando Metricos -->

<!-- counter -->
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/plugins/countdown/jquery.downCount.js"></script>
<!-- cerrando counter -->

<!-- main js -->
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/inicio.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/plantilla.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/usuarios.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/datatable_designe.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/btn_exportar_tabla.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/general_llantas.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/general_cross_10.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/general_cross_20.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/general_cross_30.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/general_cross_40.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/general_cross_50.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/general_eje_60.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/general_eje_65.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/general_eje_70.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/rate.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/administrativo.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/gerencia.js"></script>



<!-- cerrando main js -->

<script>
	(function() {

		[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
			new CBPFWTabs( el );
		});

	})();
</script>

<!-- custom -->
<script type="text/javascript" src="<?php echo $url; ?>vista/css/js/cabezote.js"></script>

</body>
</html>
