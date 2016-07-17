<?php
  @session_start(); 
    include ("../dominio/conexion.php");
     include ("../dominio/Clase_MenuAcad.php");
     include ("../dominio/Clase_Evento.php");

 $conexion=new conexion();
 $dblink=$conexion->conectar();
  if (!$dblink) die("Error Fatal: NO SE PUEDE CONECTAR A LA BASE DE DATOS");
 

$menu_alumnoacad= new menu_alumnoacad();
$evento= new evento();
$nombreeve=$evento->getevento($dblink);
$res=$evento->lista_participantes($dblink);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Evento</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" href="media/themes/custom-theme/jquery-ui-1.8.22.custom.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" type="text/css" href="css/layout.css" media="screen"/>

<script src="media/js/jquery.js" type="text/javascript"></script>
<script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="media/js/TableTools.js" type="text/javascript"></script>
<script src="media/js/ZeroClipboard.js" type="text/javascript"></script>

<title>Reporte</title>
<script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
						
			 $('#datatables').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[0, "asc"]],
                    "bJQueryUI":true,
					"oLanguage": {
            			 "sUrl": "fisheyes/es_ES.txt"
					}
                });	
			});
		</script>
        
		

  
  <!-- end scripts -->
  		<style type="text/css" title="currentStyle">
		
            @import "../presentacion/media/css/demo_table_jui.css";
			/*@import "media/css/demo_table.css";	*/
            @import "../presentacion/media/css/custom-theme/jquery-ui-1.8.22.custom.css";
			@import "../presentacion/media/css/TableTools_JUI.css";
			@import "../presentacion/media/css/demo_page.css";
			
			label.error{
			color:red;
			background-image:url(images/warning.gif);
			background-repeat:no-repeat;
			margin-left:2px;
			padding-left:17px;
}
		</style>
  		
    </head>
<body>

<form id="formp" name="formp" action="reporte.php" method="post">
<div class="outer-container">
<div class="inner-container">

	<div class="header">
    <div class="title1">
		<div class="slogan"> </div>
	</div>	
	</div>


  <div class="path">
			
			<a href="index.php"><img src="images/inicio.jpg" width="25" height="25"/></a> <?php 
			$menu_alumnoacad->fecha_menu ();
	 ?>
            
<span class="right"><?php $menu_alumnoacad->mnu_barraderecha();?></span></div>
	<div class="main">		
		
		<div class="contenido">
	
<fieldset>	
<center>
<p><h1><?php echo $nombreeve[0]['nombre_eve']; ?></h1></p>
</center>
 <table cellpadding="0" cellspacing="0" border="0" id="datatables" class="display"  width="100%">
      <thead>
		<tr >
			<th>C&eacute;dula</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Fecha de Nacimiento</th>
			<th>Direcci&oacute;n</th>
			<th>Telefono</th>
			<th>Correo</th>
			<th>Evento</th>
			<th>Forma de Pago</th>
            <th colspan=2>Acci&oacute;n</th>
		</tr>
	</thead>
	<tbody>
<?php
if($res){
foreach($res as $fila){
?>
		<tr class="gradeA">
			<td><?php echo $fila['cedula_par']; ?></td>
			<td><?php echo $fila['nombres_par']; ?></td>
			<td><?php echo $fila['apellidos_par']; ?></td>
			<td><?php echo $fila['fechanac_par']; ?></td>
			<td><?php echo $fila['direccion_par']; ?></td>
			<td><?php echo $fila['telefono']; ?></td>
			<td><?php echo $fila['correo_par']; ?></td>
			<td><?php echo $fila['nombre_eve']; ?></td>
			<td><?php echo $fila['descripcion_fpag']; ?></td>
            <td><a href="act.php?par=<?php echo $fila['serial_par']; ?>">Actualizar</a></td>
            <td><a href="del.php?par=<?php echo $fila['serial_par']; ?>" target="_new">Eliminar</a></td>
            
		</tr>
       
<?php
}
}

?>
	<tfoot>
		<tr>
        <th>C&eacute;dula</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Fecha de Nacimiento</th>
			<th>Direcci&oacute;n</th>
			<th>Telefono</th>
			<th>Correo</th>
			<th>Evento</th>
			<th>Forma de Pago</th>
            <th colspan=2>Acci&oacute;n</th>
		</tr>
	</tfoot>
	</table>				   

</fieldset>	

</form>


		</div>
		<?php $menu_alumnoacad->menu() ?>
    </div>

		<div class="clearer">&nbsp;</div>
         

	

	<div class="footer">

		<span class="left">
	
		</span>

		<span class="right">Desarrollo Jeaneth Diaz</span>

		<div class="clearer"></div>

	</div>
    </div>

</body>

</html>

