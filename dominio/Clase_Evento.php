	<?php
	class evento{
	public function combofpago($dblink){
	$sqlcombo="select * from forma_pago where estado_fpag='ACTIVO'";
	$rescombo=$dblink->getAll($sqlcombo);
	return $rescombo;
	}


	public function getevento($dblink){
		
	$sqlevento="select serial_eve, nombre_eve from evento_soft where estado_eve='ACTIVO'";
	$resevento=$dblink->getAll($sqlevento);
	return $resevento;
		}
		
	public function lista_participantes($dblink){
	$sqllista="select par.serial_par,cedula_par,
	nombres_par,
	apellidos_par, 
	correo_par, 
	fechanac_par, 
	direccion_par,
	telefono,
	nombre_eve,
	descripcion_fpag
	from participante par, evento_soft eve, forma_pago fpg
	where par.serial_eve=eve.serial_eve
	and par.serial_fpag=fpg.serial_fpag";
	$reslista=$dblink->getAll($sqllista);
	return $reslista;
	}
	
	
	public function datosparticipante($serial_par,$dblink){
	$sqldatos="select cedula_par,
	nombres_par,
	apellidos_par, 
	correo_par, 
	fechanac_par, 
	direccion_par,
	telefono,
	nombre_eve,
	descripcion_fpag,
	fpg.serial_fpag,
	par.serial_par
	from participante par, evento_soft eve, forma_pago fpg
	where par.serial_eve=eve.serial_eve
	and par.serial_fpag=fpg.serial_fpag
	and par.serial_par=".$serial_par."";
		
	$resdatos=$dblink->getAll($sqldatos);
	return $resdatos;
		}
		
	public function eliminaparticipante($serial_par,$dblink){
	$sqldel="delete from participante where serial_par=".$serial_par."";
	
	return $sqldel;
		}
		
	public function actualizaparticipante($serial_par,$ci,$nombres,$apellidos,$correo,$fechanac,$direccion,$telf,$fpag,$dblink){
		$sqlact="update participante set cedula_par='".$ci."', nombres_par='".$nombres."', apellidos_par='".$apellidos."', correo_par='".$correo."',
		fechanac_par='".$fechanac."' , direccion_par='".$direccion."', telefono='".$telf."', serial_fpag='".$fpag."'  where serial_par=".$serial_par." ";
	return $sqlact;	
	}
	}
	?>
