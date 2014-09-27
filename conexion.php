<?php

$connect = new conexion($conf['server'],$conf['user'],$conf['pass'],$conf['bd']);

class conexion{

	public $enlace;

	function __construct($server,$user,$pass,$bd){

		$this->enlace = mysql_connect($server,$user,$pass) or die("error de conexión al servidor de la BD");;
		mysql_select_db($bd);

	}

	function __destruct(){
		mysql_close($this->enlace);
	}

}

?>
