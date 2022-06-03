create database idstudio;

use idstudio;

create table servicio(
  servicio_id int auto_increment primary key,
  nombre varchar(50),
  precio int(5)
);

create table cita(
  cita_id int auto_increment primary key,
  nombre varchar(100),
  paterno varchar(100),
  materno varchar(100),
  email varchar(100),
  tel varchar(100),
  fecha_nac date,
  horario time
);

create table servicio_cita(
  servicio_cita_id int auto_increment primary key,
  servicio_id int,
  cita_id int,
  foreign key (servicio_id) references servicio(servicio_id),
  foreign key (cita_id) references cita(cita_id)
); 

