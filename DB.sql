create database MathClass;
use MathClass;

create table usuarios(
	idUsuarios int not null AUTO_INCREMENT,
	matriculaUsuarios varchar(10),
	nombre varchar(50),
	apellidoPaterno varchar(50),
	apellidoMaterno varchar(50),
	usuario varchar(30),
	password varchar(50),
	tipoUsuario varchar(50),
	fechaRegistro date,
	foto varchar(50),
	claveMateria int,
	PRIMARY KEY(idUsuarios)
);

create table materias(
	idMateria int AUTO_INCREMENT,
	claveMateria int,
	nombreMateria varchar(50),
	idUsuarios int,
	PRIMARY KEY(idMateria),
	FOREIGN KEY(idUsuarios) REFERENCES usuarios(idUsuarios)
);

create table lecciones(
	idLeccion int not null AUTO_INCREMENT,
	nLeccion int,
	numTema int,
	contenido varchar(200),
	ejercio varchar(100),
	respuestaTema varchar(50),
	idMateria int,
	PRIMARY KEY(idLeccion),
	FOREIGN KEY(idMateria) REFERENCES materias(idMateria)
);
create table leccionesResueltas(
	idLeccionResuelta int not null AUTO_INCREMENT,
	nLeccion int,
	estado int,
	idMateria int,
	matriculaAlumno varchar(20),
	idLeccion int, PRIMARY KEY(idLeccionResuelta),
	FOREIGN KEY(idLeccion) REFERENCES lecciones(idLeccion)
);

create table examenes(
	folioExamen int not null AUTO_INCREMENT,
	profesor varchar(50),
	tiempo varchar(20),
	descripcion varchar(50),
	fechaPublicacion date,
	fechaCierre date,
	idLeccion int,
	PRIMARY KEY(folioExamen),
	FOREIGN KEY(idLeccion) REFERENCES lecciones(idLeccion)
);


create table examenesResueltos(
	folioExamenResuelto int not null  AUTO_INCREMENT,
	matricula varchar(10),
	respuesta varchar(20),
	nota int,
	fkExamenResuelto int,
	PRIMARY KEY(folioExamenResuelto)
);

create table examenes_examenesResueltos(
	idEx_ExRes int not null AUTO_INCREMENT,
	folioExamen int not null,
	idExamenResuelto int not null,
	PRIMARY KEY(idEx_ExRes),
	FOREIGN KEY (folioExamen) REFERENCES examenes(folioExamen),
	FOREIGN KEY (idExamenResuelto) REFERENCES examenesResueltos(folioExamenResuelto)
);

create table preguntas(
	idPregunta int  not null AUTO_INCREMENT,
	pregunta varchar(100),
	respuestaUno varchar(50),
	respuestaDos varchar(50),
	respuestaTres varchar(50),
	respuestaCuatro varchar(50),
	respuestaCorrecta int,
	folioExamen int,
	PRIMARY KEY(idPregunta),
	FOREIGN KEY (folioExamen) REFERENCES examenes(folioExamen)
);






/*
create table lecciones(

);

create table notas(

);
*/