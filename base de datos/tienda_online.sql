DROP DATABASE IF EXISTS tienda_online;
CREATE DATABASE IF NOT EXISTS tienda_online;
 CREATE TABLE `tienda_online`.`usuario`(
 dni VARCHAR(8) NOT NULL UNIQUE,
 nombre VARCHAR(50),
 apellido VARCHAR(50),
 email VARCHAR(50),
 telefono VARCHAR(20) ,
 calle VARCHAR(50),
 nro_calle INT(5),
 ciudad VARCHAR(50),
 contrasena VARCHAR(50),
 habilitado INT ,
 cod_postal INT NOT NULL,
 PRIMARY KEY (dni));
 
 INSERT INTO `tienda_online`.`usuario` (dni, nombre, apellido, email, telefono, 
 calle, nro_calle, ciudad, contrasena, habilitado, cod_postal)
 VALUES('40104811', 'Leandro', 'Viggiano', 'dad_7171@live.com',
'2612052742', 'CalleFalsa123',777,'Mendoza','contrasena',1,5500);
DROP TABLE usuario;
CREATE TABLE `tienda_online`.`producto`(
descripcion VARCHAR(50),
precio INT,
stock INT,
id INT,
nombre VARCHAR(50),
categoria VARCHAR(50));




SELECT * FROM `tienda_online`.`usuario`;