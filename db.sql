create database reportesInf_db;
  drop table if exists reportes;
  CREATE TABLE reportes (
      id int AUTO_INCREMENT PRIMARY KEY,
      departamento VARCHAR(100),
      nombre VARCHAR(150),
      descripcion VARCHAR(250),
      falla_de_equipo VARCHAR(50),
      solucion VARCHAR(250),
      fecha DATE
  );


Se añadió el usuario “w9x3z2i1_w9x3z2i” a la base de datos “w9x3z2i1_reportes_inf”.
