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
)