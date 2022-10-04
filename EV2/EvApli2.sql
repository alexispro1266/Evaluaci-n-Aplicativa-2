create database EvApli2;
use EvApli2;

create table clientes(
id varchar (20) primary key,
nombre varchar(40),
apellido varchar(40),
tipodoc varchar(40),
documento varchar(40),
direccion varchar(20)
);

	

select * from clientes;



CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `estado` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
