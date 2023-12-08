create database dentist;
use dentist;
create table appointments (
id int auto_increment,
firstname varchar(30),
surname varchar(30),
dateofbirth date,
email varchar(30),
phonenumber int,
medicalcard varchar(30),
apointmentdate date,
primary key(id)
);

insert into appointments(firstname,surname,dateofbirth,email,phonenumber,medicalcard,apointmentdate)
VALUES ('joe', 'bloggs', '2002-01-01', 'joebloggs@gmail.com', '085222222', 'yes', '2023-11-11');