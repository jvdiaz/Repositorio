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
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Evento</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" href="../media/themes/custom-theme/jquery-ui-1.8.22.custom.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" type="text/css" href="css/cmxform.css">
<link rel="stylesheet" type="text/css" href="css/layout.css" media="screen"/>
<script src="media/js/jquery.js" type="text/javascript"></script>

<title>Inscripciones</title>
         <script src="js/validacion.js"> 
</script> 
    <script>
      function validarSiNumero(numero){
        if (!/^([0-9])*$/.test(numero))
          alert("El valor " + numero + " no es un número");
      }
    </script>
    </head>
<body>

<form id="formp" name="formp" action="inserta.php" method="post">
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
<center>	
<fieldset>	
<center>
<legend><h1><?php echo $nombreeve[0]['nombre_eve']; ?></h1></legend>
</center>
</fieldset>	
<p>&nbsp;</p>
<fieldset>	
<center>
<legend><h4>FORMULARIO INSCRIPCIONES </h4></legend>
</center>
<p>&nbsp;</p>
<p>&nbsp;</p>

	 <table border="1" id="campos" align="center" summary="Tabla para registro de datos del participante">
	
		

<caption><h3>DATOS DEL PARTICIPANTE</caption>

 <thead>
          <tr bgcolor="#105f80">
			 
            <th ><div align="center"><font color="white">NOMBRES</font></div></th>
            <th><div align="center"><font color="white">APELLIDOS</font></div></th>
            <th><div align="center"><font color="white">N° CEDULA</font></div></th>
            <th><div align="center"><font color="white">F. NACIMIENTO</font></div></th>
            <th><div align="center"><font color="white">CORREO ELECTRONICO</font></div></th>
            <th><div align="center"><font color="white">DIRECCION</font></div></th>
			<th><div align="center"><font color="white">TELEFONO</font></div></th>
			<th><div align="center"><font color="white">FORMA DE PAGO</font></div></th>
			</thead>
          </tr>
            
        
          </tr>
     	      <tr id="clonable" style="display:none"> 
            <td nowrap="nowrap"><span><input type="text" name="nombre[]" id="nombre" size="15" ></td>
            <td nowrap="nowrap"><span><input type="text" name="apellido[]" size="15" id="apellido"  /></td>
            <td><span><input type="text" name="cedula[]" id="cedula" size=10 maxlength="10" onkeypress="validarSiNumero(this.value);"/></td>
            <td><span><input type="text" name="fechan[]" id="fechan" size=13 placeholder="yyyy-mm-dd"  /></td>
            <td><span><input type="email" name="correo[]" id="correo" size=18  /></td>
             <td><span><input type="text" name="direccion[]" id="direccion" size=18  /></td>
            <td><span><input type="text" name="telf[]" id="telf" size="10" maxlength=10  onkeypress="validarSiNumero(this.value);" /></td>
            <td><select name="fpago[]"  >
<option value="">Seleccione</option>
<?php
$combo=$evento->combofpago($dblink);
foreach ($combo as $fila)
echo "<option value=".$fila['serial_fpag'].">".$fila['descripcion_fpag']."</option>";
?>

</select></td>
                        
            <td><a href="#" onClick="borraFila(this.parentNode.parentNode)"><img src="images/no.gif" alt="elimina" title="elimina la fila"/></a></td> 
			
          </tr>

 	      <tr id="tabla_1_fila_1" >
      <td nowrap="nowrap"><span><input type="text" name="nombre[]" size="15" required ></td>
            <td nowrap="nowrap"><span><input type="text" name="apellido[]" size="15" id="apellido" required /></td>
            <td><span><input type="text" name="cedula[]" id="cedula" maxlength="10" size=10 onkeypress="validarSiNumero(this.value);" required /></td>
            <td><span><input type="text" name="fechan[]" id="fechan" size=13 placeholder="yyyy-mm-dd"  required/></td>
            <td><span><input type="email" name="correo[]" id="correo" size=18 required /></td>
             <td><span><input type="text" name="direccion[]" id="direccion" size=18 required /></td>
            <td><span><input type="text" name="telf[]" id="telf" size="10" maxlength=10 onkeypress="validarSiNumero(this.value);" required /></td>
           
            <td><select name="fpago[]" required >
<option value="">Seleccione</option>
<?php
$combo=$evento->combofpago($dblink);
foreach ($combo as $fila)
echo "<option value=".$fila['serial_fpag'].">".$fila['descripcion_fpag']."</option>";
?>

</select></td>
            <td><div align="right"><a href="javascript:agregaFila('campos');"><img src="images/info-add-page.png" alt="agrega" title="agrega una fila" /></a></div></td>
            <td></td>
          </tr> 
          </table>

        
			
		</td>
		
			   <p>
			     <input type="hidden" name="MM_insert" value="form2" />
			     <input type="hidden" id="serial_eve" name="serial_eve" value="<?php echo $nombreeve[0]['serial_eve']?>" />
			
	       </p>
			   <p>&nbsp;    </p>
			   <p align="center">&nbsp;</p>
	           <p align="right">           </p>
	           </table>
	           
	           <center>
				<div><input type="submit" name="save" value="Guardar"></div>   
				   </center>
		
</fieldset>	
</center>
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

