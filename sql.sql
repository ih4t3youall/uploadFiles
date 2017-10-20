CREATE TABLE obra (
	id_obra int NOT NULL AUTO_INCREMENT,
	antecedentes varchar(5000),
	texto varchar(5000),
	obra varchar (500),
	lugar varchar (500),
	planta varchar (500),
	cliente varchar (500),
	anio Date,
	desc_tar_realiz varchar(5000),
	PRIMARY KEY(id),
)


CREATE TABLE images(
	id_images NOT NULL AUTO_INCREMENT,
	url varchar(5000),
	texto varchar(1500)
	id_obra long not null,
	PRIMARY KEY (id_images),
	FOREIGN KEY (id_obra) REFERENCES obra(id_obra)
)

