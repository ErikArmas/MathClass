let modal = document.getElementById('modal');
let flex = document.getElementById('flex');
let abrir = document.getElementById('abrir');
let cerrar = document.getElementById('close');

abrir.addEventListener('click',function(){
	modal.style.display = 'block';
});

cerrar.addEventListener('click',function(){
	modal.style.display = 'none';
});

window.addEventListener('click',function(e){
	if (e.target == flex) {
		modal.style.display = 'none';
    }
});

window.onkeyup = compruebaTecla;
function compruebaTecla(){
    var e = window.event;
    var tecla = (document.all) ? e.keyCode : e.which;
    if(tecla == 27){
        modal.style.display = 'none';
    }
}

//Carga el Slider
$(window).load(function () {
    $ ('.flexslider').flexslider ();
 });