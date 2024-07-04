<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>api_rest</title>		

		<div id="tabla-container"></div>
		
		<script type = "text/javascript">

		const buscar = 'arroz'; // Esto se enviará por POST

		const servicio = 'prueba';
	
		var urlGet = 'http://localhost/SCUPTOS/controlador/?'+servicio;

		// Datos que se enviarán por GET
		//var dataGet = '&buscar='+buscar;
		// Construir la URL para la solicitud GET
		//urlGet = "http://localhost/sice/microservicios/?servicios" + dataGet;
		
		// Datos que se enviarán por POST
		const dataPost = new URLSearchParams({
			codigo:1,
			evaluador:'luis',
			evaluado:'',
			supervis:''
		});

		// Realizar la solicitud POST
		fetch(urlGet, {
			method: 'POST',
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded'
			},
			body: dataPost
		})
			.then(response => {
				if (!response.ok) {
					throw new Error('Error en la solicitud POST.');
				}
				return response.json();
			})
			.then(data => {
				//respuesta
				console.log(data);
			})
			.catch(error => {
				console.error('Error:', error);
			});
										
		</script>
	</head>	
</html>		
