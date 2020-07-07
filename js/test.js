/*function mostrarTest(){
	const preguntasRespuestas = [];
	preguntasRespuestas.forEach((preguntaActual, numeroDePregunta) => {
		const respuestas = [];
		for(letraRespuesta in preguntaActual.respuestas){
			respuestas.push(
				'
					>

				'
			);
		}
	})

}*/

$(document).ready(function(){

		$.ajax({
			url: "prueba.php",
			type: POST,
			data: $(this).serialize(),
			success:function(response){
					consol.log(response);
			},
			error:function(){
				alert("ocurrio un error");
			}	
		});
});




