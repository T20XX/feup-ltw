PRAGMA foreign_keys = ON;


drop table if exists Account;
drop table if exists Restaurant;
drop table if exists FunctionTime;
drop table if exists Review;
drop table if exists Reply;
drop table if exists Photo;


CREATE TABLE Account (
	id_account VARCHAR PRIMARY KEY,					
	name VARCHAR NOT NULL,
	pass VARCHAR NOT NULL,
	type VARCHAR NOT NULL
);


CREATE TABLE Restaurant (
	id_restaurant INTEGER PRIMARY KEY AUTOINCREMENT,
	id_owner INTEGER REFERENCES Account(id_account),
	id_functionTime INTEGER REFERENCES FunctionTime(id_functionTime),
	name VARCHAR NOT NULL,
	address VARCHAR NOT NULL,
	description VARCHAR,
	stars REAL 
);

CREATE TABLE FunctionTime (
	id_functionTime INTEGER PRIMARY KEY AUTOINCREMENT,
	open_time VARCHAR NOT NULL,
	close_time VARCHAR NOT NULL,
	monday BOOLEAN NOT NULL,
	tuesday BOOLEAN NOT NULL,
	wednesday BOOLEAN NOT NULL,
	thursday BOOLEAN NOT NULL,
	friday BOOLEAN NOT NULL,
	saturday BOOLEAN NOT NULL,
	sunday BOOLEAN NOT NULL
);


CREATE TABLE Review (
	id_review INTEGER PRIMARY KEY AUTOINCREMENT,
	id_restaurant INTEGER REFERENCES Restaurant(id_restaurant),
	id_reviewer INTEGER REFERENCES Account(id_account),
	comment VARCHAR,
	score INTEGER NOT NULL
);


CREATE TABLE Reply (
	id_reply INTEGER PRIMARY KEY AUTOINCREMENT,
	id_review INTEGER REFERENCES Review(id_review),
	comment VARCHAR NOT NULL	
);
	
CREATE TABLE Photo (
	id_photo INTEGER PRIMARY KEY AUTOINCREMENT,
	id_restaurant INTEGER REFERENCES Restaurant(id_restaurant),
	path VARCHAR NOT NULL
);

CREATE TABLE Type {
id_restaurant INTEGER PRIMARY KEY Restaurant(id_restaurant),
id_category VARCHAR PRIMARY KEY Category(id_category)
}

CREATE TABLE Category {
id_category VARCHAR PRIMARY KEY
}


INSERT INTO Category VALUES ('Chinese');
INSERT INTO Category VALUES ('Sushi');
INSERT INTO Category VALUES ('Italian');
INSERT INTO Category VALUES ('French');
INSERT INTO Category VALUES ('Mexican');
INSERT INTO Category VALUES ('Indian');
INSERT INTO Category VALUES ('Fast Food');
INSERT INTO Category VALUES ('Snack Bar');
INSERT INTO Category VALUES ('Brazilian');
INSERT INTO Category VALUES ('Coffee Shop');
INSERT INTO Category VALUES ('Pastry Shop');
INSERT INTO Category VALUES ('Sea Food');

