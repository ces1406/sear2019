DROP DATABASE IF EXISTS searlogbd;
CREATE DATABASE searlogbd;
USE searlogbd;

DROP TABLE IF EXISTS logDeUso;
CREATE TABLE logDeUso(
	idLog 			INT AUTO_INCREMENT PRIMARY KEY,
    estado 			NVARCHAR(4),
    modo			NVARCHAR(20),
    colorRed		INT,
    colorGreen		INT,
    colorBlue		INT,
    horaDispo		TIME,
    tempDispo		INT,
    horaRegistro	DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
CREATE USER 'searAdmin'@'%' IDENTIFIED BY 'sear123';
GRANT DELETE,INSERT,SELECT,UPDATE ON searlogbd.* TO 'searAdmin'@'%';

INSERT INTO searlogbd.logDeUso (estado,modo,colorRed,colorGreen,colorBlue,horaDispo,tempDispo,horaRegistro) VALUES ('estad1','NORMALIS',11,22,33,14:55,32,CURRENT_TIMESTAMP()) 

INSERT INTO searlogbd.logDeUso (estado,modo,colorRed,colorGreen,colorBlue,horaDispo,tempDispo,horaRegistro) values ('on','reloj',122,244,36,CURRENT_TIMESTAMP(),21,CURRENT_TIMESTAMP());