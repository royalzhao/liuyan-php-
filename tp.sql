
drop database if exists message;
create database message  default character set utf8;
use message;


CREATE TABLE message (
id int(11) not null primary key AUTO_INCREMENT,
user VARCHAR(20) not null ,
title VARCHAR(50) not null ,
content tinytext not null ,
lastdate timestamp not null
) ;
insert into message values(1,"赵帅","很帅","是的","2017-04-27");


