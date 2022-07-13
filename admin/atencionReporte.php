<!doctype html>



<?php
	if(!empty($_POST['micodigo'])){
		include_once '../clases/reportes.php';
		$codigo = $_POST['micodigo'];
		$rep = new Reportes();
		$mirep = $rep->consultarCodigo($codigo);
	}
	else{
	}
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Suppor-tech</title>

  </head>
  <body>
<!--START NAVBAR-->
		<nav class="navbar navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
	      <img src="../images/logotipo.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
	      Departamento de Informática.
	    </a>
	  </div>
	</nav>
<!-- ENDS NAVBAR-->


<!-- START FORM-->
<form method="post"  action="../modulos/mdl_modificar_reporte.php" id="frm_modificar_reporte" >

<?php
echo'
<div class="mb-3">
<label for="formGroupExampleInput" class="form-label">Id</label>
<input type="text" value="'.$mirep["id"].'" class="form-control" id="id" name="id" placeholder="" readonly="readonly">
</div>

<div>
 <label for="inputState" class="form-label">Departamento</label>
 <select id="departamento" class="form-select"  name="departamento" disabled>
 <option value="'.$mirep["departamento"].'" disabled selected>'.$mirep["departamento"].'</option>
 </select>
<input type="hidden" value="'.$mirep["departamento"].'" class="form-control" id="departamento" name="departamento" >
</div>

<div class="mb-3">
<label for="formGroupExampleInput" class="form-label">Nombre</label>
<input type="text" value="'.$mirep["nombre"].'" class="form-control" id="nombre" name="nombre" placeholder="" readonly="readonly">
</div>

<div class="mb-3">
<label for="formGroupExampleInput" class="form-label">Fecha del Reporte</label>
  <input type="text" value="'.$mirep["fecha"].'" class="form-control" id="fecha" name="fecha" value="" placeholder="" readonly="readonly">
</div>


<div>
 <label for="inputState" class="form-label">Tipo de reporte</label>
 <select id="fallas" name="falla_de_equipoS" class="form-select"  disabled>
   <option  value="'.$mirep["falla_de_equipo"].'" disabled selected>'.$mirep["falla_de_equipo"].'</option>
   <option>PROBLEMAS DE INTERNET</option>
   <option>PROBLEMAS DE IMPRESION</option>
    <option>PROBLEMAS DE MONITOR</option>
    <option>PROBLEMAS OFFICE</option>
    <option>NUEVA CONEXION</option>
    <option>NUEVA INSTALCION DE EQUIPO</option>
    <option>PROBLEMAS CON VIRUS</option>
    <option>OTRO</option>
 </select>
 <input type="hidden" value="'.$mirep["falla_de_equipo"].'" class="form-control" id="falla_de_equipo" name="falla_de_equipo" >
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label" >Descripcion del problema.</label>
  <textarea rows="3"   id="descripcion"  class="form-control"  name="descripcion" placeholder="" readonly="readonly">'.$mirep["descripcion"].'</textarea>

</div>


<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label" id="charNum" name="solucion">Breve descripcion la solucion.</label>

<input type="text" value="" class="form-control" id="solucion" name="solucion" placeholder="Que solucion dio al problema?" >
</div>

';?>








<div class="col-12">
	 <button type="submit" class="btn btn-primary">Dar Solucion</button>
 </div>

</form>
<!-- ENDS FORM-->


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
