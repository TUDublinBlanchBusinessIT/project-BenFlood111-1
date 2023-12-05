drop database if exists orderfood;
create database orderfood;
use orderfood;


create table MainsMenu (
    id int auto_increment,
    Item varchar(30),
    Price integer(10),
    primary key(id)
);

create table DessertMenu (
    id int auto_increment,
    Item varchar(30),
    Price integer(10),
    primary key(id)
);

create table DrinksMenu (
    id int auto_increment,
    Item varchar(30),
    Price integer(10),
    primary key(id)
);


