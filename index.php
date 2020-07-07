<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>
		MathClass
	</title>

	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/footer.css">

	<!-- Jquery -->
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    
	<!-- FlexSlider -->
	<link rel = "stylesheet" href = "css/flexslider.css" type = "text/css">
	<script src = "js/jquery.flexslider.js"> </script>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- SweetAlert -->
	<link rel="stylesheet" href="css/sweetalert.css">
	<script src="js/sweetalert.min.js"></script>

</head>
<body>
	<header>
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu"><img src="img/icono-menu.png" ></label>
		<nav>
			<ul>
				<li><a id="abrir">Ingresar</a></li>
				<li><a href="#servicios">Servicios</a></li>
				<li><a href="#nosotros">Nosotros</a></li>
				<li><a href="#inicio">Inicio</a></li>
			</ul>	
		</nav>	
	</header>
	
	<section id="inicio">
		<div class = "flexslider">
		  <ul class = "slides">
		    <li>
		      <img src = "img/1.jpg" />
		      <div class="caption">Lorem ipsum dolor sit amet.</div>
		    </li>
		    <li>
		      <img src = "img/2.jpg" />
		      <div class="caption2">Lorem ipsum dolor sit amet.</div>
		    </li>
		    <li>
		      <img src = "img/3.jpg" />
		      <div class="caption3">Lorem ipsum dolor sit amet.</div>
		    </li>
		  </ul>
		</div>
	</section>
	
	<section id="nosotros">
		<div class="content">
			<h1>MathClass</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere a, assumenda? Vel sit rerum blanditiis cumque possimus voluptatum! Beatae minima, aperiam distinctio nobis recusandae itaque mollitia, deserunt at explicabo ducimus numquam vero quas est, aspernatur. Inventore a officia facere sint beatae deleniti eveniet animi distinctio, accusamus voluptas at ut ullam.</p>
		</div>
	</section>

	<section id="servicios">

		<h1 class="titulo">Servicios</h1>

		
		<div class="items">
			<img src="img/1.jpg">
				
			<div class="text-container" id="primero">
				<h1>Titulo</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, eligendi voluptatum molestias nisi quos ducimus facilis, laborum totam sequi distinctio consequatur, quibusdam neque, magni suscipit.</p>
			</div>
		</div>

		<div class="items">
			<img src="img/2.jpg">
				
			<div class="text-container">
				<h1>Titulo</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, eligendi voluptatum molestias nisi quos ducimus facilis, laborum totam sequi distinctio consequatur, quibusdam neque, magni suscipit.</p>
			</div>
		</div>

		<div class="items">
			<img src="img/3.jpg">
				
			<div class="text-container">
				<h1>Titulo</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, eligendi voluptatum molestias nisi quos ducimus facilis, laborum totam sequi distinctio consequatur, quibusdam neque, magni suscipit.</p>
			</div>
		</div>

		<div class="items">
			<img src="img/1.jpg">
				
			<div class="text-container" id="primero">
				<h1>Titulo</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, eligendi voluptatum molestias nisi quos ducimus facilis, laborum totam sequi distinctio consequatur, quibusdam neque, magni suscipit.</p>
			</div>
		</div>

		<div class="items">
			<img src="img/2.jpg">
				
			<div class="text-container">
				<h1>Titulo</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, eligendi voluptatum molestias nisi quos ducimus facilis, laborum totam sequi distinctio consequatur, quibusdam neque, magni suscipit.</p>
			</div>
		</div>

		<div class="items">
			<img src="img/3.jpg">
				
			<div class="text-container">
				<h1>Titulo</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, eligendi voluptatum molestias nisi quos ducimus facilis, laborum totam sequi distinctio consequatur, quibusdam neque, magni suscipit.</p>
			</div>
		</div>

	</section>

	<section id="inscripciones">
		<div class="content-img">
            <img src="img/1.jpg">
            
            <div class="content-txt">
                <h2>Alumnos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi quos consectetur est eligendi, sapiente quaerat cupiditate velit, sit voluptatum repellendus perspiciatis mollitia minus totam!</p>                
            </div>
            
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>
            
        </div>

        <div class="content-img">
            <img src="img/3.jpg">
            
            <div class="content-txt">
                <h2>Maestros</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi quos consectetur est eligendi, sapiente quaerat cupiditate velit, sit voluptatum repellendus perspiciatis mollitia minus totam!</p>                
            </div>
            
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>
            
        </div>

	</section>

	<?php include 'assets/footer.php'; ?>

	<!-- Formulario con ventana modal -->
	<div class="modal" id="modal">
			<div id="flex" class="flex">
				<div class="contenedor-modal">
					<div class="header-modal">
						<h2>Inicio Sesión</h2>
						<span class="close" id="close">&times;</span>
					</div>
					<div class="body-modal">
						<form action="validar.php" method="post" class="login-form" id="login-form">
							<input type="e-mail" class="controls" name="nombre" placeholder="Ingrese su usuario" required>
							<input type="password" class="controls" name="pw" placeholder="Ingrese su contraseña" required>
							<input type="submit" value="Ingresar" class="buttons">
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="js/index.js"></script>
		<script src="js/validar.js"></script>
</body>
</html>