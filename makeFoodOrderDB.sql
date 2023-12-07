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


create table orders (
    id int auto_increment,
    firstname varchar(30),
    surname varchar(30),
    adressLine1 varchar(30),
    adressLine2 varchar(30),
    order_date timestamp default current_timestamp,
    mains_id int,
    desserts_id int,
    drinks_id int,
    foreign key (mains_id) references MainsMenu(id),
    foreign key (desserts_id) references DessertMenu(id),
    foreign key (drinks_id) references DrinksMenu(id),
    primary key(id)
);