<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Suppor-tech</title>


    <script language='javascript'>
      function consultar(codigo) {
            document.frm_listReportes.micodigo.value = codigo;
      //alert(codigo);
            document.frm_listReportes.submit();
          }
            function regresar(){
                location.href='../atencionReporte.php'
              }
   </script>


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

<!-- begings form-->
<div class="datagrid">
<form method="post" action="atencionReporte.php" name="frm_listReportes" id="frm_listReportes" style="width: auto; height: auto;">
<input type="hidden" id="micodigo" name="micodigo">
    <?php
include_once '../clases/reportes.php';
$rep = new Reportes();
$reportes = $rep->listarDetalles();
if($reportes){
echo "
<h4>Nuevos reportes.</h4>
<table class='table table-striped'><thead>


<tr>
<th>Id</th>
<th>Departamento</th>
<th>Reportante</th>
<th>Falla</th>
<th>Descripcion</th>
<th>Fecha</th>
<th>Atender</th>
</tr>

</thead>";
foreach ($reportes as $reporte) {
echo "<tr>
<td>".$reporte['id']."</td>
<td>".$reporte['departamento']."</td>
<td>".$reporte['nombre']."</td>
<td>".$reporte['falla_de_equipo']."</td>
<td>".$reporte['descripcion']."</td>

<td>".$reporte['fecha']."</td>


<td style='text-align:center'><button type='button' class='btn btn-warning'  onClick='consultar(\"".$reporte['id']."\");' > ".$reporte['solucion']."</button></td>
</tr>

<td>
<input type='hidden' value=".$reporte["solucion"]." class='form-control' id='solucion' name='solucion' >
</td>";
}       /*onClick="location='index.php'"*/
echo "</table>";
}
else{
echo " <p>No hay reportes nuevos por atender.</p>";
}
?>

<div class="col-12">

<input type="button" class="btn btn-primary" onClick="location='informes.php'" value="Generar Informes" />

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

    <script src="../scripts/notifications.js" type="text/javascript"></script>
<div><iframe src="https://appsgeyser.com/social_widget/social_widget.php?width=295&amp;height=150&amp;apkName=adminSuportech_15282552&amp;simpleVersion=no" width="320" height="180" vspace="0" hspace="0" frameborder="no" scrolling="no" seamless="" allowtransparency="true"></iframe>;</div>

  </body>
</html>
