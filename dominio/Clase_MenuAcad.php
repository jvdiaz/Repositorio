<?php

class menu_alumnoacad
{
function menu ()
	{

 		   				 
		$div='<table width="228">';
 

	
$div.='
<tr>
<td width="199" align="left">
  <ul class="ca-menu">

                    <li><a href="quienes_somos.php">
                     <span><div class="hovergallery"><img src="images/quienes.jpg" class="ca-icon" /></div></span>
                            <div class="ca-content"><h2 class="ca-main">Quienes somos</h2>
                            
                                <!--><h3 class="ca-sub"></h3><!-->
                            </div>
                         </a></li>
                         </ul></td>
      </tr>
<tr>
<td width="199" align="left">
  <ul class="ca-menu">

                    <li><a href="formulario_participantes.php">
                     <span><div class="hovergallery"><img src="images/insc.jpg" class="ca-icon" /></div></span>
                            <div class="ca-content"><h2 class="ca-main">Inscripciones</h2>
                            
                                <!--><h3 class="ca-sub"></h3><!-->
                            </div>
                         </a></li>
                         </ul></td>
      </tr>
 <tr>
<td width="199" align="left">
  <ul class="ca-menu">

                    <li><a href="reporte_participantes.php">
                     <span><div class="hovergallery"><img src="images/reportei.jpg" class="ca-icon" /></div></span>
                            <div class="ca-content"><h2 class="ca-main">Participantes</h2>
                            
                                <!--><h3 class="ca-sub"></h3><!-->
                            </div>
                         </a></li>
                         </ul></td>
      </tr>
      
      
      </table>';
	echo $div;

	}

function mnu_barraderecha ()
	{
echo '   <script type="text/javascript" src="js/superfish.min.js"></script>
<script type="text/javascript">
   $(function() {
        $("#topnav").superfish();    
   });
    </script>
	 <style>
   
        ul#topnav {
            list-style: none;
            margin: 0px;
                     
        }
            ul#topnav > li{                                
              /*  background-color: #78b13e;           /* color inicial*/          
                float:!important;
                
            }
            ul#topnav > li > a{
                color:#white;/* color de texto inicial */
                display: block;
                text-decoration: none;
                font-size: 11px;
                padding: 2px 10px;
				
              
            }
            ul#topnav > li > a:hover, ul#topnav > li.sfHover a{
                background-color: #105f80;
				
            }
            ul#topnav > li > a.sf-with-ul::after {
                content: " \25BC";
                font-size: 9px;
            }
        ul.submenu {
            position: absolute;
            list-style: none;
            margin: 0px;
            padding: 0px;
            width: 110px;
            display: none;
			text-align:center;
        }
            ul.submenu > li > a{
                color:#white;/* color texto submenu */
                font-size: 11px;  
                text-decoration: none;  
                display: block;
                          
            }
            ul.submenu > li > a:hover{
                color:#white;
            }
    </style>'
;
		  
				 //$serial_alu = $resusuario[0]['serial_alu'];
				 
		$div='<table width="100%" align="right">';

	
$div.='<tr>
<td></td>
<td  align="right">
<ul id="topnav">
     <li></li>
    <li><a href="#">Jeaneth Diaz</a>
<ul class="submenu">
    <li><a href="login.php">Cerrar Sesi&oacute;n</a></li>

</ul>
   <li>
	</ul>  

';
       
  
			
			   
$div.='</td>
      </tr>
              
      </table>';
	echo $div;

	}
	
	function fecha_menu ()
	{
	$fecha = date("Y-m-d");

$fechats = strtotime($fecha); 
switch (date('w', $fechats)){
    case 0: echo "Domingo"; break;
    case 1: echo "Lunes"; break;
    case 2: echo "Martes"; break;
    case 3: echo "Miercoles"; break;
    case 4: echo "Jueves"; break;
    case 5: echo "Viernes"; break;
    case 6: echo "Sabado"; break;
	
	}
	echo " ".date("d")." de ". date("M")." de ". date("Y");
	}
	
	
}


?>
