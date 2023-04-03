DROP DATABASE IF EXISTS contactInfo;
CREATE DATABASE contactInfo;
use contactInfo;
CREATE TABLE bericht (
    naam varchar(255) NOT NULL,
    telefoonnummer int(15) NULL,
    email varchar(255) NOT NULL,
    Informatie varchar(255) NOT NULL
    );