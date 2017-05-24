CREATE TABLE empresa(
    cif varchar(9) NOT NULL,
    nombre varchar(30) NOT NULL,
    direccion varchar(50) NOT NULL,
    telefono varchar(9),
    logo varchar(200),
    PRIMARY KEY (cif)
);

CREATE TABLE profesion(
     idProfesion int(11) NOT NULL AUTO_INCREMENT,
     nombre varchar(50) NOT NULL,
     PRIMARY KEY (idProfesion)
 );

 CREATE TABLE inventario(
     idHerramienta int(11) NOT NULL AUTO_INCREMENT,
     nombre varchar(80) NOT NULL,
     cantidad int(11) NOT NULL,
     foto varchar(200),
     PRIMARY KEY (idHerramienta)
 );

 CREATE TABLE usuario(
    dni varchar(9) NOT NULL,
    idProfesion int(11),
    tipo int(11) NOT NULL, /* 0=admin, 1=empleado */
    pass varchar(50) NOT NULL,
    correo varchar(100) NOT NULL UNIQUE,
    nombre varchar(50) NOT NULL,
    apellidos varchar(80) NOT NULL,
    logo varchar(200),
    telefono varchar(20) NOT NULL,
    direccion varchar(100) NOT NULL,
    fecNac date NOT NULL,
    sexo varchar(25) NOT NULL,
    PRIMARY KEY (dni),
    CONSTRAINT FOREIGN KEY (idProfesion) REFERENCES profesion(idProfesion)
 );

 CREATE TABLE incidencia(
    idIncidencia int(11) NOT NULL AUTO_INCREMENT,
    dni varchar(9),
    nombre varchar(100) NOT NULL,
    descripcion varchar(150) NOT NULL,
    estado int(1),
    logo varchar(200),
    prioridad int(1),
    localizacion varchar(200) NOT NULL,
    fechaSuceso date NOT NULL,
    fechaResolucion date,
    PRIMARY KEY (idIncidencia),
    CONSTRAINT FOREIGN KEY (dni) REFERENCES usuario(dni)
 );

 CREATE TABLE vehiculo(
    matricula varchar(7) NOT NULL,
    idProfesion int(11),
    marca varchar(50) NOT NULL,
    modelo varchar(80) NOT NULL,    
    cantidad int(11) NOT NULL,
    logo varchar(200),
    PRIMARY KEY (matricula),
    CONSTRAINT FOREIGN KEY (idProfesion) REFERENCES profesion(idProfesion)
 );

CREATE TABLE plan(
    idPlan int(11) NOT NULL AUTO_INCREMENT,
    dni varchar(9),
    idIncidencia int(11),
    fecha date NOT NULL,
    descripcion varchar(150),
    PRIMARY KEY (idPlan),
    CONSTRAINT FOREIGN KEY (dni) REFERENCES usuario(dni),
    CONSTRAINT FOREIGN KEY (idIncidencia) REFERENCES incidencia(idIncidencia)
);

CREATE TABLE usuarioInventario(
    idHerramienta int(11),
    dni varchar(9),
    fecha date NOT NULL,
    PRIMARY KEY (idHerramienta, dni),
    CONSTRAINT FOREIGN KEY (idHerramienta) REFERENCES inventario(idHerramienta),
    CONSTRAINT FOREIGN KEY (dni) REFERENCES usuario(dni)
);

CREATE TABLE usuarioVehiculo(
    dni varchar(9),
    matricula varchar(7),
    fecha date NOT NULL,
    PRIMARY KEY (dni, matricula),
    CONSTRAINT FOREIGN KEY (dni) REFERENCES usuario(dni),
    CONSTRAINT FOREIGN KEY (matricula) REFERENCES vehiculo(matricula)
);

CREATE TABLE profesionHerramienta(
    idProfesion int(11),
    idHerramienta int(11),
    PRIMARY KEY(idProfesion, idHerramienta),
    CONSTRAINT FOREIGN KEY (idProfesion) REFERENCES profesion(idProfesion),
    CONSTRAINT FOREIGN KEY (idHerramienta) REFERENCES inventario(idHerramienta)
);
