$(document).ready(function(){
  $.ajax({
			type: "POST",
      url: "datos/lecciones.php",
      dataType: "json",
      success: function(response){
        for(let i = 0; i < response.leccion.length; i++){
          $(".contenedor").append('<div class="leccion" estado="'+response.leccion[i].estado+'" id="'+response.leccion[i].nLeccion+'"><div class="numleccion">Leccion '+response.leccion[i].nLeccion+'</div><div class="titulo">'+response.leccion[i].titulo+'</div></div>');
				  if (response.leccion[i].estado ==  3) {
            $("#"+response.leccion[i].nLeccion).css("background-color", "#008F39");
          }
        }
      },error: function(){
        swal({
          title: "Error",
          text: "Se a producido un error",
          type: "error",
        });
      } 
  });

  //Cuando se selecciona una leccion verifica si esta esta disponible o no.
  $(document).on('click','.leccion',function(){
    if ($(this).attr("estado") == "1") {
      var id = $(this).attr("id");
      swal({
        title: "Aviso!",
        text: "¿Desea empezar la leccion?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si'
        
      }).then((result) => {
          if (result.value) {
            window.location.href = "resolverLeccion.php?id=" + id;
          }
      });
    }else if ($(this).attr("estado") == "2") {
      swal({
        title: "aviso",
        text: "Debes contestar una leccion previa para poder contestar esta lección ",
        type: "warning",
      });
    }else if($(this).attr("estado") == 3){
      swal({
        title: "aviso",
        text: "La leccion ya esta resuelta ",
        type: "warning",
      });
    }



  });



});


/*
//Evento que se ejecuta la hacer click en el objeto seleccionado
$("#numUno").click(function(){
});


swal({
			title: "Aviso",
  			text: "Cargando",
  			icon: "success", 
		},function(){
			window.location.href = "index.php";
		});

*/



