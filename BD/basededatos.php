<?php
class BaseDatos{
	private $socket = "localhost";
	private $nombreBd = "prueba";
	private $user = "root";
	private $password = "";
	private $link;

	public function __construct(){
		$this->link = mysql_connect($this->socket,$this->user,$this->password);
		mysql_select_db($this->nombreBd,$this->link);		
	}

	// retorna datos de consulta sql
	public function query($sql){
		return mysql_query($sql,$this->link);
	}
	
	// retorna cantidad de registros de consulta sql
	public function num_rows($sql){
		$datos = $this->query($sql);
		return mysql_num_rows($datos);
	}
}
?>