$(document).ready(function(){
	$("#boton").click(function(){
		var res = document.getElementById("respuesta").value;
		var resCorrecta = document.getElementById("respuestaCorrecta").value;
		//alert(window.location);
	 	$.ajax({
			type: "POST",
		    url: "validarLecciones.php",
		    data: {respuesta:res,correcto:resCorrecta},
		    dataType:"JSON",
		    success: function(response){
		    	$("#MostrarRespuesta").append("Tu respuesta fue: <label id='resp'>"+response.obj[0].respuesta+"</label>");
		    	$("#respuesta").attr('disabled','disabled');
		    	$("#respuesta").css("border-radius", "25px");
		    	$("#respuesta").css("color", "#fff");
		    	if (response.obj[0].respuesta == response.obj[0].correcto){
		    		$("#respuesta").css("background-color", "#5cb85c");
		    		$("#MostrarRespuesta").append("<br>La respuesta fue correcta");
		    	}else{
		    		$("#respuesta").css("background-color", "#d9534f");
		    		$("#MostrarRespuesta").append("<br>La respuesta fue incorrecta <br> La Respuesta correcta es: " 
		    			+ response.obj[0].correcto);
		    	}


		    	$("#boton").attr('disabled','disabled');
		    	$("#MostrarRespuesta").append("<input type='submit' value='Regresar' id='regresar' >");

		    	$("#regresar").click(function(){
					swal({
				        title: "Aviso!",
				        text: "¿Desea regresar al inicio?",
				        type: "warning",
				        showCancelButton: true,
				        confirmButtonColor: '#3085d6',
				        cancelButtonColor: '#d33',
				        confirmButtonText: 'Si'
				        
				     }).then((result) => {
				          if (result.value) {
				            window.location.href = "inicio.php";
				          }
				     });
				});

		    },error: function(){
		     	swal({
		         	title: "Error",
		         	text: "Se a producido un error",
		          	type: "error"
		        });
			} 
		});
	});
});