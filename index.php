<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <script src="scripts/script.js"></script>

    <title>Suppor-tech</title>
  </head>
  <body>
<!--START NAVBAR-->
		<nav class="navbar navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
	      <img src="images/logotipo.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
	      Departamento de Informática.
	    </a>
	  </div>
	</nav>
<!-- ENDS NAVBAR-->


<!-- START FORM-->
<form method="post"  action="modulos/mdl_crear_nuevo_reporte.php" id="frm_crear_nuevo_reporte" onsubmit="return validar()">

	<div>
	 <label for="inputState" class="form-label">Departamento</label>
	 <select id="departamento" name="departamento"class="form-select">
     <option value="">Departamento</option>
     <option disabled>A____</option>
     <option>ARCHIVO MUNICIPAL</option>
     <option>ASEO PUBLICO</option>
     <option>ALUMRADO PUBLICO</option>
     <option>ATENCION CIUDADANA</option>
     <option disabled>B____</option>
     <option disabled>C____</option>
     <option>CATASTRO</option>
     <option>CEMENTERIOS</option>
     <option>CONTRALORIA MUNICIPAL</option>
     <option>CONSTRUCCION EN CAMPO</option>
     <option>COORDINACIÓN DEL GABINETE</option>
     <option>CONSTRUCCIONES</option>
     <option>CULTURA</option>
     <option disabled>D____</option>

     <option>DESARROLLO RURAL Y FOM.</option>
     <option>DEPORTES Y RECREACION</option>
     <option>DELEGACIÓN EL CABEZÓN</option>
     <option>DELEGACIÓN EL TEXCALAME</option>
     <option>DELEGACIÓN SAN ANTONIO MATUTE</option>
     <option>DESARROLLO SOCIAL</option>
     <option>DIF</option>
     <option disabled>E____</option>
     <option>ECOLOGIA, MEDIO AMBIENTE, PROTECCION AMBIENTAL Y CONTROL CANINO</option>
     <option>EDUCACION</option>
     <option>EGRESOS Y CONTROL PRESUPUESTAL</option>
     <option disabled>F____</option>
     <option disabled>G____</option>
     <option disabled>H____</option>
     <option disabled>I____</option>
     <option>INGRESOS</option>
     <option>IGUALDAD SUSTANTIVA ENTRE HOMBRES Y MUJERES</option>
     <option disabled>J____</option>
     <option>JUVENTUD Y NIÑEZ</option>
     <option disabled>K____</option>
     <option disabled>L____</option>
     <option disabled>M____</option>
     <option>MANTENIMIENTO GENERAL</option>
     <option>MANTENIMIENTO DE VEHICULAR</option>
     <option>MODULO DE MAQUINARIA</option>
     <option disabled>N____</option>
     <option disabled>O____</option>
     <option>OBRAS PUBLICAS</option>
     <option>ORDENAMIENTO MUNICIPAL</option>
     <option disabled>P____</option>
     <option>PARQUES, UNIDADES DEPORTIVAS Y JARDINES</option>
     <option>PATRIMONIO</option>
     <option>PARTICIPACION CIUDADANA</option>
     <option>PADRON Y LICENCIA</option>
     <option>PRESIDENCIA</option>
      <option>PROTECCIÓN CIVIL</option>
     <option>PROMOCIÓN ECONOMICA</option>
     <option>PROYECTOS</option>
     <option disabled>Q____</option>
     <option disabled>R____</option>
     <option>RASTRO MUNICIPAL</option>
     <option>RECURSOS HUMANOS</option>
     <option>REGIDORES</option>
     <option>REGISTRO CIVIL</option>
     <option>RELACIONES EXTERIORES</option>
     <option disabled>S____</option>
     <option>SALUD PUBLICA</option>
     <option>SEGURIDAD PÚBLICA</option>
     <option>SECRETARIA GENERAL</option>
     <option>SERVICIOS MÉDICOS MUNICIPALES</option>
     <option>SINDICATURA</option>
     <option disabled>T____</option>
      <option>TESORERIA MUNICIPAL</option>
      <option>TIANGUIS Y COMERCIO EN ESPACIOS ABIERTOS</option>
       <option>TURISMO</option>
     <option>TRANSPARENCIA Y BUENAS PRACTICAS</option>
        <option disabled>U____</option>
      <option>UNIDAD DE ABASTOS, SUMINISTROS Y ALMACEN</option>
      <option>UNIDAD DE EVENTOS</option>
      <option>UNIDAD DE PREVENCION DE ADICCIONES</option>
      <option>UNIDAD DE MEDIOS DE COMUNICACIÓN</option>
       <option>UNIDAD DE DERECHOS HUMANOS</option>
      <option>UNIDAD MULTIFUNCIONAL DE VERIFICACION</option>
        <option disabled>V____</option>
      <option>VINCULACION INTERNACIONAL</option>
      <option disabled>W____</option>
      <option disabled>X____</option>
      <option disabled>Y____</option>
      <option disabled>Z____</option>
	 </select>
 </div>





	<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
</div>

<div class="mb-3">
  <input type="hidden" class="form-control" id="fecha_hoy" name="fecha" value="" placeholder="Another input placeholder">
</div>

<div>
 <label for="inputState" class="form-label">Tipo de reporte</label>
 <select id="fallas" class="form-select"  name="falla_de_equipo" onchange="getComboA(this)">
   <option value="">Seleccione</option>
   <option>PROBLEMAS DE INTERNET</option>
   <option>PROBLEMAS DE IMPRESION</option>
    <option>PROBLEMAS DE MONITOR</option>
    <option>PROBLEMAS OFFICE</option>
    <option>NUEVA CONEXION</option>
    <option>NUEVA INSTALCION DE EQUIPO</option>
    <option>PROBLEMAS CON VIRUS</option>
    <option>OTRO</option>
 </select>
</div>

<input type="hidden" class="form-control" id="solucion" name="solucion" value="Nuevo" placeholder="">

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label" id="charNum">Breve descripcion del problema.</label>
  <textarea rows="3" onkeyup="countChars(this);" maxlength="250"  class="form-control" id="charNum" name="descripcion" placeholder="Ejemplo: Necesito instalar un nuevo equipo para un nuevo compañero y conecarlo a internet necesito 20 metros de cable aprox."></textarea>

</div>

<div class="col-12">
	 <button type="submit" class="btn btn-primary">Crear Reporte</button>
 </div>

</form>
<!-- ENDS FORM-->
<div>
<iframe src="https://appsgeyser.com/social_widget/social_widget.php?width=295&amp;height=150&amp;apkName=supportech_15244794&amp;simpleVersion=no" width="320" height="180" vspace="0" hspace="0" frameborder="no" scrolling="no" seamless="" allowtransparency="true"></iframe>;
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
<table>
<tr>cell 1</tr>
<tr>cell 2</tr>
<caption>A table</caption>
</table>

  </body>
</html>
