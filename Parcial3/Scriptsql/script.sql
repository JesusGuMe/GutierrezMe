create database j19100195;
use j19100195;

create table fmateria 
(
    idClave SMALLINT, 
    Titulo varchar(30),
    carrera varchar(30),
    nomEscuela varchar(50),
    ciudad varchar(30),
    estado varchar(30),
    pais varchar(20),
    semestre SMALLINT,
    grupos smallint,
    alumnos smallint,
    PRIMARY KEY(idClave)
);

insert into fmateria (idClave, Titulo, carrera, nomEscuela, ciudad, estado, pais, semestre, grupos, alumnos)
VALUES ('1', 'Programación Web', 'Ing. Sistemas Computacionales', 'TECNM CAMPUS NUEVO LAREDO', 'Nuevo Laredo', 'Tamaulipas', 'Mexico', '6', '2', '25');
insert into fmateria (idClave, Titulo, carrera, nomEscuela, ciudad, estado, pais, semestre, grupos, alumnos)
VALUES ('2', 'Fundamentos de Programación', 'Ing. Sistemas Computacionales', 'TECNM CAMPUS NUEVO LAREDO', 'Nuevo Laredo', 'Tamaulipas', 'Mexico', '1', '3', '40');
insert into fmateria (idClave, Titulo, carrera, nomEscuela, ciudad, estado, pais, semestre, grupos, alumnos)
VALUES ('3', 'Mantenimiento de Computadoras', 'Ing. Electronica', 'TECNM CAMPUS NUEVO LAREDO', 'Nuevo Laredo', 'Tamaulipas', 'Mexico', '3', '4', '15');
insert into fmateria (idClave, Titulo, carrera, nomEscuela, ciudad, estado, pais, semestre, grupos, alumnos)
VALUES ('4', 'Taller de Administración 1', 'Administración', 'TECNM CAMPUS MONTERREY', 'Monterrey', 'Nuevo Leon', 'Mexico', '5', '5', '20');
insert into fmateria (idClave, Titulo, carrera, nomEscuela, ciudad, estado, pais, semestre, grupos, alumnos)
VALUES ('5', 'Internet de las Cosas', 'Ing. Mecatronica', 'TECNM CAMPUS SALTILLO', 'Saltillo', 'Coahuila', 'Mexico', '8', '1', '45');
