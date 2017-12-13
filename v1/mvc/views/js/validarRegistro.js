/*Validar REGISTRO*/

function validarRegistro(){

	var usuario = document.querySelector("#usuarioRegistro").value;
	var password = document.querySelector("#passwordRegistro").value;
	var email = document.querySelector("#emailRegistro").value;
	var terminos = document.querySelector("#terminos").checked;

	/*Comprobar
	console.log('usuario', usuario);
	console.log('password', password);
	console.log('email', email);*/

	/*Validar USUARIO*/
	if (usuario != ""){
		var caracteres = usuario.length;
		var expresion = /^[a-zA-Z0-9]*$/;

		if (caracteres > 6){
			document.querySelector("label[for='usuarioRegistro']").innerHTML += "</br> Ingrese menos de 6 caracteres";
			/*window.alert("Ingrese menos de 6 caracteres");*/
			return false;
		}

		if (!expresion.test(usuario)){
			document.querySelector("label[for='usuarioRegistro']").innerHTML += "</br> Caracteres especiales no permitidos";
			return false;
		}
	}

	/*Validar PASSOWRD*/
	if (password != ""){
		var caracteres = password.length;
		var expresion = /^[a-zA-Z0-9]*$/;

		if (caracteres < 6){
			document.querySelector("label[for='passwordRegistro']").innerHTML += "</br> Ingrese mas de 6 caracteres";
			return false;
		}

		if (!expresion.test(password)){
			document.querySelector("label[for='passwordRegistro']").innerHTML += "</br> Caracteres especiales no permitidos";
			return false;
		}
	}

	/*Validar EMAIL*/
	if (password != ""){
		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

		if (!expresion.test(email)){
			document.querySelector("label[for='emailRegistro']").innerHTML += "</br> Escriba el email correctamente";
			return false;
		}
	}

	/*Validar TERINOS*/
	if (!terminos){
		document.querySelector("form").innerHTML += "</br> Acepte terminos :)";
		document.querySelector("#usuarioRegistro").value = usuario;
		document.querySelector("#passwordRegistro").value = password;
		document.querySelector("#emailRegistro").value = email;
		return false;
	}



	

}