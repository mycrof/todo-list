<?php

include_once("conexion.class.php");

class tareas{

	var $con;
	function tareas(){
	
		$this->con=new conectar;
	}

	function mostrar_tareas(){
	
		if($this->con->abrir()==true)
		
			return mysql_query("select tareas.tar_codigo,tareas.tar_nombre,tareas.tar_gru_codigo,tareas.tar_tip_codigo,tareas.tar_lis_codigo,tareas.tar_est_codigo from tareas");
				
			$this->con->cerrar();
	}
	
	function agregar_tareas($datos){
		
	
		if($this->con->abrir()==true)
	
			return mysql_query("insert into tareas(tar_codigo,tar_nombre,tar_gru_codigo,tar_tip_codigo,tar_lis_codigo,tar_est_codigo)values('".$datos[0]."','".$datos[1]."','".$datos[2]."','".$datos[3]."','".$datos[4]."','".$datos[5]."')");
		
		
			$this->con->cerrar();
	}
	
	
	}
	function buscar_tareas($id){
			if($this->con->abrir()==true)
		return mysql_query("SELECT * from tareas where tareas.tar_codigo='".id."'");
		
		
			$this->con->cerrar();
	}
	
	function modificar($campos,$id){
	if ($this->con->abrir()==true){
		return mysql_query("UPDATE tareas SET tar_codigo='".$campos[0]."',tar_nombre='".$campos[1]. "',tar_gru_codigo='".$campos[2]."' ,tar_tip_codigo='".$campos[3]. "',tar_lis_codigo='".$campos[4]. "',tar_est_codigo='".$campos[5]. "' WHERE tar_codigo=".$id);
	}

	}
	
	function eliminar($id){
	if ($this->con->abrir()==true){
		return mysql_query("DELETE * FROM tareas WHERE tar_codigo=".$cod);
	}
}
?>
