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

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="jquery.js">
</script>

</head>
<body >
  
	
<form name="formulario">
  
    	  <p><center><b>
    	  <h2>Tareas</h2>
    	  </b></center></p>
    	  <table id="rounded-corner" align="center"border=1>
	<tr>
		<th >Tarea</th>
		<th>Estado</th>
	</tr>
	<?php
		if($consulta){
			while($fila=mysql_fetch_array($consulta)){
	?>
	
	<tr id="fila1-<?php echo $fila['tar_codigo'] ?>">
	    <div id="1" name="" class="tarea">
		<td><div class="nombret"><?php echo $fila['tar_nombre'];?></div</td>
		<td><div class="estado"><input type="text" id="txt" name="txt" value="<?php echo $fila['est_nombre'];?>"></div></td>
        </div>
	</tr>
	
<?php
}	}
?>
</table>
    	  

        <div id="footer_box1">
            
       </form>
</body>
<?php
}
?>