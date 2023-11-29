drop database if exists orderfood;
create database orderfood;
use orderfood;
create table foodorder (
    id int auto_increment,
    firstname varchar(30),
    surname varchar(30),
    adressLine1 varchar(30),
    adressLine2 varchar(30),
    primary key(id)
);