CREATE DATABASE IF NOT EXISTS unitec;
USE unitec;

CREATE TABLE IF NOT EXISTS users(
    id          int(255) auto_increment not null,
    name      varchar(100),
    a_paterno   varchar(100),
    a_materno   varchar(100),
    genero      varchar(100),
    edad        int(255),
    e_civil     varchar(100),
    email       varchar(100),
    password    varchar(255),        
    n_interes   varchar(255),
    created_at  datetime,
    updated_at  datetime,
    remember_token varchar(255),
    PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS ecivil(
    id          int(255) auto_increment not null,
    estado      varchar(100),
    PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO ecivil VALUES (NULL,'Soltero');
INSERT INTO ecivil VALUES (NULL,'Casado');
INSERT INTO ecivil VALUES (NULL,'Unión libre');

CREATE TABLE IF NOT EXISTS genero(
    id          int(255) auto_increment not null,
    genero      varchar(100),
    PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO genero VALUES (NULL,'Masculino');
INSERT INTO genero VALUES (NULL,'Femenino');

CREATE TABLE IF NOT EXISTS n_interes(
    id          int(255) auto_increment not null,
    interes     varchar(255),
    PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO n_interes VALUES (NULL,'Preparatoria');
INSERT INTO n_interes VALUES (NULL,'Licenciatura');
INSERT INTO n_interes VALUES (NULL,'Posgrado');

CREATE TABLE IF NOT EXISTS sub_interes(
    id          int(255) auto_increment not null,
    id_interes  int(255),    
    sinteres    varchar(255),
    PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO sub_interes VALUES (NULL,'1','Preparatoria');
INSERT INTO sub_interes VALUES (NULL,'2','Lic. En Derecho');
INSERT INTO sub_interes VALUES (NULL,'2','Lic. En Finanzas');
INSERT INTO sub_interes VALUES (NULL,'3','Mtria. Admon. De Negocios');
INSERT INTO sub_interes VALUES (NULL,'3','Mtria. Direccion de proyectos');