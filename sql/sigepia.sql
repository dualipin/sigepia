-- Active: 1743223639678@@127.0.0.1@3306@sigepia
CREATE TABLE IF EXISTS bitacoras (
    clv VARCHAR(25) NOT NULL COMMENT 'Clave primaria de la tabla bitacoras',
    operacion VARCHAR(50) NOT NULL DEFAULT 'desconocido' COMMENT 'Tipo de operación realizada',
    fecha DATE DEFAULT CURRENT_DATE COMMENT 'Fecha de la operación',
    hora TIME DEFAULT CURRENT_TIME COMMENT 'Hora de la operación',
    clvpr VARCHAR(25) NOT NULL COMMENT 'Clave primaria de la tabla prueba'
);

CREATE TABLE IF NOT EXISTS pruebas (
    clv VARCHAR(50) nom VARCHAR(50) NOT NULL COMMENT 'Nombre de la prueba',
    clval VARCHAR(25) NOT NULL COMMENT 'Clave primaria de la tabla alumnos',
    clvas VARCHAR(25) NOT NULL COMMENT 'Clave primaria de la tabla asignaturas',
    clvdo VARCHAR(25) NOT NULL COMMENT 'Clave primaria de la tabla docentes',
    clvmt VARCHAR(25) NOT NULL COMMENT 'Clave primaria de la tabla materiales',
    clvin VARCHAR(25) NOT NULL COMMENT 'Clave primaria de la tabla insumos',
    clvpr VARCHAR(25) NOT NULL COMMENT 'Clave primaria de la tabla procedimientos',
    clvrs VARCHAR(25) NOT NULL COMMENT 'Clave primaria de la tabla resultados',
    fecha DATE DEFAULT CURRENT_DATE COMMENT 'Fecha de la prueba'
);

CREATE TABLE IF NOT EXISTS resultados (
    clv VARCHAR(25) NOT NULL COMMENT 'Clave primaria de la tabla resultados',
    res VARCHAR(50) NOT NULL COMMENT 'Resultado de la prueba',
    obs VARCHAR(50) NOT NULL COMMENT 'Observaciones del resultado',
    fecha DATE DEFAULT CURRENT_DATE COMMENT 'Fecha del resultado' img VARCHAR(255) NOT NULL COMMENT 'Imagen del resultado',
);

CREATE TABLE IF NOT EXISTS usuarios (
    usr VARCHAR(30) NOT NULL UNIQUE COMMENT 'Nombre de usuario',
    cont VARCHAR(255) NOT NULL COMMENT 'Contraseña del usuario',
    tipo VARCHAR(25) NOT NULL COMMENT 'Tipo de usuario (admin, docente, alumno)'
);

CREATE TABLE IF NOT EXISTS alumnos (
    rfc VARCHAR(25) PRIMARY KEY COMMENT 'Clave primaria de la tabla alumnos',
    matricula VARCHAR(25) UNIQUE NOT NULL COMMENT 'Matrícula del alumno',
    nom VARCHAR(50) NOT NULL COMMENT 'Nombre del alumno',
    ape VARCHAR(50) NOT NULL COMMENT 'Apellido del alumno',
    edad INT NOT NULL COMMENT 'Edad del alumno',
    sexo VARCHAR(10) NOT NULL COMMENT 'Sexo del alumno',
    dir VARCHAR(255) NOT NULL COMMENT 'Dirección del alumno',
    tel VARCHAR(15) NOT NULL COMMENT 'Teléfono del alumno'
);

CREATE TABLE IF NOT EXISTS materiales (
    clv VARCHAR(25) NOT NULL COMMENT 'Clave primaria de la tabla materiales',
    nom VARCHAR(50) NOT NULL COMMENT 'Nombre del material',
    tipo VARCHAR(50) NOT NULL COMMENT 'Tipo de material',
    cantidad FLOAT NOT NULL COMMENT 'Cantidad del material',
    um VARCHAR(50) NOT NULL COMMENT 'Unidad de medida del material',
    prc FLOAT NOT NULL COMMENT 'Precio del material'
);

CREATE TABLE IF NOT EXISTS herramientas (
    clv VARCHAR(25) NOT NULL COMMENT 'Clave primaria de la tabla herramientas',
    nom VARCHAR(50) NOT NULL COMMENT 'Nombre de la herramienta',
    tipo VARCHAR(50) NOT NULL COMMENT 'Clave primaria de la tabla materiales'
);

CREATE TABLE IF NOT EXISTS insumos (
    clv VARCHAR(25) NOT NULL COMMENT 'Clave primaria de la tabla insumos',
    nom VARCHAR(50) NOT NULL COMMENT 'Nombre del insumo',
    um VARCHAR(50) NOT NULL COMMENT 'Unidad de medida del insumo',
    cantidad FLOAT NOT NULL COMMENT 'Cantidad del insumo',
    nt VARCHAR(50) NOT NULL COMMENT 'Notas',
    prc FLOAT NOT NULL COMMENT 'Precio del insumo'
);

CREATE TABLE IF NOT EXISTS noticias (
    titulo VARCHAR(50) NOT NULL COMMENT 'Título de la noticia',
    contenido TEXT NOT NULL COMMENT 'Contenido de la noticia',
    fecha DATE DEFAULT CURRENT_DATE COMMENT 'Fecha de la noticia'
);