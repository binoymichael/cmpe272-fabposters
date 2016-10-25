CREATE TABLE users (
	id int NOT NULL AUTO_INCREMENT,
	first_name varchar(255),
	last_name varchar(255),
	email varchar(255),
	home_phone varchar(20),
	cell_phone varchar(20),
	address varchar(255),
	role varchar(10),
	PRIMARY KEY (id)
);
