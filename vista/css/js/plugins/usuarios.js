/*===================================
=            Ruta actual            =
===================================*/

var rutaActual = location.href;

$(".facebook, .google").click(function(){
	localStorage.setItem("rutaActual", rutaActual);
})

/*=====  End of Ruta actual  ======*/

/*========================================
=            Formatear inputs            =
========================================*/

$("input").focus(function() {
	$(".alert").remove();
})

/*=====  End of Formatear inputs  ======*/