<?php
		if(isset($_POST['grabar'])){
	$v1=$_POST['text1'];
	$v2=$_POST['text2'];
	$v3=$_POST['text3'];
	$v4=$_POST['text4'];
	$v5=$_POST['text5'];

	
	require("clases/tareas.class.php");

$objtareas=new tareas;

	if($objtareas->agregar_tarea(array($v1,$v2,$v3,$v4,$v5))==true){
	
		echo'<h3>Datos almacenados correctamente</h3>';
		echo'<a href="tareas.php">Volver a tareas</a>';
	}else{
	//si no se puede almacenar los datos, sugerimos al usuario volver a intentarlo.
		echo'<h3>Error al grabar datos, intentalo nuevamente</h3>';
		echo'<a href="ingresar.php">Volver</a>';
	}
}else{
?>

<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form id="form" name="form" method="post" action="ingresar.php">
  <table width="200" border="1">
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="text1">
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="text" name="text2"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="text" name="text3"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="text" name="text4"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="text5">
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="grabar" value="grabar" id="grabar"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
<?php
}
?>
