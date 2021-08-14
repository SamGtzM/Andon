<?php

require_once 'controladores/plantilla.controlador.php';
require_once 'controladores/usuarios.controlador.php';
require_once 'controladores/administrativo.controlador.php';
require_once 'controladores/gerencia.controlador.php';
require_once 'controladores/general_llantas.controlador.php';
require_once 'controladores/general_cross_10.controlador.php';
require_once 'controladores/general_cross_20.controlador.php';
require_once 'controladores/general_cross_30.controlador.php';
require_once 'controladores/general_cross_40.controlador.php';
require_once 'controladores/general_cross_50.controlador.php';
require_once 'controladores/general_eje_60.controlador.php';
require_once 'controladores/general_eje_65.controlador.php';
require_once 'controladores/general_eje_70.controlador.php';
require_once 'controladores/rate.controlador.php';

require_once 'modelos/usuarios.modelo.php';
require_once 'modelos/administrativo.modelo.php';
require_once 'modelos/gerencia.modelo.php';
require_once 'modelos/general_llantas.modelo.php';
require_once 'modelos/general_cross_10.modelo.php';
require_once 'modelos/general_cross_20.modelo.php';
require_once 'modelos/general_cross_30.modelo.php';
require_once 'modelos/general_cross_40.modelo.php';
require_once 'modelos/general_cross_50.modelo.php';
require_once 'modelos/general_eje_60.modelo.php';
require_once 'modelos/general_eje_65.modelo.php';
require_once 'modelos/general_eje_70.modelo.php';
require_once 'modelos/rate.modelo.php';

/*=============================
=            Rutas            =
=============================*/

require_once 'modelos/rutas.php';

/*=====  End of Rutas  ======*/

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
