<?php
//******ALTA USUARIO ESTUDIANTE (RF-07)
	include_once '../clases/reportes.php';


if(!empty($_POST['id'])){
		//echo "registrado";
	  $dato = $_POST['id'];
		/*echo $_POST['id'];
		echo $_POST['falla_de_equipo'];
		echo $_POST['descripcion'];
		echo $_POST['fecha'];
		echo $_POST['nombre'];
		echo $_POST['departamento'];
		echo $_POST['solucion'];*/


		$reportes = new Reportes();
		$reportes->setId($_POST['id']);
		$reportes->setFalla($_POST['falla_de_equipo']);
		$reportes->setDescripcion($_POST['descripcion']);
		$reportes->setFecha($_POST['fecha']);
		$reportes->setNombre($_POST['nombre']);
		$reportes->setDepartamento($_POST['departamento']);
		$reportes->setSolucion($_POST['solucion']);
		$reportes->actualizar($dato);
		/*echo "<form name='envia' method='POST' action='../listReportar.php'>
		<input name='taller' readonly = 'readonly' type='hidden' placeholder='' id='taller' value=$dato2>
	</form>
	<script language='JavaScript'>
	document.envia.submit();
	</script>";*/
	header('Location: ../admin/soporte.php');//regresa al pagina que estaba
}else 	echo "<script language='JavaScript'>
	 alert('no dato');
		</script>";

?>
