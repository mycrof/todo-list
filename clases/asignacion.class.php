<?php
	//incluir la conexion al servidor y bd
	include_once("conexion.class.php");
class asignacion{
	var $con;
	function asignacion(){
		//crear el constructor de clase
		$this->con=new conectar;
	}
	
	
	
	function agregar_asignacion($datos){
		if($this->con->abrir()==true)
			return mysql_query("INSERT INTO asignacion_academica(per_rut, car_cod, ram_cod, jor_cod) VALUES('".$datos['0']."','".$datos['1']."','".$datos['2']."','".$datos['3']."')");
				
			$this->con->cerrar();
	}
	
	}
	?>