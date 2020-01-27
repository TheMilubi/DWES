CREATE DATABASE IF NOT EXISTS pruebas_practicas;
CREATE USER IF NOT EXISTS 'pruebajr'@'localhost' IDENTIFIED BY 'pruebajr';
USE pruebas_practicas;
CREATE TABLE IF NOT EXISTS TEST_CLIENTES(
    ID int PRIMARY KEY AUTO_INCREMENT,
    NAME varchar(255),
    ADDRESS varchar(255),
    DESCRIPTION text,
    TELF varchar(255),
    TYPE char(1)
);
GRANT ALL PRIVILEGES ON pruebas_practicas.TEST_CLIENTES TO 'pruebajr'@'localhost';