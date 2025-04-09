drop database if exists msgboard;
create database msgboard;
use msgboard;
drop table if exists account;
create table account (
		idno int primary key auto_increment,
		name varchar(64) not null,
		pass varchat(256) not null
);

