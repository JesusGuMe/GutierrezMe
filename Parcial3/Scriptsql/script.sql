create database j19100195;
use j19100195;

create table fmateria 
(
    Titulo varchar(30), 
    idClave varchar(10),
    carrera varchar(30),
    nomEscuela varchar(50),
    Tipo VARCHAR(10),
    ciudad varchar(30),
    estado varchar(30),
    pais varchar(20),
    semestre SMALLINT,
    grupos smallint,
    alumnos smallint,
    PRIMARY KEY(idClave)
);

insert into fmateria (Titulo, idClave, carrera, nomEscuela, Tipo, ciudad, estado, pais, semestre, grupos, alumnos)
VALUES ('Programación Web', 'SCD1025', 'Ing. Sistemas Computacionales', 'TECNM CAMPUS NUEVO LAREDO', 'Publica', 'Nuevo Laredo', 'Tamaulipas', '6to', '2', '25');

insert into fmateria (Titulo, idClave, carrera, nomEscuela, Tipo, ciudad, estado, pais, semestre, grupos, alumnos)
VALUES ('Fundamentos de Programación', 'SCC2022', 'Ing. Sistemas Computacionales', 'TECNM CAMPUS NUEVO LAREDO', 'Publica', 'Nuevo Laredo', 'Tamaulipas', '1ro', '3', '40');

insert into fmateria (Titulo, idClave, carrera, nomEscuela, Tipo, ciudad, estado, pais, semestre, grupos, alumnos)
VALUES ('Mantenimiento de Computadoras', 'ACB2011', 'Ing. Electronica', 'TECNM CAMPUS NUEVO LAREDO', 'Publica', 'Nuevo Laredo', 'Tamaulipas', '3ro', '4', '15');

insert into fmateria (Titulo, idClave, carrera, nomEscuela, Tipo, ciudad, estado, pais, semestre, grupos, alumnos)
VALUES ('Taller de Administración 1', 'BBD2445', 'Ing. Administración', 'TECNM CAMPUS MONTERREY', 'Privada', 'Monterrey', 'Nuevo Leon', '5to', '5', '20');

insert into fmateria (Titulo, idClave, carrera, nomEscuela, Tipo, ciudad, estado, pais, semestre, grupos, alumnos)
VALUES ('Internet de las Cosas', 'TCD5002', 'Ing. Mecatronica', 'TECNM CAMPUS SALTILLO', 'Publica', 'Saltillo', 'Coahuila', '8vo', '1', '45');