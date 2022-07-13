<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/estilo.css" rel="stylesheet" type="text/css">
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
<!-- INICIA FORMULARIO PARA FILTRAR INFORMACION -->
  <form method="post" action="mensual.php" name="form_filtro" id="form_filtro" style="align-items: center; background:rgba(0,0,0,0.0);">
                  <table border="0" style="color:#FFFFFF; font-weight: 600; font-size: 17px;">

                <tr>
                  <td width="50%" style="text-align: right;">

                    <select name="FiltarMes" onchange="this.form.submit()" type="text" id ="FiltarMes" style="height:30px;	width:auto; font-weight: 600; font-size: 14px; border-radius: 10px 10px 10px 10px;">
                      <option disabled selected>Mes</option>
                      <option value="1" onselect="enviaMes()">ENERO</option>
                      <option value="2" onselect="enviaMes()">FEBRERO</option>
                      <option value="3" onselect="enviaMes()">MARZO</option>
                      <option value="4" onselect="enviaMes()">ABRIL</option>
                      <option value="5" onselect="enviaMes()">MAYO</option>
                      <option value="6" onselect="enviaMes()">JUNIO</option>
                      <option value="7" onselect="enviaMes()">JULIO</option>
                      <option value="8" onselect="enviaMes()">AGOSTO</option>
                      <option value="9" onselect="enviaMes()">SEPTIEMBRE</option>
                      <option value="10" onselect="enviaMes()">OCTUBRE</option>
                      <option value="11" onselect="enviaMes()">NOBIEMBRE</option>
                      <option value="12" onselect="enviaMes()">DICIEMBRE</option>
                     </select>
                        <br>
                  </td>
                </tr>

              </table>
            </form>
              <!--/*********************************FIN FORMULARIO PARA EL FILTRO*****************************************************/ -->






<!-- <input type="hidden" id="micodigo" name="micodigo"> -->



    <?php
    error_reporting(0);//para que no me muestre errores
$numMes = $_POST['FiltarMes'];


echo "
<form method='post' action='mensual.php' name='frm_consulta' id='form_consulta' style='width: auto; height: auto;'>
 <input type='text' id='mesActual' name'mesActual' value='$numMes'>
";



include_once '../clases/reportes.php';
$rep = new Reportes();
$reportes = $rep->listarInformeMensual();
if($reportes){
echo "

<table>
<tr>
<th><h4>DEPARTAMENTO:</h4></th>
<th>  &nbsp &nbsp</th>
<th><h4>INFRAESTRUCTURA INFORMÁTICA.</h4></th>
</tr>
<tr>
<th><h4>MES:</h4></th>
<th>  &nbsp &nbsp </th>
<th><h4>AQUÍ VA EL MES</h4></th>
</tr>
</table>
<table class='table table-striped'><thead>
<tr>
<th>Fecha</th>
<th>Departamento</th>
<th>Servicio que se brindo</th>
</tr>
</thead>";

        foreach ($reportes as $reporte) {
        //  if($filtro1 == $alumno['curp'] || $filtro2 == $alumno['nombre'] || $filtro3 == $alumno['apellidos']){

            echo "<tr>
            <td>".$reporte['fecha']."</td>
            <td>".$reporte['departamento']."</td>
            <td>".$reporte['solucion']."</td>

            </tr>";


        }


      /*onClick="location='index.php'"*/
echo "</table>";
}
else{
echo " <p>No hay reportes nuevos por atender.</p>";
}
?>
   </form>
<div class="col-12">

   <input type="button" class="btn btn-primary" onClick="location=''" value="Imprimir" />

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
