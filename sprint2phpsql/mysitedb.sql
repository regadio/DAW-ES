create database mysitedb;
USE mysitedb;

create table tUsuarios{
    id int primary key auto_increment,
    nombre varchar(50),
    apellidos varchar(100),
    email varchar(200) unique,
    contraseña varchar(200)
}
create table tPeliculas{
    id int primary key auto_increment,
    nombre varchar(50),
    url_imagen varchar(50),
}
create table tComentarios{
    id int primary key auto_increment,
    comentario varchar(50),
    usuario_id int foreign key,
    pelicula_id int not null foreign key
}
