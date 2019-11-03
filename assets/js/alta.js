function altaInvitado() {
	alert ('altaInvitado');
	nif = document.getElementById('nif').value;
	nombre = document.getElementById('nombre').value;
	apellidos = document.getElementById('apellidos').value;

	var datos = new FormData();
	datos.append('nif',nif);
	datos.append('nombre',nombre);
	datos.append('apellidos',apellidos);
	
	fetch(url+'procesos/alta', {
		method: 'post',
		body: datos
	}). then (function(respuesta) {
		if (respuesta.ok) {
			return respuesta.json()
		} else {
			console.log(respuesta)
			throw ('error en la llamada AJAX')
		}	
	})
	.then(function(datos) {
		//montar la lista de invitados
		console.log(datos)
		//alert (datos.code)
		alert (datos.message)
	})
	.catch (function(error)  {
		alert (error);
	})


}