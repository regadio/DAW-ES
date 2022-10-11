drop database if EXISTS mysitedb;
create database mysitedb;
USE mysitedb;

create table tUsuarios(
    id int primary key auto_increment,
    nombre varchar(50),
    apellidos varchar(100),
    email varchar(200) unique,
    contraseña varchar(200)
);
create table tPeliculas(
    id int primary key auto_increment,
    nombre varchar(50),
    url_imagen varchar(150)
);
create table tComentarios(
    id int primary key auto_increment,
    comentario varchar(50),
    usuario_id int,
    pelicula_id int ,
    FOREIGN key(usuario_id) REFERENCES tUsuarios (id),
    FOREIGN key(pelicula_id) REFERENCES tPeliculas (id)
   
);

insert into tUsuarios values("0","Nombre1", "Apellido1", "email1", "1234");
insert into tUsuarios values("0","Nombre2", "Apellido2", "email2", "1234");
insert into tUsuarios values("0","Nombre3", "Apellido3", "email3", "1234");
insert into tUsuarios values("0","Nombre4", "Apellido4", "email4", "1234");
insert into tUsuarios values("0","Nombre5", "Apellido5", "email5", "1234");

insert into tPeliculas values("0", "Interestellar", "https://m.media-amazon.com/images/I/A1JVqNMI7UL._SL1500_.jpg");
insert into tPeliculas values("0", "Minions", "https://cineslys.reservaentradas.com/cineslys/obj/LCinesD_dat/eventos/JPG0021p.jpg");
insert into tPeliculas values("0", "Origen", "https://lamadraza.ugr.es/wp-content/uploads/2018/11/origen-1.jpg");
insert into tPeliculas values("0", "Avatar", "https://www.mubis.es/media/covers/1090/1124/avatar-edicion-extendida-coleccionistas-portada-original.jpg");
insert into tPeliculas values("0", "Tadeo Jones 3", "https://pics.filmaffinity.com/Tadeo_Jones_3_La_tabla_esmeralda-509556908-large.jpg");

insert into tComentarios(id, comentario) values("0","comentario1");
insert into tComentarios(id, comentario) values("0","comentario2");
insert into tComentarios(id, comentario) values("0","comentario3");
insert into tComentarios(id, comentario) values("0","comentario4");
insert into tComentarios(id, comentario) values("0","comentario5");
