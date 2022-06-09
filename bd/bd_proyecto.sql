/**************** CREAR LA BASE DE DATOS ****************/
DROP DATABASE IF EXISTS practifp;
CREATE DATABASE practifp;
USE practifp;

/* Creacion tabla centros_educativos */
DROP TABLE IF EXISTS centros_educativos;
CREATE TABLE centros_educativos (
    id_centro int(6) unsigned NOT NULL AUTO_INCREMENT,
    cod_centro int(8),
    nombre varchar(30),
    localidad varchar(30),
    municipio varchar(30),
    cod_postal int(5),
    direccion varchar(50),
    telefono int(9),
    mail varchar(80),
    fax int(9),
    web varchar(200),
    descripcion varchar(200),    
    ultima_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT pk_id_centro PRIMARY KEY(id_centro)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Creacion tabla departamentos */
DROP TABLE IF EXISTS departamentos;
CREATE TABLE departamentos (
    id_departamento int(6) unsigned NOT NULL AUTO_INCREMENT,
    id_centro int(6) unsigned,
    cod_departamento int(8),
    nombre varchar(50),
    especialidad varchar(50),
    telefono int(9),
    mail varchar(80),
    fax int(9),
    descripcion varchar(200),    
    ultima_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT pk_id_departamento PRIMARY KEY(id_departamento),
    CONSTRAINT fk_id_centro FOREIGN KEY(id_centro) REFERENCES centros_educativos(id_centro)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Creacion tabla grados */
DROP TABLE IF EXISTS grados;
CREATE TABLE grados (
    id_grado int(6) unsigned NOT NULL AUTO_INCREMENT,
    nombre varchar(50),
    ultima_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT pk_id_grado PRIMARY KEY(id_grado)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Creacion tabla especialidades */
DROP TABLE IF EXISTS especialidades;
CREATE TABLE especialidades (
    id_especialidad int(6) unsigned NOT NULL AUTO_INCREMENT,
    id_grado int(6) unsigned,
    nombre varchar(50),
    descripcion varchar(200),
    ultima_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT pk_id_especialidad PRIMARY KEY(id_especialidad),
    CONSTRAINT fk_id_grado FOREIGN KEY(id_grado) REFERENCES grados(id_grado)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Creacion tabla estudios */
DROP TABLE IF EXISTS estudios;
CREATE TABLE estudios (
    id_estudio int(6) unsigned NOT NULL AUTO_INCREMENT,
    id_especialidad int(6) unsigned,
    id_departamento int(6) unsigned,
    nombre varchar(50),
    duracionPracticas int(3),
    DuraciónTotal int(4),
    duracionLectivas int(4),
    anosLectivos int(1),
    fechaIncioPracticas date ,
    ultima_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT pk_id_estudio PRIMARY KEY(id_estudio),
    CONSTRAINT fk_id_departamento FOREIGN KEY(id_departamento) REFERENCES departamentos(id_departamento),
    CONSTRAINT fk_id_especialidad FOREIGN KEY(id_especialidad) REFERENCES especialidades(id_especialidad)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Creacion tabla empresas */
DROP TABLE IF EXISTS empresas;
CREATE TABLE empresas (
    id_empresa int(6) unsigned NOT NULL AUTO_INCREMENT,
    CIF_NIF char(10),
    usuario varchar(10),
    contrasena varchar(100),
    nombre varchar(50),
    categoria varchar(30),
    tipoIndustria varchar(30),
    nombreContacto varchar(50),
    apellidoContacto varchar(50),
    posicionContacto varchar(30),
    localidad varchar(30),
    municipio varchar(30),
    cod_postal int(5),
    direccion varchar(50),
    telefono int(12),
    movil int(12),
    mail varchar(80),
    fax int(9),
    web varchar(200),
    informacion varchar(200),
    numEmpleados int(9),
    confirmado char(1) DEFAULT 'n',
    ultima_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT pk_id_empresa PRIMARY KEY(id_empresa)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Creacion tabla convenios */
DROP TABLE IF EXISTS convenios;
CREATE TABLE convenios (
    id_empresa int(8) unsigned,
    id_centro int(6) unsigned,
    convenio char(1) NOT NULL,
    ultima_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT fk_id_empresa FOREIGN KEY(id_empresa) REFERENCES empresas(id_empresa),
    CONSTRAINT fk_id_centro_convenios FOREIGN KEY(id_centro) REFERENCES centros_educativos(id_centro)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


/* Creacion tabla estudiantes */
DROP TABLE IF EXISTS estudiantes;
CREATE TABLE estudiantes (
    id_estudiante int(8) unsigned NOT NULL AUTO_INCREMENT,
    id_estudio int(6),
    centro int(6),
    usuario varchar(10),
    contrasena varchar(100),
    dni varchar(10),
    nombre varchar(30),
    apellidos varchar(50),
    fechaNacimiento date,
    localidad varchar(30),
    municipio varchar(30),
    codPostal int(5),
    direccion varchar(50),
    telefono int(12),
    movil int(12),
    mail varchar(80),
    confirmado char(1) DEFAULT 'n',
    descripcion varchar(400),

    CONSTRAINT pk_id_estudiante PRIMARY KEY(id_estudiante)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Creacion tabla ofertas */
DROP TABLE IF EXISTS ofertas;
CREATE TABLE ofertas (
    id_oferta int(6) unsigned NOT NULL AUTO_INCREMENT,
    id_empresa int(6) unsigned,
    fecha date NOT NULL,
    direccion varchar(100),
    municipio varchar(50),
    posicion varchar(30),
    mail varchar(80),
    departamento varchar(30),
    habilidad varchar(300),
    descripcion varchar(200),
    tipoIndustria varchar(50),
    ultima_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT pk_id_oferta PRIMARY KEY(id_oferta),
    CONSTRAINT fk_id_empresa_of FOREIGN KEY(id_empresa) REFERENCES empresas(id_empresa) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Creacion tabla demandas */
DROP TABLE IF EXISTS demandas;
CREATE TABLE demandas (
    id_demanda int(6) unsigned NOT NULL AUTO_INCREMENT,
    id_oferta int(6) unsigned,
    id_estudiante int(6) unsigned,
    ultima_actualizacion TIMESTAMP,

    CONSTRAINT pk_id_demanda PRIMARY KEY(id_demanda),
    CONSTRAINT fk_id_oferta_demandas FOREIGN KEY(id_oferta) REFERENCES ofertas(id_oferta),
    CONSTRAINT fk_id_estudiante_demandas FOREIGN KEY(id_estudiante) REFERENCES estudiantes(id_estudiante) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*creacion tabla admin */
DROP TABLE IF EXISTS administradores;
CREATE TABLE administradores (
    id_admin int(6) unsigned NOT NULL AUTO_INCREMENT,
    usuario varchar(10),
    contrasena varchar(100),
    nombre varchar(30),
    cargo varchar(30),

    CONSTRAINT pk_id_centro PRIMARY KEY(id_admin)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

