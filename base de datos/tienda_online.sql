DROP DATABASE IF EXISTS tienda_online;
CREATE DATABASE IF NOT EXISTS tienda_online;
 CREATE TABLE `tienda_online`.`usuarios`(
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
 
 INSERT INTO `tienda_online`.`usuarios` VALUES('40104811', 'Leandro', 'Viggiano', 'dad_7171@live.com',
'2612052742', 'CalleFalsa123',777,'Mendoza','contra',1,5500);

CREATE TABLE `tienda_online`.`productos`(
precio INT,
id INT,
nombre VARCHAR(50),
imagen VARCHAR(15),
PRIMARY KEY (id));

INSERT INTO `tienda_online`.`productos` VALUES(100,1,'Papas fritas','papas-fritas.png');
INSERT INTO `tienda_online`.`productos` VALUES(500,2,'Pizza','pizza');
INSERT INTO `tienda_online`.`productos` VALUES(300,3,'Sandwich','sandwich');
INSERT INTO `tienda_online`.`productos` VALUES(350,4,'Hamburguesa','hamburguesa');
INSERT INTO `tienda_online`.`productos` VALUES(200,5,'Galletita','galletitas');
INSERT INTO `tienda_online`.`productos` VALUES(200,6,'Pancho','pancho');
INSERT INTO `tienda_online`.`productos` VALUES(100,7,'Dona','dona');

CREATE TABLE `tienda_online`.`carritos`(
id INT UNIQUE AUTO_INCREMENT,
id_usuario VARCHAR(8),
id_producto INT,
cantidad INT,
precio INT,
imagen VARCHAR,
nombre VARCHAR,
FOREIGN KEY (id_usuario) REFERENCES usuarios(dni),
FOREIGN KEY (id_producto) REFERENCES productos(id),
PRIMARY KEY (id)
);

