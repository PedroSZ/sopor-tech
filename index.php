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
<form method="post"  action="modulos/mdl_crear_nuevo_reporte.php" id="frm_crear_nuevo_reporte" >

	<div>
	 <label for="inputState" class="form-label">Departamento</label>
	 <select id="departamento" class="form-select"  name="departamento">
		 <option disabled selected>Seleccione</option>
		 <option>DIF</option>
		 <option>TRANPARENCIA Y BUENAS PRACTICAS</option>
		 <option>CULTURA</option>
		 <option>DEPORTES Y RECREACION</option>
		 <option>OBRAS PUBLICAS</option>
     <option>REGIDORES</option>
     <option>PRESIDENCIA</option>
		 <option>SECRETARIA GENERAL</option>
		 <option>SINDICATURA</option>
		 <option>RECURSOS HUMANOS</option>
		 <option>UNIDAD DE MEDIOS DE COMUNICACIÓN</option>
     <option>DESARROLLO SOCIAL</option>
     <option>REGISTRO CIVIL</option>
     <option>EDUCACION</option>
     <option>MANTENIMIENTO DE VEHICULAR</option>
     <option>PADRON Y LICENCIA</option>
     <option>RELACIONES EXTERIORES</option>
      <option>PROMOCIÓN ECONOMICA</option>
      <option>UNIDAD DE DERECHOS HUMANOS</option>
     <option>UNIDAD MULTIFUNCIONAL DE VERIFICACION</option>
     <option>DELEGACIÓN EL CABEZÓN</option>
     <option>DELEGACIÓN EL TEXCALAME</option>
     <option>DELEGACIÓN SAN ANTONIO MATUTE</option>
      <option>TESORERIA MUNICIPAL</option>
      <option>INGRESOS</option>
      <option>EGRESOS Y CONTROL PRESUPUESTAL</option>
      <option>INFORMATICA</option>
      <option>CATASTRO</option>
      <option>ARCHIVO MUNICIPAL</option>
      <option>ORDENAMIENTO MUNICIPAL</option>
      <option>PROYECTOS</option>
      <option>CONSTRUCCIONES</option>
      <option>MODULO DE MAQUINARIA</option>
      <option>MANTENIMIENTO GENERAL</option>
      <option>CEMENTERIOS</option>
      <option>RASTRO MUNICIPAL</option>
      <option>CONSTRUCCION EN CAMPO</option>
      <option>TIANGUIS Y COMERCIO EN ESPACIOS ABIERTOS</option>
      <option>ASEO PUBLICO</option>
      <option>PARQUES, UNIDADES DEPORTIVAS Y JARDINES</option>
      <option>ALUMRADO PUBLICO</option>
      <option>IGUALDAD SUSTANTIVA ENTRE HOMBRES Y MUJERES</option>
      <option>TURISMO</option>
      <option>SERVICIOS MÉDICOS MUNICIPALES</option>
      <option>PROTECCIÓN CIVIL</option>
      <option>DESARROLLO RURAL Y FOM.</option>
      <option>SALUD PUBLICA</option>
      <option>ECOLOGIA, MEDIO AMBIENTE, PROTECCION AMBIENTAL Y CONTROL CANINO</option>
      <option>SEGURIDAD PÚBLICA</option>
      <option>ATENCION CIUDADANA</option>
      <option>JUVENTUD Y NIÑEZ</option>
      <option>CONTRALORIA MUNICIPAL</option>
      <option>COORDINACIÓN DEL GABINETE</option>
      <option>PARTICIPACION CIUDADANA</option>
      <option>PATRIMONIO</option>
      <option>UNIDAD DE ABASTOS, SUMINISTROS Y ALMACEN</option>
      <option>VINCULACION INTERNACIONAL</option>
      <option>UNIDAD DE EVENTOS</option>
      <option>UNIDAD DE PREVENCION DE ADICCIONES</option>      
	 </select>
 </div>





	<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre">
</div>

<div class="mb-3">
  <input type="hidden" class="form-control" id="fecha_hoy" name="fecha" value="" placeholder="Another input placeholder">
</div>

<div>
 <label for="inputState" class="form-label">Tipo de reporte</label>
 <select id="fallas" class="form-select"  name="falla_de_equipo" onchange="getComboA(this)">
   <option disabled selected>Seleccione</option>
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
  </body>
</html>
