//función consulta invitados
function consultaInvitados(opt) {
	fetch(url+'procesos/consulta', {
		method: 'post'
	}). then(function(respuesta) {
		if (respuesta.ok) {
			return respuesta.json()
		} else {
			console.log(respuesta)
			throw ('error en la llamada AJAX')
		}	
	})
	.then(function(invitados) {
		//montar la lista de invitados
		console.log(invitados);
		alert (invitados)
		let lista=""
		if (opt=='b') {
			lista="<option disabled selected value='-1'>Seleccione libro</option>";
			for (i=0; i<invitados.length; i++) {
				lista+=`<option class=check' value='${invitados[i].idinvitado}'>${invitados[i].nombre}  ${invitados[i].apellidos}</option>`
			}
		} else {
			for (i=0; i<invitados.length; i++) {
				lista+=invitados[i].nombre + '  ' + invitados[i].apellidos + '<hr>'
			}
		}
		
		document.getElementById('listainvitados').innerHTML = lista;

	})
	.catch (function(error)  {
		alert (error);
	})


}
