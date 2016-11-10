PRAGMA foreign_keys = ON;


drop table if exists account;
drop table if exists restaurant;
drop table if exists functionTime;
drop table if exists review;
drop table if exists reply;


CREATE TABLE account (
	id_account VARCHAR PRIMARY KEY,					
	name VARCHAR NOT NULL,
	pass VARCHAR NOT NULL,
	type VARCHAR NOT NULL
);


CREATE TABLE restaurant (
	id_restaurant INTEGER PRIMARY KEY AUTOINCREMENT,
	id_owner INTEGER REFERENCES account(id_account)
	id_functionTime INTEGER REFERENCES functionTime(id_functionTime),
	name VARCHAR NOT NULL,
	address VARCHAR NOT NULL,
	description VARCHAR,
	stars REAL 
);

CREATE TABLE functionTime (
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


CREATE TABLE review (
	id_review INTEGER PRIMARY KEY AUTOINCREMENT,
	id_restaurant INTEGER REFERENCES restaurant(id_restaurant),
	id_reviewer INTEGER REFERENCES account(id_account),
	comment VARCHAR,
	score INTEGER NOT NULL
);


CREATE TABLE reply (
	id_reply INTEGER PRIMARY KEY AUTOINCREMENT,
	id_review INTEGER REFERENCES review(id_review)
	comment VARCHAR NOT NULL,	
);
	
	CREATE TABLE photo (
	id_photo INTEGER PRIMARY KEY AUTOINCREMENT,
	id_restaurant INTEGER REFERENCES restaurant(id_restaurant),
	path VARCHAR NOT NULL
);
