<head>
	<title>Agregar nueva lista/title>
	<link rel="stylesheet" type="text/css" href="../proyecto final/css/pagina.css" />
		<link rel="stylesheet" type="text/css" href="../proyecto final/css/agre_mascota.css" />


        <style type="text/css">
<!--
.Estilo6 {color: #FF0000}
body {
	background-color: #FFFFFF;
}
.Estilo7 {font-size: 36px}
-->
        </style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<?php
//El comando iseet detecta eventos sobre la página, para nuestro interes, necesitamos saber si se ha presionado el botón grabar
//Por esi preguntamos por el nombre del botón, y si esto ocurre se activa la rutina para guardar datos, si no es así, se muestra
//el body de la página. Esto lo hacemos para implementar tanto el ingreso de datos como el envio de datos dentro de la misma página. Ahorro.
if(isset($_POST['grabar'])){
	//Cada caja de texto tiene un nombre, gracias a esto vamos a identificar y almacenar el valor enviado por el formulario
	//gracias al método post.
	$v1=$_POST['txt1'];
	$v2=$_POST['txt2'];
	
		//Ahora tenemos que enviar estos datos al método agregar_ciudad(), pero no esta aquí... que hago.... Facil, conectemos esta página con la clase
	//Como?, lógico, con un constructor de clase, pero para hacer esto primero debemos incluir la clase a utilizar.
	require("clases/lista.class.php");
	//Ahora si podemos crear nuestro constructor
	$objlista=new lista;
	//simplemente nos queda enviar los datos al método para grabar los datos y verificar si se realiza correctamente
	//recuerda que los datos los vamos a enviar en forma de arreglo, es por esto que utilizamos la palabra array
	if($objlista->agregar_lista(array($v1,$v2))==true){
		//si los datos son almacenados correctamente, avisamos al usuario del exito de esto.
		echo'<h3>Datos almacenados correctamente</h3>';
		echo'<a href="lista.php">Volver</a>';
	}else{
	//si no se puede almacenar los datos, sugerimos al usuario volver a intentarlo.
		echo'<h3>Error al grabar datos, intentalo nuevamente</h3>';
		echo'<a href="agregar_lista.php">Volver</a>';
	}
}
//------------------
//Para Actualizar
elseif(isset($_POST['Actualizar'])){
	require('clases/lista.class.php');
	$objlista=new lista;
	$list_cod=$_POST['txt1'];
	$list_nom = $_POST['txt2'];
	if ( $objlista->modificar(array($lista_nom),$lista_cod) == true){
		echo 'Datos guardados';
	}else{
		echo 'Se produjo un error. Intente nuevamente';
		echo $lista_cod;
	} 


}
//---------------------
elseif(isset($_GET['eli'])){
//Para Eliminar	
		require('clases/lista.class.php');
			$lista_cod=$_GET['eli'];
			$objlista=new lista;
			if( $objlista->eliminar($lista_cod) == true)
			{
				echo "Registro eliminado correctamente";
				echo'<a href="lista.php">Volver</a>';
			}
			else
				{
				echo "Ocurrio un error";
				echo $lista_codigo;
				}
	

}
//---------------
elseif(isset($_GET['cod'])){
//Para buscar una ciudad		
		require('clases/lista.class.php');
		$objlista=new lista;
		$consulta = $objlista->buscar_lista($_GET['cod']);
		if($consulta)$fila = mysql_fetch_array($consulta);
?>

<form method="post" action="../algo/agregar_lista.php">
<input type="hidden" name="txtcod" value="<?php echo $fila['list_cod']?>" />
<br><label>Nombre</label>
<input type="text" name="txt1" value="<?php echo $fila['list_nom']?>">
<br>
<label>Cambiar Comuna</label>
<br>
<select name="txt2">
			<option value="0">lista</option>
			<?php
			//En esta opción tenemos que rescatar los datos de la tabla comuna, recordar que estos datos ya estan ingresados en la comuna
			//Y el usuario no puede o tiene que recordarlos, que hacemos, se los mostramos.
			//1. primero nos conectamos a la BD para abrir la tabla comuna
			//	require("clases/conexion.class.php");
			//creamos un constructor de clase
			$objlista=new conectar;
			//abrimos la conexion
			if($objlista->abrir()==true){
					//cargamos todos los datos de comunas
					$consulta1 = mysql_query("SELECT * FROM lista ORDER BY list_nom ASC");
						//si la consulta tiene datos
						if($consulta1){
							//con un ciclo cargamos todos los datos al campo desplegable
							while($fila1=mysql_fetch_array($consulta1)){
							//ES conveniete aclarar que el campo desplegable muestra el nombre de la comuna, pero al momento de seleccionar
							//el valor que tiene esta opción es el código de la comuna, mira la opción value y que guarda.
								printf("<option value='%d'>%s",
									$fila1['list_cod'], $fila1['list_cod']);
					}
				}
			}	
			?>
</select>
<br>	  
<input type="submit" name="Actualizar" value="Actualizar" />

		
</form>
<?php
	}



//---------------



else{
	
?>


<body>
<p><a href="lista.php">volver</a></p>
<p>&nbsp;</p>
<p><span class="Estilo7"> Agregar nueva lista</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="588" border="0" align="center">
  <tr>
    <td width="345" rowspan="4"><img src="imagenes/images.jpg" alt="h" width="261" height="193"></td>
    <th width="283">Ingresa Datos </th>
  </tr>
  <tr>
    <td height="56"><label><span class="Estilo6">codigo</span></label>
        <input type="text" name="txt12" /></td>
  </tr>
  <tr>
    <td height="56"><label><span class="Estilo6">nombre</span>
          <input name="txt22" type="text" id="txt2" />
    </label></td>
  </tr>
  <tr>
    <td height="36"><div align="center">
      <input type="submit" name="grabar" value="Grabar" onClick="valida()" />
    </div></td>
  </tr>
</table>
<div align="center"></div>
<p align="center">&nbsp;</p>

<!--creamos el formulario que nos permite capturar los datos para posteriormente grabarlos-->
</body>
<?php
//Cerramos nuestro php que controla la página.
}
?>