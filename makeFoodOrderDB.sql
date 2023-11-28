drop database if exists orderfood;
create database orderfood;
use orderfood;
create table foodorder (
    id int auto_increment,
    firstname varchar(30),
    surname varchar(30),
    bagsUnderTenKG int,
    bagsOverTenKG int,
    primary key(id)
);