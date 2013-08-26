<?php
	//incluir la conexion al servidor y bd
	include_once("conexion.class.php");
class persona{
	var $con;
	function persona(){
		//crear el constructor de clase
		$this->con=new conectar;
	}
	//Método que permita mostrar los datos de la tabla perfil
	function mostrar_perso(){
		if($this->con->abrir()==true){
			return mysql_query("SELECT p.per_rut, p.per_nombres, p.per_apellidos, p.per_email, p.per_telefono, c.com_nombre from personas p, comunas c where p.per_com_codigo=c.com_codigo");
		}
	}
	
		//Método para grabar los datos
	function grabar_datos($datos){
	
		if($this->con->abrir()==true){
		
			return mysql_query("INSERT INTO personas(per_rut, per_nombres, per_apellidos,per_email,per_telefono,per_com_codigo,per_login,per_pass) VALUES('".$datos[0]."','".$datos[1]."','".$datos[2]."','".$datos[3]."','".$datos[4]."','".$datos[5]."','".$datos[6]."','".$datos[7]."')");
		
		}
	}
	
	
	
	
	function entrar($dato){
		if($this->con->abrir()==true){
			$conc= mysql_query("SELECT p.per_nombres, p.per_apellidos, p.per_login, p.per_pass from personas p WHERE p.per_login='".$dato['0']."' and p.per_pass='".$dato['1']."'");
			$cont= mysql_num_rows($conc);
			if ($cont>0){
			SESSION_START();
			$_SESSION['login']=true;
					$_SESSION['nombre']=mysql_result($conc,0,"per_nombres");
			$_SESSION['apellido']=mysql_result($conc,0,"per_apellidos");
					//$_SESSION['nota1']=mysql_result($conc,0,"not_1");
					//$_SESSION['nota2']=mysql_result($conc,0,"not_2");
					//$_SESSION['nota3']=mysql_result($conc,0,"not_3");
					//$_SESSION['nota4']=mysql_result($conc,0,"not_4");
					//$_SESSION['nota5']=mysql_result($conc,0,"not_5");
					//$_SESSION['nota6']=mysql_result($conc,0,"ram_nom");
					
					//$_SESSION['nota4.1']=mysql_result($conc,4,"not_1");
					//$_SESSION['nota4.2']=mysql_result($conc,4,"not_2");
					//$_SESSION['nota4.3']=mysql_result($conc,4,"not_3");
					//$_SESSION['nota4.4']=mysql_result($conc,4,"not_4");
					//$_SESSION['nota4.5']=mysql_result($conc,4,"not_5");
					
			
			return true;
			
			
		}else{
		
		return false;
		}
	}
}

function mostrar_res($dato){
		if($this->con->abrir()==true){
			$conc= mysql_query("SELECT p.p_pre FROM preguntas p, respuesta r WHERE  r.per_rut='".$dato['0']."' and p.p_cod=r.p_cod");
			$cont= mysql_num_rows($conc);
			if ($cont>0){
			session_start();
			$_SESSION['login']=true;
			$_SESSION['nombre']=mysql_result($conc,0,"p_pre");
			
			
			return true;
			
			
		}else{
		
		return false;
		}
	}
}
function mostrar($dato){
		if($this->con->abrir()==true){
			$conc= mysql_query("SELECT p.per_pass FROM persona p, respuesta r WHERE  r.res_nom='".$dato['0']."' and p.per_rut=r.per_rut");
			$cont= mysql_num_rows($conc);
			if ($cont>0){
			session_start();
			$_SESSION['login']=true;
			$_SESSION['nombre']=mysql_result($conc,0,"per_pass");
			
			
			return true;
			
			
		}else{
		
		return false;
		}
	}
}

function grabar_datos2($datos){
		if($this->con->abrir()==true){
			return mysql_query("INSERT INTO persona(per_pass) VALUES('".$datos[0]."')");
		}
	}
	function mostrar_ate(){
		if($this->con->abrir()==true){
			 mysql_query("select ma.mas_nom, p.per_nom, m.mov_nom, c.clas_nom from persona p, motivos m, mascota ma, atenciones a, clasificacion c where ma.mas_cod=a.mas_cod and 
m.mov_cod=a.mov_cod and p.per_rut=a.per_rut and ma.clas_cod=c.clas_cod");
			
	}
}
	

	function entrar2($dato){
		if($this->con->abrir()==true){
			$conc= mysql_query("SELECT a.nombre, a.apellido, a.login, a.pass from administrador a WHERE a.login=='".$dato['0']."' and a.pass='".$dato['1']."'");
			$cont= mysql_num_rows($conc);
			if ($cont>0){
			SESSION_START();
			$_SESSION['login']=true;
				$_SESSION['nombre']=mysql_result($conc,0,"nombre");
					$_SESSION['apellido']=mysql_result($conc,0,"apellido");
			
			
			return true;
			
			
		}else{
		
		return false;
		}
	}
}

function entrar3($dato){
		if($this->con->abrir()==true){
			$conc= mysql_query("SELECT per_login, per_pass , per_nom, per_ape from personass where per_login='".$dato['0']."' and per_pass='".$dato['1']."' and per_cod=3");
			$cont= mysql_num_rows($conc);
			if ($cont>0){
			SESSION_START();
			$_SESSION['login']=true;
			$_SESSION['nombre']=mysql_result($conc,0,"per_nom");
					$_SESSION['apellido']=mysql_result($conc,0,"per_ape");
						
			
			
			return true;
			
			
		}else{
		
		return false;
		}
	}
}


function grabar_profe($datos){
	
		if($this->con->abrir()==true){
		
			return mysql_query("INSERT INTO profesores(pro_rut, pro_nom, pro_ape,ciu_cod,pro_login, pro_password) VALUES('".$datos[0]."','".$datos[1]."','".$datos[2]."','".$datos[3]."','".$datos[4]."','".$datos[5]."')");
		
		}
	}
	
	
		function entrar22($dato){
		if($this->con->abrir()==true){
			$conc= mysql_query("SELECT nombre, apellido, login, pass from administrador WHERE login='".$dato['0']."' and pass='".$dato['1']."'");
			$cont= mysql_num_rows($conc);
			if ($cont>0){
			SESSION_START();
			$_SESSION['login']=true;
					$_SESSION['nombre']=mysql_result($conc,0,"nombre");
			$_SESSION['apellido']=mysql_result($conc,0,"apellido");
					//$_SESSION['nota1']=mysql_result($conc,0,"not_1");
					//$_SESSION['nota2']=mysql_result($conc,0,"not_2");
					//$_SESSION['nota3']=mysql_result($conc,0,"not_3");
					//$_SESSION['nota4']=mysql_result($conc,0,"not_4");
					//$_SESSION['nota5']=mysql_result($conc,0,"not_5");
					//$_SESSION['nota6']=mysql_result($conc,0,"ram_nom");
					
					//$_SESSION['nota4.1']=mysql_result($conc,4,"not_1");
					//$_SESSION['nota4.2']=mysql_result($conc,4,"not_2");
					//$_SESSION['nota4.3']=mysql_result($conc,4,"not_3");
					//$_SESSION['nota4.4']=mysql_result($conc,4,"not_4");
					//$_SESSION['nota4.5']=mysql_result($conc,4,"not_5");
					
			
			return true;
			
			
		}else{
		
		return false;
		}
	}
}


	}
	
	


?>