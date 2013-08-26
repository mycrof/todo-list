

<?php
	//incluir la conexion al servidor y bd
	include_once("conexion.class.php");
class tareas{
	var $con;
	function tareas(){
		//crear el constructor de clase
		$this->con=new conectar;
	}
	//Método que permita mostrar los datos de la tabla perfil
	function mostrar_tareas(){
		if($this->con->abrir()==true){
			return mysql_query("SELECT t.tar_nombre, t.tar_gru_codigo, t.tar_tip_codigo, t.tar_lis_codigo, e.est_nombre from tareas t, estados e where t.tar_est_codigo = e.est_codigo");
		}
	}
	
	
	
	function buscar_wea($id){
			if($this->con->abrir()==true)
		return mysql_query("SELECT asi_cod FROM asignacion_academica  WHERE asi_cod='".$id."'");
		
	//Cerramos la conexión, para no saturar el servidor		
			$this->con->cerrar();
	}
	
	
	function agregar_tarea($datos){
		if($this->con->abrir()==true)
			return mysql_query("INSERT INTO tareas( tar_nombre, tar_gru_codigo, tar_tip_codigo, tar_lis_codigo, tar_est_codigo) VALUES('".$datos['0']."','".$datos['1']."','".$datos['2']."','".$datos['3']."','".$datos['4']."')");
				
			$this->con->cerrar();
	}
	
	function act_nnota($datos,$ctm){
		if($this->con->abrir()==true)
			return mysql_query("update notas set not_1='".$datos['0']."', not_2='".$datos['1']."', not_3='".$datos['2']."', not_4='".$datos['3']."', not_5='".$datos['4']."' where asi_cod=".$ctm);
				
			$this->con->cerrar();
	}
	
		function mostrar_notas2($nota){
		if($this->con->abrir()==true){
			return mysql_query("select p.per_rut, p.per_nom, a.asi_cod, c.car_nom, r.ram_nom, j.jor_nom, n.not_1,n.not_2,n.not_3,n.not_4,n.not_5
from personas p, carreras c, ramos r, jornadas j, asignacion_academica a, notas n, ramo_profe rp, profesores pr
where p.per_rut=a.per_rut and c.car_cod=a.car_cod and r.ram_cod=a.ram_cod and j.jor_cod=a.jor_cod and n.asi_cod=a.asi_cod and rp.pro_rut=pr.pro_rut and pr.pro_rut='".$nota[0]."' and rp.ram_cod=r.ram_cod;");

	if ($cont>0){
			SESSION_START();
			$_SESSION['login']=true;
						
			
			
			return true;
			
			
		}else{
		
		return false;
		}
		}
	}
	
	
	function mostrar_info(){
		if($this->con->abrir()==true){
			return mysql_query("select info_cod, info_ctm from informacion");
		}
	}
	
	
		function mostrar_sugerencias(){
		if($this->con->abrir()==true){
			return mysql_query("select sug_cod,per_rut, per_nom, sug_ctm from sugerencias");
		}
	}
	
	function mostrar_recla(){
		if($this->con->abrir()==true){
			return mysql_query("select anu_codigo, anu_per_rut, per_nom, anu_texto from anuncios");
		}
	}
	
	
	
	function agregar_sugerencia($datos){
		if($this->con->abrir()==true)
			return mysql_query("INSERT INTO sugerencias( per_rut, per_nom, sug_ctm) VALUES('".$datos['0']."','".$datos['1']."','".$datos['2']."')");
				
			$this->con->cerrar();
	}
	
	function agregar_reclamo($datos){
		if($this->con->abrir()==true)
			return mysql_query("INSERT INTO anuncios( anu_per_rut, per_nom, anu_texto) VALUES('".$datos['0']."','".$datos['1']."','".$datos['2']."')");
				
			$this->con->cerrar();
	}
	

function eliminar($id){
	if ($this->con->abrir()==true){
		return mysql_query("DELETE FROM sugerencias WHERE sug_cod=".$id);
	}
}

function eliminar_recla($id){
	if ($this->con->abrir()==true){
		return mysql_query("DELETE FROM anuncios WHERE anu_codigo=".$id);
	}
}



function eliminar_info($id){
	if ($this->con->abrir()==true){
		return mysql_query("DELETE FROM informacion WHERE info_cod=".$id);
	}
}

	
	function agregar_info($datos){
		if($this->con->abrir()==true)
			return mysql_query("INSERT INTO informacion(info_ctm) VALUES('".$datos['0']."')");
				
			$this->con->cerrar();
	}
	
	
	function mostrar_car(){
		if($this->con->abrir()==true){
			return mysql_query("select * from carreras");
		}
	}
	
	
		function mostrar_ram(){
		if($this->con->abrir()==true){
			return mysql_query("select * from ramos");
		}
	}
	
	
		function agregar_car($datos){
		if($this->con->abrir()==true)
			return mysql_query("INSERT INTO carreras(car_nom) VALUES('".$datos['0']."')");
				
			$this->con->cerrar();
	}



function eliminar_car($id){
	if ($this->con->abrir()==true){
		return mysql_query("DELETE FROM carreras WHERE car_cod=".$id);
	}
}

	function agregar_ram($datos){
		if($this->con->abrir()==true)
			return mysql_query("INSERT INTO ramos(ram_nom) VALUES('".$datos['0']."')");
				
			$this->con->cerrar();
	}



function eliminar_ram($id){
	if ($this->con->abrir()==true){
		return mysql_query("DELETE FROM ramos WHERE ram_cod=".$id);
	}
}
	
	
	function grabar_don($datos){
	
		if($this->con->abrir()==true){
		
			return mysql_query("INSERT INTO donaciones(don_monto, per_nom, per_ape, sex_cod, pais_cod, per_dir, com_codigo, reg_codigo, email, telefono, don_nacion, tar_cre, num_tar, mes_cod,año, rut, nom_ape_tit) VALUES('".$datos[0]."','".$datos[1]."','".$datos[2]."','".$datos[3]."','".$datos[4]."','".$datos[5]."','".$datos[6]."','".$datos[7]."','".$datos[8]."','".$datos[9]."','".$datos[10]."','".$datos[11]."','".$datos[12]."','".$datos[13]."','".$datos[14]."','".$datos[15]."','".$datos[16]."')");
		
		}
	}
	
	function eliminar_don($id){
	if ($this->con->abrir()==true){
		return mysql_query("DELETE FROM donaciones WHERE don_cod=".$id);
	}
}
	
	
		function mostrar_donaciones(){
		if($this->con->abrir()==true){
			return mysql_query("select d.don_cod, d.don_monto, d.per_nom, d.per_ape, s.nom, p.pais_nom, d.per_dir,
			c.com_nombre, r.reg_nombre, d.email, d.telefono, d.don_nacion, d.tar_cre, d.num_tar, m.mes_nom, d.año,
			d.rut, d.nom_ape_tit from donaciones d, sexo s, regiones r, comunas c, meses m, paises p where s.sex_cod=d.sex_cod
			 and p.pais_cod=d.pais_cod and c.com_codigo=d.com_codigo and r.reg_codigo=d.reg_codigo and m.mes_cod=d.mes_cod");
		}
	}

	
	
	}
	?>