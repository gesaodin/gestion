DROP TABLE public.trabajador;
CREATE TABLE trabajador
(
  tiponomina character varying(128),
  cedula character varying(32) NOT NULL,
  nombres character varying(250),
  fechanacimiento date,
  sexo character varying(2),
  nivleducativo character varying(128),
  porceducativo numeric,
  tipotabulador character varying(250),
  grado character varying(250),
  nivel character varying(250),
  cargogenerico character varying(250),
  cargoespecifico character varying(250),
  cargoencargaduria character varying(250),
  unidadadscripcion character varying(250),  
  fechaingreso date,
  fechaegreso character varying(250),
  anosbolipuerto integer,
  anosadministracion integer,
  porcentajeantiguedad numeric,
  nivelriesgo character varying(250),
  sociocaja character varying(250),
  porcentajeaporte numeric,
  porcentajeislr numeric,
  sindicato character varying(250),
  condicion character varying(250),
  estatus character varying(250),
  puertoadscripcion character varying(250),
  nomina character varying(250)
 );

-------------------------------
--
--
-------------------------------
DROP TABLE tipotabulador;
CREATE TABLE tipotabulador ( 
  oid serial,
  nombre character varying(256),
  descripcion character varying(128)
);
INSERT INTO tipotabulador  ( nombre ) 
SELECT tipotabulador FROM trabajador 
WHERE  tipotabulador!=''
group by tipotabulador ;



-------------------------------
--
--
-------------------------------
DROP TABLE cargogenerico;
CREATE TABLE cargogenerico ( 
  oid serial,
  nombre character varying(256),
  descripcion character varying(128)
);
INSERT INTO cargogenerico  ( nombre ) 
SELECT cargogenerico FROM trabajador 
WHERE  cargogenerico!=''
group by cargogenerico;


-------------------------------
--
--
-------------------------------
DROP TABLE cargoespecifico;
CREATE TABLE cargoespecifico ( 
  oid serial,
  nombre character varying(256),
  descripcion character varying(128)
);
INSERT INTO cargoespecifico  ( nombre ) 
SELECT cargoespecifico FROM trabajador
WHERE  cargoespecifico!=''
group by cargoespecifico;


-------------------------------
--
--
-------------------------------
DROP TABLE cargoencargaduria;
CREATE TABLE cargoencargaduria ( 
  oid serial,
  nombre character varying(256),
  descripcion character varying(128)
);
INSERT INTO cargoencargaduria  ( nombre ) 
SELECT cargoencargaduria FROM trabajador 
WHERE  cargoencargaduria!=''
group by cargoencargaduria;



-------------------------------
--
--
-------------------------------
DROP TABLE puerto;
CREATE TABLE puerto ( 
  oid serial,
  nombre character varying(256),
  descripcion character varying(128)
);
INSERT INTO puerto  ( nombre ) 
SELECT puertoadscripcion FROM trabajador 
WHERE  puertoadscripcion!=''
group by puertoadscripcion;


