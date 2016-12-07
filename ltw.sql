PRAGMA foreign_keys = ON;


drop table if exists Account;
drop table if exists Restaurant;
drop table if exists FunctionTime;
drop table if exists Review;
drop table if exists Reply;
drop table if exists Photo;
drop table if exists Category;
drop table if exists RestaurantFood;


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
	id_category VARCHAR REFERENCES Category(id_category),
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

CREATE TABLE Category (
	id_category VARCHAR PRIMARY KEY
);

CREATE TABLE RestaurantFood (
	id_restaurant_food INTEGER PRIMARY KEY,
	id_restaurant INTEGER REFERENCES Restaurant(id_restaurant),
	id_category VARCHAR REFERENCES Category(id_category)
);

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


INSERT INTO Account VALUES ('mario','Mario Fernandes','123','owner');
INSERT INTO Account VALUES ('catarina','Catarina Ramos','123','owner');
INSERT INTO Account VALUES ('telmo','Telmo Barros','123','owner');

INSERT INTO FunctionTime VALUES (1,'12:00','15:00',1,1,1,1,1,1,1);

INSERT INTO Restaurant VALUES (1,'mario',1,'Sushi','Sakurai Sushi Bar','testaddress','testdescription',5);
INSERT INTO Restaurant VALUES (2,'mario',1,'Fast Food','McDonalds','testaddress','testdescription',5);
INSERT INTO Restaurant VALUES (3,'mario',1,'Fast Food','Pizza Hut','testaddress','testdescription',5);
INSERT INTO Restaurant VALUES (4,'mario',1,'Portuguese','Abadia','testaddress','testdescription',5);
INSERT INTO Restaurant VALUES (5,'mario',1,'Sea Food','O Xarroco','testaddress','testdescription',5);


