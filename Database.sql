CREATE TABLE USERS (
id int AUTO_Increment,
name varchar (255) not null,
mail varchar (255) not null,
password varchar(255) not null,
CONSTRAINT idPK PRIMARY KEY (idUser));


CREATE TABLE Articles(
id int AUTO_Increment,
title varchar(255) NOT NULL,
published.at datetime NOT NULL,
picture varchar(255) NULL,
content text NOT NULL,
user_id int,
constraint articlePK primary key id,
constraint userFK Foreign key (userid) references users(id));