function bajaInvitado() {
	alert ('bajainvitado');
	var combo = document.getElementById("listainvitados");
	idinvitado=document.getElementById('listainvitados').value;
	alert (idinvitado)
	var datos = new FormData();
	datos.append('idinvitado', idinvitado);
		
	fetch(url+'procesos/baja', {
		method: 'post',
		body: datos
	}). then (function(respuesta) {
		if (respuesta.ok) {
			return respuesta.text()
		} else {
			console.log(respuesta)
			throw ('error en la llamada AJAX')
		}	
	})
	.then(function(datos) {
		//montar la lista de invitados
		console.log(datos)
		//alert (datos.code)
		alert (datos)


	})
	.catch (function(error)  {
		alert (error);
	})





}