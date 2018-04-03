
CREATE TABLE admin_tbl (
	name varchar(50) NOT NULL,
	birthday date,
	email varchar(50) NOT NULL,
	password varchar(50) NOT NULL
);

CREATE TABLE prod_tbl (
	name varchar(50) NOT NULL,
	proddesc varchar(255) NOT NULL,
	price int NOT NULL,
	stock int NOT NULL,
	pic varchar NOT NULL
);