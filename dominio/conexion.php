<?php
include '../persistencia/adodb/adodb.inc.php';
class Conexion {
    protected $dbcon;
    
	public function conectar() {
        $dbcon=ADONewConnection('mysql');
		$dbcon->connectSID = FALSE;
        $dbcon->debug=FALSE;
		$ip_servidor = "localhost";
		$user ="root";
		$password ="";
		$sid ="evento";
		$dbcon->Connect($ip_servidor, $user, $password, $sid);
        return  $dbcon;
    }
	
}
?>
