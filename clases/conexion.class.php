<?php
//crear una clase que permita conectar con la bd
class conectar{
//Declarar variables globales
	var $servidor;
	var $usuario;
	var $password;
	var $basededatos;
	//Método para inicializar las variables
	function conectar(){
		//instanciar los valores
		$this->servidor="127.0.0.1";
		$this->usuario="root";
		$this->password="kanthixxx";
		$this->basededatos="todo2";
	} 
	//Método para abrir la conexión al servidor y a la bd
	function abrir(){
		if(!($con=@mysql_connect($this->servidor, $this->usuario,
		$this->password))){
			echo"<h1>Error al conectar con el Servidor</h1>";
			exit();
		}
		if(!mysql_select_db($this->basededatos)){
			echo"<h1>Error al abrir la BAse de Datos</h1>";
			exit();
		}
		return true;	
	}
	//Método para cerrar la conexión
	function cerrar(){
		mysql_close();
	}
}

?>
