CREATE DATABASE bd_landing;


CREATE table leads (
	id int AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(200),
    numero varchar(20),
    mail varchar(200),
    ciudad varchar(50),
    mascota varchar(20),
    comenta varchar(800),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)