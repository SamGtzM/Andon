$(".facebook").click(function(){
	FB.login(function(response){
		validarUsuario();
	}, {scope: 'public_profile, email'})
})

function validarUsuario(){
	FB.getLoginStatus(function(response){
		statusChangeCallback(response);
	})
}

function statusChangeCallback(response){
	if (response.status === 'connected') {
		testApi();
	} else {
		swal({
			title: "Error!!",
			text: "Ocurrio un problema al tratar de iniciar sesion con Facebook, vuelva a tratar.",
			type: "error",
			confirmButtonText: "cerrar",
			closeOnConfirm: false
		},
		function(isConfirm){
			if (isConfirm) {
				window.location = localStorage.getItem("rutaActual");
			}
		});
	}
}

function testApi(){
	FB.api('/me?fields=id,name,email,picture', function(response){
		if (response.email == null) {
			swal({
				title: "Error!!",
				text: "Para ingresar al sistema, debe colocar la información del correo electrónico.",
				type: "error",
				confirmButtonText: "cerrar",
				closeOnConfirm: false
			},
			function(isConfirm){
				if (isConfirm) {
					window.location = localStorage.getItem("rutaActual");
				}
			});
		} else {
			var email = response.email;
			var name = response.name;
			var picture = "http://graph.facebook.com/"+response.id+"/picture?type=large";

			var datos = new FormData();
			datos.append("email", email);
			datos.append("name", name);
			datos.append("picture", picture);

			$.ajax({
				url: rutaOculta+"ajax/usuarios.ajax.php",
				method: "POST",
				data: datos,
				cache: false,
				contentType: false,
				processData: false,
				success: function(respuesta){
					if (respuesta == "ok") {
						window.location = localStorage.getItem("rutaActual");
					} else {
						swal({
							title: "Error!!",
							text: "El correo electrónico ya esta registrado.",
							type: "error",
							confirmButtonText: "cerrar",
							closeOnConfirm: false
						},
						function(isConfirm){
							if (isConfirm) {
								FB.getLoginStatus(function(response){
									if (response.status === "connected") {
										FB.logout(function(response){
											deleteCookie("fblo_973673532810921");
											setTimeout(function(){
												window.location=rutaOculta+"salir";
											},500)
										});

										function deleteCookie(name){
											document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
										}
									}
								})
							}
						});
					}
				}
			})
		}
	})
}

/*=========================================
=            Salir de Facebook            =
=========================================*/

$(".salir").click(function(e){
	e.preventDefault();

	FB.getLoginStatus(function(response){
		if (response.status === "connected") {
			FB.logout(function(response){
				deleteCookie("fblo_973673532810921");
				setTimeout(function(){
					window.location=rutaOculta+"salir";
				},500)
			});

			function deleteCookie(name){
				document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
			}
		}
	})
})

/*=====  End of Salir de Facebook  ======*/
