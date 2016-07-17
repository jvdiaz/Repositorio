<?php
  @session_start(); 
   // include("../persistencia/adodb/adodb.inc.php");
     include ("../dominio/Clase_MenuAcad.php");

$menu_alumnoacad= new menu_alumnoacad();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Evento</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" href="../media/themes/custom-theme/jquery-ui-1.8.22.custom.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/demo.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" type="text/css" href="css/layout.css" media="screen"/>
<link rel="stylesheet" type="text/css" media="screen" href="media/css/jquery.validate.password.css" />
<script src="media/js/jquery.js" type="text/javascript"></script>
<script src="include/ui/jquery.ui.core.js"></script>
<script src="include/ui/jquery.ui.widget.js"></script>
<script src="include/ui/jquery.ui.datepicker.js"></script>
<script src="include/ui/i18n/jquery.ui.datepicker-es.js"></script>
<script src="include/jquery.maskedinput.js" type="text/javascript">
</script><script src="include/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript" src="../include/jquery.validate.password.js"></script>
<script type="text/javascript" src="../include/md5.js"></script>
<script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="media/js/TableTools.js" type="text/javascript"></script>
<script src="media/js/ZeroClipboard.js" type="text/javascript"></script>
<script src="js/libs/jquery-1.7.1.min.js"></script>


    </head>
<body>


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
			<!--INI CONTENIDO-->
 
            <!--FIN CONTENIDO-->

		</div>
		<?php $menu_alumnoacad->menu() ?>
    </div>

		<div class="clearer">&nbsp;</div>
         

			   <table width="1000px" height="440px">
					<tr><td></td></tr>
	</table>

	<div class="footer">

		<span class="left">
	
		</span>

		<span class="right">Desarrollo Jeaneth Diaz</span>

		<div class="clearer"></div>

	</div>
    </div>



</body>

</html>
