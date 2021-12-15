create database db_stayoike;

use db_stayoike;

create table txt_visitante(
nome_vis varchar (50) not null,
emai_vis varchar (100) not null,
mensagem_vis varchar (500) not null
);




CREATE USER 'db_stayoike'@'localhost' IDENTIFIED WITH mysql_native_password BY 'forcabrilhante';
GRANT ALL PRIVILEGES ON db_stayoike.* TO 'db_stayoike'@'localhost' WITH GRANT OPTION;

select * from txt_visitante;