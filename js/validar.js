//Validacion con Ajax
$(document).ready(function(){
	$("#login-form").bind("submit",function(){
		$("#modal").css("display","none");
		$.ajax({
			url: $(this).attr("action"),
			type: $(this).attr("method"),
			data: $(this).serialize(),
			success:function(response){

				if (response.estado == "true") {
					swal({
						title: "Aviso",
  						text: "Acceso correcto",
  						icon: "success", 
					},function(){
						window.location.href = "inicio.php";
					});
				}else{
					swal("Aviso", "Usuario/Contraseña incorrectos", "error");
				}
			},
			error:function(){
				swal("Aviso", "Ha surgido un problema", "error");
			},
			
		});

		return false;
	});
});




