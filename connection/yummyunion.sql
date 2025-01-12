create database yummyunion;
use yummyunion;

create table users(userid INT primary key auto_increment,uname varchar(255),mail varchar(255),pswd varchar(255));

create table recepies(recid INT primary key auto_increment,rname varchar(255),ingredients text,instruction text,category varchar(255),recepieimg varchar(255));

insert into recepies (rname,ingredients,instruction,category) values('potato','potato','Thambanna','vegan'),('cake','Pour','puchchnw','Meat');

