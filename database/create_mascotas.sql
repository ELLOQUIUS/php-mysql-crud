CREATE TABLE mascota (
  `id_mascota` INT AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `tipo_de_mascota` varchar(20) NOT NULL,
  `raza` varchar(30) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `nombre_cliente` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  PRIMARY KEY (id_mascota)
)