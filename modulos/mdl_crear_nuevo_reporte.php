<?php
//******ALTA USUARIO ESTUDIANTE (RF-07)
	include_once '../clases/reportes.php';


if(!empty($_POST['nombre'])){
		//echo "registrado";
	  // $dato = $_POST['reportado'];
			//echo $dato;

		//	$estTaller = new EstudianteTaller();
			//$tallerEst = $estTaller->consultarEstudiante($dato);
			//$dato2 = $tallerEst['taller'];
			//echo $dato2;

		$reportes = new Reportes();
		//$reporte->setClave($_POST['clave']);
		$reportes->setFalla($_POST['falla_de_equipo']);
		$reportes->setDescripcion($_POST['descripcion']);
		$reportes->setFecha($_POST['fecha']);
		$reportes->setNombre($_POST['nombre']);
		$reportes->setDepartamento($_POST['departamento']);
		$reportes->setSolucion($_POST['solucion']);
		$reportes->guardar();
		/*echo "<form name='envia' method='POST' action='../listReportar.php'>
		<input name='taller' readonly = 'readonly' type='hidden' placeholder='' id='taller' value=$dato2>
	</form>
	<script language='JavaScript'>
	document.envia.submit();
	</script>";*/
	header('Location: ../notificacion.php');//regresa al pagina que estaba
	}
?>
