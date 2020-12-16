
create table  `vehiculos` (
  `id` int(10) NOT NULL auto_increment primary key,
  `marca` varchar(100) not null,
  `placa` varchar(100) not null unique,
  `anio_fabricacion` int(100) not null,
  `tipo` varchar(100) not null,
  `propietario` varchar(100) not null
);


insert into `vehiculos`(
`marca`,
`placa`,
`anio_fabricacion`,
`tipo`,
`propietario`
) values (
"chevrolet",
"LCH0101",
1990,
"particular",
"Patricio Rojas"
); 

insert into `vehiculos`(
`marca`,
`placa`,
`anio_fabricacion`,
`tipo`,
`propietario`
) values (
"mazda",
"LCH0102",
2000,
"publico",
"Andres Rivas"
); 

