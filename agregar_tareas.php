<?php
if(isset($_POST['grabar'])){
	
	$v1=$_POST['txt1'];
	$v2=$_POST['txt2'];
	$v3=$_POST['txt3'];
	$v4=$_POST['txt4'];
	$v5=$_POST['txt5'];
	$v6=$_POST['txt6'];

	require("clases/tareas.class.php");

	$objtareas=new tareas;
	if($objtareas->agregar_tareas(array($v1,$v2,$v3,$v4,$v5,$v6))==true){
		echo'<h3>Registro Efectuado correctamente</h3>';
		echo'<a href="tareas.php">Volver a inicio</a>';
	}else{

		echo'<h3>Error al Grabar datos, intentalo nuevamente</h3>';
		echo'<a href=tareas.php">Volver</a>';
	}
}

elseif(isset($_POST['Actualizar'])){
	require('clases/tareas.class.php');
	$objtareas=new tareas;
	$tar_codigo=$_POST['txt1'];
	$tar_nombre = $_POST['txt2'];
	$tar_gru_codigo = $_POST['txt3'];
	$tar_tip_codigo = $_POST['txt4'];
	$tar_lis_codigo= $_POST['txt5'];
	$tar_est_codigo = $_POST['txt6'];
	if ( $objtareas->modificar(array($tar_codigo,$tar_nombre,$tar_gru_codigo,$tar_tip_codigo,$tar_lis_codigo,$tar_est_codigo),$tar_codigo)== true){
		echo 'Datos Actualizados Correctamente';
	    echo '<br>';
		echo'<a href="tareas.php">Volver</a>';
	
	}else{
		echo 'Se produjo un error. Intente nuevamente';
		
	} 


}
//---------------------
elseif(isset($_GET['eli'])){
//Para Eliminar	
		require('clases/tareas.class.php');
			$tareas_id=$_GET['eli'];
			$objtareas=new tareas;
			if( $objtareas->eliminar($tareas_cod) == true)
			{
				echo "Registro eliminado correctamente";
				echo'<a href="tareas.php">Volver</a>';
			}
			else
				{
				echo "Ocurrio un error";
				echo $tareas_id;
				}
}

elseif(isset($_GET['id'])){
	
		require('clases/tareas.class.php');
		$objtareas=new tareas;
		$consulta = $objtareas->buscar_tareas($_GET['id']);
		if($consulta)$fila = mysql_fetch_array($consulta);
?>

<form method="post" action="agregar_tareas.php">
<table width="257" border="0" align="center">
  <tr>
    <th width="251" height="44"><span class="Estilo1">actualiza Tus Datos </span></th>
  </tr>
  <tr>
    <td><span class="Estilo6"><span class="Estilo5">
        <label><span class="Estilo6"><span class="Estilo5">
      </label>
      <div align="center" class="Estilo6">Codigo:
        <input type="text" name="txt1" value="<?php echo $fila['tar_codigo']?>">
      </div></td>
  </tr>
  <tr>
    <td height="43"><p align="center" class="Estilo6">Nombre:
      <input name="txt2" type="text" id="txt2" value="<?php echo $fila['tar_nombre']?>">
      </p>      </td>
  </tr>
  <tr>
    <td height="39"><div align="center" class="Estilo6">Grupo:
        <input name="txt3" type="text" id="txt3" value="<?php echo $fila['tar_gru_codigo']?>">
    </div></td>
  </tr>
  <tr>
    <td height="39"><div align="center" class="Estilo6">tipo:
        <input name="txt4" type="text" id="txt4" value="<?php echo $fila['tar_tip_codigo']?>">
    </div></td>
  </tr>
  <tr>
    <td height="39"><div align="center" class="Estilo6">lista:
        <input name="txt5" type="text" id="txt5" value="<?php echo $fila['tar_lis_codigo']?>">
    </div></td>
  </tr>
  <tr>
    <td height="39"><div align="center" class="Estilo6">estado:
        <input name="txt6" type="text" id="txt6" value="<?php echo $fila['tar_est_codigo']?>">
    </div></td>
  </tr>
  <tr>
    <td height="39"><div align="center">
      <input name="actualizar" type="submit" id="actualizar" onclick="validar" value="actualizar">
    </div></td>
  </tr>
</table>
</form>
<?php
    }
	else{
	?>

<form method="post" action="agregar_tareas.php">
<table width="257" border="0" align="center">
  <tr>
    <th width="251" height="44"><span class="Estilo1">Ingresa Tus Datos </span></th>
  </tr>
  <tr>
    <td><span class="Estilo6"><span class="Estilo5">
        <label><span class="Estilo6"><span class="Estilo5">
      </label>
      <div align="center" class="Estilo6">Codigo:
        <input type="text" name="txt1">
      </div></td>
  </tr>
  <tr>
    <td height="43"><p align="center" class="Estilo6">Nombre:
      <input name="txt2" type="text" id="txt2">
      </p>      </td>
  </tr>
  <tr>
    <td height="39"><div align="center" class="Estilo6">Grupo:
        <input name="txt3" type="text" id="txt3">
    </div></td>
  </tr>
  <tr>
    <td height="39"><div align="center" class="Estilo6">tipo:
        <input name="txt4" type="text" id="txt4">
    </div></td>
  </tr>
  <tr>
    <td height="39"><div align="center" class="Estilo6">lista:
        <input name="txt5" type="text" id="txt5">
    </div></td>
  </tr>
  <tr>
    <td height="39"><div align="center" class="Estilo6">estado:
        <input name="txt6" type="text" id="txt6">
    </div></td>
  </tr>
  <tr>
    <td height="39"><div align="center">
      <input type="submit" name="grabar" value="GRABAR" onClick="validar">
    </div></td>
  </tr>
</table>
</form>
</body>
<p align="center"><a href="tareas.php">volver a inicio</a></p>

<?php
}
?>

