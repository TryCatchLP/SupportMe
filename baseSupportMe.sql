create database supportme;

use supportme;

create table hueca(
	id int auto_increment,
    name VARCHAR(150),
	descrip VARCHAR(500),
	lat DOUBLE,
	lng DOUBLE,
	address VARCHAR(200),
	photo VARCHAR(300),
	phone  VARCHAR(15),
	stars INTEGER,
	ratings INTEGER,
    primary key(id)
);

create table users(
	id int auto_increment,
	username VARCHAR(150),
	password VARCHAR(150),
	name VARCHAR(150),
	lastname VARCHAR(150),
	email VARCHAR(150),
	address VARCHAR(200),
	phone int,
    primary key (id)
);

create table ratings(
	id int auto_increment,
    stars int,
    id_user int,
    id_hueca int,
    comentario varchar(500),
    primary key (id),
    foreign key (id_hueca) references hueca(id),
    foreign key (id_user) references users(id)
);

create table owners(
	id int auto_increment,
    id_user int,
    id_hueca int unique,
    primary key (id),
    foreign key (id_hueca) references hueca(id),
    foreign key (id_user) references users(id)
);

create table menuses(
	id int auto_increment,
    title varchar(150),
    ingredients varchar(500),
    primary key (id)
);

create table huecasmenuses (
	id int auto_increment,
    id_hueca int,
    id_menu int,
    price double,
    primary key (id),
    foreign key (id_hueca) references hueca(id),
    foreign key (id_menu) references menu(id)
);

create table kind(
	id int auto_increment,
    type varchar(150),
    details varchar(500),
    primary key (id)
);

create table kindsmenuses (
	id int auto_increment,
    id_types_plato int,
    id_menu int,
    primary key (id),
    foreign key (id_types_plato) references types_plate(id),
    foreign key (id_menu) references menu(id)
);