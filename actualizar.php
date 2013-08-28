<head>
<?php
if(isset($_POST['Actualizar'])){
	require('clases/agregar_tareas.class.php');
	$objtareas=new tareas;
	$tar_codigo=$_POST['txt1'];
	$tar_nombre = $_POST['txt2'];
	$tar_gru_codigo = $_POST['txt3'];
	$tar_tip_codigo = $_POST['txt4'];
	$tar_lis_codigo= $_POST['txt5'];
	$tar_est_codigo = $_POST['txt6'];
	if ( $objtareas->modificar(array($tar_codigo,$tar_nombre,$tar_gru_codigo,$tar_tip_codigo,$tar_lis_codigo,$tar_est_codigo),$tar_codigo)== true){
		echo 'Datos actualizados ';
	}else{
		echo 'Se produjo un error. Intente nuevamente';
	} 
}
?>
<style type="text/css">
<!--
.Estilo4 {font-size: 36px}
-->
</style>
</head>

<body>
<p align="center" class="Estilo1 Estilo4">actualizar datos de tareas </p>
<form id="form2" name="form2" method="post" action=""../todo2/agregar_tareas.php"">
  <table width="257" border="0" align="center">
    <tr>
      <th width="251" height="44"><span class="Estilo1">Ingresa Tus Datos </span></th>
    </tr>
    <tr>
      <td><span class="Estilo6"><span class="Estilo5">
          <label><span class="Estilo6"><span class="Estilo5"> </label>
          <div align="center" class="Estilo6">Codigo:
            <input type="text" name="txt1" value="<?php echo $fila['tar_codigo']?>" disabled="true">
        </div></td>
    </tr>
    <tr>
      <td height="43"><p align="center" class="Estilo6">Nombre:
        <input name="txt2" type="text" id="txt2" value="<?php echo $fila['tar_nombre']?>">
      </p></td>
    </tr>
    <tr>
      <td height="39"><div align="center" class="Estilo6">Grupo:
        <input name="txt3" type="text" id="txt3" value="<?php echo $fila['tar_gru_codigo']?>" disabled="true">
      </div></td>
    </tr>
    <tr>
      <td height="39"><div align="center" class="Estilo6">tipo:
        <input name="txt4" type="text" id="txt4" value="<?php echo $fila['tar_tip_codigo']?>" disabled="true">
      </div></td>
    </tr>
    <tr>
      <td height="39"><div align="center" class="Estilo6">lista:
        <input name="txt5" type="text" id="txt5" value="<?php echo $fila['tar_lis_codigo']?>" disabled="true">
      </div></td>
    </tr>
    <tr>
      <td height="39"><div align="center" class="Estilo6">estado:
        <input name="txt6" type="text" id="txt6" value="<?php echo $fila['tar_est_codigo']?>" disabled="true">
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
<tr>
 <label></label>
      <div align="center">
        <input type="submit" name="Submit" value="actualizar"  onClick="valida" />
  </div>
</form>    
<p>&nbsp;</p>
</body>
</html>
