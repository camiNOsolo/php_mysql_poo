<?php
class cliente{

	public $nombre;
	public $password;
	public $descuento;
	public $fechaRegistro;
	public $sexo;
	

	public function agregar(){

		$query = "INSERT INTO cliente VALUES('null','{$this->nombre}','{$this->password}',{$this->descuento},
												  '{$this->fechaRegistro}','{$this->sexo}')";
		mysql_query($query);
		//echo $query;
		//echo mysql_error();
		//exit();

	}

	public function mostrar(){
		$query = "SELECT * FROM cliente";
		$rs = mysql_query($query);
		$array = array();
		while($fila = mysql_fetch_assoc($rs)){
			$array[] = $fila;
		}

		return $array;
	}
}
?>
