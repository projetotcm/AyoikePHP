create database db_stayoike;

use db_stayoike;

create table txt_visitante(
nome_vis varchar (50) not null,
emai_vis varchar (100) not null,
mensagem_vis varchar (500) not null
);
CREATE USER 'ayoike@localhost' IDENTIFIED WITH mysql_native_password BY 'forcabrilhante';
GRANT ALL PRIVILEGES ON db_stayoike.* TO 'ayoike@localhost' WITH GRANT OPTION;