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

CREATE TABLE movies (
	id int NOT NULL AUTO_INCREMENT,
	name varchar(20),
	url varchar(255),
	PRIMARY KEY (id)
);

INSERT INTO movies (name, url) VALUES ('gandalf', 'https://www.pinterest.com/pin/539446861588598686/');
INSERT INTO movies (name, url) VALUES ('interstellar', 'https://www.pinterest.com/pin/490048003182913908/');
INSERT INTO movies (name, url) VALUES ('inception', 'https://www.pinterest.com/pin/26951297740761051/');
INSERT INTO movies (name, url) VALUES ('gladiator', 'https://www.pinterest.com/pin/53761789271675875/');
INSERT INTO movies (name, url) VALUES ('forrest_gump', 'https://www.pinterest.com/pin/451626668852474865/');
INSERT INTO movies (name, url) VALUES ('one_ring', 'https://www.pinterest.com/pin/92534967320433985/');
INSERT INTO movies (name, url) VALUES ('the_martian', 'https://www.pinterest.com/pin/472596554628118915/');
INSERT INTO movies (name, url) VALUES ('the_avengers', 'https://www.pinterest.com/pin/384213411939372406/');
INSERT INTO movies (name, url) VALUES ('jaws', 'https://www.pinterest.com/pin/115827021642496768/');
INSERT INTO movies (name, url) VALUES ('shutter_island', 'https://www.pinterest.com/pin/144467100519605604/');
INSERT INTO movies (name, url) VALUES ('memento', 'https://www.pinterest.com/pin/12525705184866135/');
INSERT INTO movies (name, url) VALUES ('taxi_driver', 'https://www.pinterest.com/pin/404690716492318085/');
INSERT INTO movies (name, url) VALUES ('star_wars', 'https://www.pinterest.com/pin/87820261455853126/');
INSERT INTO movies (name, url) VALUES ('gravity', 'https://www.pinterest.com/pin/472596554628058669/');
INSERT INTO movies (name, url) VALUES ('batman', 'https://www.pinterest.com/pin/528961918705310922/');
INSERT INTO movies (name, url) VALUES ('up', 'https://www.pinterest.com/pin/314196511480411163/');
