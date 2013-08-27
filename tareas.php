	<?php
	require("clases/tareas.class.php");
	$objtareas=new tareas;
	$consulta=$objtareas->mostrar_tareas();
	
	if(isset($_POST['buscar'])){
		
		
	$v1=$_POST['txt1'];
	
	
	

}else{
?><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Tareas</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script>
function bloqueartext(){
if(form.txt2.value=="activa"){
form.txt2.disabled = "true";
alert("escribe algo");
}
</script>
</head>
<body">
  
	
<form name="form">
  
    	  <p><center><b>
    	  <h2>Tareas</h2>
    	  </b></center></p>
    	  <table id="rounded-corner" align="center"border=1>
	<tr>
		<th >9Tarea</th>
		<th>Grupo</th>
		<th>Tipo</th>
		<th>Listas</th>
		<th>Estado</th>
		<th>Ingresar</th>
		<th scope="col" class="rounded-q4">Eliminar</th>
	</tr>
	<?php
		if($consulta){
			while($fila=mysql_fetch_array($consulta)){
	?>
	<tr id="fila1-<?php echo $fila['tar_codigo'] ?>">
		<td><?php echo $fila['tar_nombre'];?></td>
		<td><?php echo $fila['tar_gru_codigo'];?></td>
		<td><?php echo $fila['tar_tip_codigo'];?></td>
		<td><?php echo $fila['tar_lis_codigo'];?></td>
		<td><input type="text" id="txt1" value="<?php echo $fila['est_nombre'];?>"></td>
		<td><a href="ingresar.php?id=<?php echo $fila['asi_cod']?>"><img src="imagenes/categories.png" alt="" title="" border="0" /></a></td>

	</tr>
	
<?php
}	}
?>
</table>
    	  
        <div id="footer_box1">
            <p><a href="#">Ingresar tarea</a> </p>
       </form>
</body>
<?php
}
?>