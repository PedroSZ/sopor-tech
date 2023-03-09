<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/estilo.css" rel="stylesheet" type="text/css">
    <script src="../scripts/exportarxml.js"></script>
    <title>Suppor-tech</title>

  </head>
  <body>
<!--START NAVBAR-->
		<nav class="navbar">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#" style="color:#FFFFFF";>
	      <img src="../images/logotipo.png" alt="" width="300" height="300" align="left">
        <br><br><FONT SIZE=7>GOBIERNO DE AMECA</font>
        <br><FONT SIZE=6>Departamento de Informática.</font>
	    </a>
	  </div>
	</nav>
<!-- ENDS NAVBAR-->

<!-- begings form-->
<div class="datagrid">
 <input type="button" class="btn btn-primary" onClick="location='mensual.php'" value="Informe Mensual" />
  <input type="button" class="btn btn-primary" onClick="location='trimestral.php'" value="Informe Trimestral" />
<!-- INICIA FORMULARIO PARA FILTRAR INFORMACION -->
  <form method="post" action="informes.php" name="form_filtro" id="form_filtro" style="align-items: center; background:rgba(0,0,0,0.0);">
                  <table border="0" style="color:#FFFFFF; font-weight: 600; font-size: 17px;">

                <tr>
                  <td width="50%" style="text-align: right;">

                    <input name="FiltarId" type="text"  placeholder="Buscar por id" id ="FiltarId" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" style="height:30px;	width:150px; font-weight: 600; font-size: 14px; border-radius: 10px 10px 10px 10px;">

                    <input name="FiltarNombre" type="text" title="Busqueda por nombre ejemplo: Pedro" placeholder="Buscar por nombre" id ="FiltarNombre"  style="height:30px;	width:150px; font-weight: 600; font-size: 14px; border-radius: 10px 10px 10px 10px;">

                    <select name="FiltarTipo" onchange="this.submit" type="text" id ="FiltarTipo" style="height:30px;	width:auto; font-weight: 600; font-size: 14px; border-radius: 10px 10px 10px 10px;">
                      <option disabled selected>Tipo reporte</option>
                      <option value="PROBLEMAS DE INTERNET">PROBLEMAS DE INTERNET</option>
                      <option>PROBLEMAS DE IMPRESION</option>
                       <option>PROBLEMAS DE MONITOR</option>
                       <option>PROBLEMAS OFFICE</option>
                       <option>NUEVA CONEXION</option>
                       <option>NUEVA INSTALCION DE EQUIPO</option>
                       <option>PROBLEMAS CON VIRUS</option>
                       <option>OTRO</option>
                     </select>

                    <select name="FiltarDepartamento" onchange="this.submit" type="text" id ="FiltarDepartamento" style="height:30px;	width:auto; font-weight: 600; font-size: 14px; border-radius: 10px 10px 10px 10px;">
                      <option disabled selected>Departamento</option>
                      <option disabled>A____</option>
                      <option>ABASTO Y SUMINISTRO</option>
                      <option>ALUMRADO PUBLICO</option>
                      <option value="ARCHIVO MUNICIPAL">ARCHIVO MUNICIPAL</option>
                      <option>ASEO PUBLICO</option>
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


                        <br>
                        <input type="submit" value="Buscar" style="height:30px;	width:100px; font-weight: 600; font-size: 14px; border-radius: 10px 10px 10px 10px;">

                  </td>
                </tr>

              </table>
            </form>
              <!--/*********************************FIN FORMULARIO PARA EL FILTRO*****************************************************/ -->





<form method="post" action="../clases/reportes.php" name="frm_listReportes" id="frm_listReportes" style="width: auto; height: auto;">
 <input type="hidden" id="mimes" name="mimes">
    <?php
    error_reporting(0);//para que no me muestre errores
    $filtro1 = $_POST['FiltarId']; //para obtener la curp a buscar del fitro

    $filtro2 = $_POST['FiltarNombre'];
    $filtro3 = $_POST['FiltarTipo'];
    $filtro4 = $_POST['FiltarDepartamento'];
/*echo $filtro1;
echo $filtro2;
echo $filtro3;
echo $filtro4;
echo $filtro5;*/


include_once '../clases/reportes.php';
$rep = new Reportes();
$reportes = $rep->listarInforme();
if($reportes){
echo "
<table>
<tr>
<th><h4>PRODUCCION:</h4></th>
<th>  &nbsp &nbsp</th>
<th><h4>PRODUCCION.</h4></th>
</tr>
<tr>
<th><h4>MES:</h4></th>
<th>  &nbsp &nbsp </th>
<th><h4>AQUÍ VA EL MES</h4></th>
</tr>
</table>
<table id='tableID' class='table table-striped'><thead>
<tr>
<th>Fecha</th>
<th>Departamento</th>
<th>Servicio que se brindo</th>
</tr>
</thead>";
if($filtro1 || $filtro2 || $filtro3 || $filtro4){
        foreach ($reportes as $reporte) {
        //  if($filtro1 == $alumno['curp'] || $filtro2 == $alumno['nombre'] || $filtro3 == $alumno['apellidos']){
          if($filtro1 == $reporte['id'] || $filtro2 == $reporte['nombre'] || $filtro3 == $reporte['falla_de_equipo'] || $filtro4 == $reporte['departamento']){
            echo "<tr>
            <td>".$reporte['fecha']."</td>
            <td>".$reporte['departamento']."</td>
            <td>".$reporte['solucion']."</td>

            </tr>";
          }

        }


      }else{
        foreach ($reportes as $reporte) {
        echo "<tr>

        <td>".$reporte['fecha']."</td>
        <td>".$reporte['departamento']."</td>
        <td>".$reporte['solucion']."</td>
        </tr>

        <td>
        <input type='hidden' value=".$reporte["solucion"]." class='form-control' id='solucion' name='solucion' >
        </td>";
        }
      }
      /*onClick="location='index.php'"*/
echo "</table>";
}
else{
echo " <p>No hay reportes nuevos por atender.</p>";
}
?>

<div class="col-12">

   <input type="button" class="btn btn-primary" onClick="location=''" value="Imprimir" />
   <button class="btn btn-primary" onclick="exportTableToExcel('tableID')">Descargar para excel</button>
 </div>
</article>
</section>
<!--
<div id="centrado">
<input type="button" onClick="location='menuAdmin.php'" value="Regresar" />
</div>
-->
<!-- Pie de pagina-->


</div>
<!-- ENDS FORM-->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  <!--  <script src="../scripts/notifications.js" type="text/javascript"></script> -->

  </body>
</html>
