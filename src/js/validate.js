function check_email(email) {
	var exr = /^[0-9a-z_\-\.]+@[0-9a-z\-\.]+\.[a-z]{2,4}$/i;
	return exr.test(email);
}

function check_form(form) {
	if (form.Nombre.value == "") {
		alert( "El campo “Nombre” es requerido." );
		form.Nombre.focus();
		return false;
	}
	if (form.Email.value == "") {
		alert( "El campo “Email” es requerido." );
		form.Email.focus();
		return false;
	}
	if ( !check_email(form.Email.value) ) {
		alert( "La dirección de “Email” ingresada no es válida." );
		form.Email.focus();
		return false;
	}
	if (form.Mensaje.value == "") {
		alert( "El campo “Mensaje” es requerido." );
		form.Mensaje.focus();
		return false;
	}
	return true;
}
