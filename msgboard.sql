create datobase msgboard;
use msgboard;
create table account (
		idno int primary key auto_increment;
		name varchar(32) not null
);
insert into account set name="user";
