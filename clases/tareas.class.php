

<?php
	//incluir la conexion al servidor y bd
	include_once("conexion.class.php");
class tareas{
	var $con;
	function tareas(){
		//crear el constructor de clase
		$this->con=new conectar;
	}
	//M�todo que permita mostrar los datos de la tabla perfil
	function mostrar_tareas(){
		if($this->con->abrir()==true){
			return mysql_query("SELECT t.tar_nombre, t.tar_gru_codigo, t.tar_tip_codigo, t.tar_lis_codigo, e.est_nombre from tareas t, estados e where t.tar_est_codigo = e.est_codigo");
		}
	}
	
	
		function agregar_tarea($datos){
		if($this->con->abrir()==true){
			return mysql_query("INSERT INTO tareas( tar_nombre, tar_gru_codigo, tar_tip_codigo, tar_lis_codigo, tar_est_codigo) VALUES('".$datos['0']."','".$datos['1']."','".$datos['2']."','".$datos['3']."','".$datos['4']."')");
				
			$this->con->cerrar();
	}

	}

	
	function modificar($datos,$id){
	if ($this->con->abrir()==true){
		//M�todo que permita modificar pero falta cambiar los nombres a las variables si es necesario 
		return mysql_query("UPDATE tareas SET tar_nombre='".$datos[0]."' WHERE tar_codigo=".$id);
	}
	}
	

}
	?>