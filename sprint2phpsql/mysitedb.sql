drop database if EXISTS mysitedb;
create database mysitedb;
USE mysitedb;

create table tusuario(
    id_usuario int primary key auto_increment,
    nombre varchar(50),
    apellidos varchar(100),
    email varchar(200) unique,
    contraseña varchar(200)
);
create table tpelicula(
    id_pelicula int primary key auto_increment,
    nombre varchar(50),
    url_imagen varchar(150),
    publicaación varchar(150)
);
create table tcomentario(
    id_comentario int primary key auto_increment,
    comentario varchar(50),
    id_usuario int,
    id_pelicula int,
    fecha datetime
);
ALTER TABLE tcomentario add constraint fk_id_usuario FOREIGN KEY(id_usuario) REFERENCES tusuario(id_usuario);
ALTER TABLE tcomentario add constraint fk_id_pelicula FOREIGN KEY(id_pelicula) REFERENCES tpelicula(id_pelicula);


insert into tusuario values("0","Nombre1", "Apellido1", "email1", "1234");
insert into tusuario values("0","Nombre2", "Apellido2", "email2", "1234");
insert into tusuario values("0","Nombre3", "Apellido3", "email3", "1234");
insert into tusuario values("0","Nombre4", "Apellido4", "email4", "1234");
insert into tusuario values("0","Nombre5", "Apellido5", "email5", "1234");

insert into tpelicula values("0", "Interestellar", "https://m.media-amazon.com/images/I/A1JVqNMI7UL._SL1500_.jpg","Estreno año1");
insert into tpelicula values("0", "Minions", "https://cineslys.reservaentradas.com/cineslys/obj/LCinesD_dat/eventos/JPG0021p.jpg","Estreno año2");
insert into tpelicula values("0", "Origen", "https://lamadraza.ugr.es/wp-content/uploads/2018/11/origen-1.jpg","Estreno año3");
insert into tpelicula values("0", "Avatar", "https://www.mubis.es/media/covers/1090/1124/avatar-edicion-extendida-coleccionistas-portada-original.jpg","Estreno año4");
insert into tpelicula values("0", "Tadeo Jones 3", "https://m.media-amazon.com/images/I/91r2TAaV0tL.jpg","Estreno año5");

insert into tcomentario (id_comentario, comentario) values("0"," comentario1");
insert into tcomentario (id_comentario, comentario) values("0", "comentario2");
insert into tcomentario (id_comentario, comentario) values("0", "comentario3");
insert into tcomentario (id_comentario, comentario) values("0", "comentario4");
insert into tcomentario (id_comentario, comentario) values("0", "comentario5");
UPDATE `tcomentario` SET `id_usuario` = '1', `id_pelicula` = '1' WHERE `tcomentario`.`id_comentario` = 1; UPDATE `tcomentario` SET `id_usuario` = '2', `id_pelicula` = '2' WHERE `tcomentario`.`id_comentario` = 2; UPDATE `tcomentario` SET `id_usuario` = '3', `id_pelicula` = '3' WHERE `tcomentario`.`id_comentario` = 3; UPDATE `tcomentario` SET `id_usuario` = '4', `id_pelicula` = '4' WHERE `tcomentario`.`id_comentario` = 4; UPDATE `tcomentario` SET `id_usuario` = '5', `id_pelicula` = '5' WHERE `tcomentario`.`id_comentario` = 5;