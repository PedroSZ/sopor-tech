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

selecionar por numero de mes
SELECT * FROM reportes where MONTH(fecha) = 3;


<form method="post" action="../clases/reportes.php" name="form_filtro2" id="form_filtro2" style="align-items: center; background:rgba(0,0,0,0.0);">

  <select name="FiltarMes" type="text" id ="FiltarMes" onchange="this.form.submit()" style="height:30px;	width:auto; font-weight: 600; font-size: 14px; border-radius: 10px 10px 10px 10px;">
    <option disabled selected>Mes</option>
    <option value="1">ENERO</option>
    <option value="2">FEBRERO</option>
    <option value="3">MARZO</option>
    <option value="4">ABRIL</option>
    <option value="5">MAYO</option>
    <option value="6">JUNIO</option>
    <option value="7">JULIO</option>
    <option value="8">AGOSTO</option>
    <option value="9">SEPTIEMBRE</option>
    <option value="10">OCTUBRE</option>
    <option value="11">NOBIEMBRE</option>
    <option value="12">DICIEMBRE</option>

   </select>

</form>
