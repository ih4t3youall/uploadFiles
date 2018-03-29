use uploadFiles;
CREATE TABLE obra (
	id_obra MEDIUMINT NOT NULL AUTO_INCREMENT,
	antecedentes varchar(5000),
	texto varchar(5000),
	obra varchar (500),
	lugar varchar (500),
	planta varchar (500),
	cliente varchar (500),
	anio Date,
	desc_tar_realiz varchar(5000),
	PRIMARY KEY(id_obra)
);

CREATE TABLE images(
	id_images MEDIUMINT NOT NULL AUTO_INCREMENT,
	url varchar(5000),
	texto varchar(1500),
	id_obra MEDIUMINT not null,
	PRIMARY KEY (id_images),
	FOREIGN KEY (id_obra) REFERENCES obra(id_obra)
);


ALTER TABLE `images` CHANGE `texto` `textoImagen` varchar(5000);

CREATE TABLE herramientas(

	id_herramienta MEDIUMINT NOT NULL AUTO_INCREMENT,
	nombre varchar(5000),
	textoHerramienta varchar(5000),
	segundoTexto varchar(5000),
	url varchar(5000),
    vehiculo varchar(10),
PRIMARY KEY (id_herramienta)
);


CREATE TABLE cv (
  id  MEDIUMINT NOT NULL AUTO_INCREMENT,
  nombre varchar(255) NOT NULL,
  apellido varchar(255) NOT NULL,
  url varchar(500) NOT NULL,
  telefono int(20) NOT NULL,
  email varchar(255) NOT NULL,
	PRIMARY KEY (id)
);

