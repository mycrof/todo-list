	<?php
	require("clases/tareas.class.php");
	$objtareas=new tareas;
	$consulta=$objtareas->mostrar_tareas();
	if(isset($_POST['buscar'])){	
	$v1=$_POST['txt1'];

}else{
?>
	
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Tareas</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="jquery/cufon-yui.js"></script>
    <script type="text/javascript" src="jquery/Book_Antiqua_400.font.js"></script>
    <script type="text/javascript">
           </script>

</head>
<body>
  
  
    	  <p><center><b>
    	  <h2>Tareas</h2>
    	  </b></center></p>
    	  <table id="rounded-corner" align="center"border=1>
            <tr>
              <th >Tarea</th>
              <th>Grupo</th>
              <th>Tipo</th>
              <th>Listas</th>
              <th>Estado</th>
              <th>Ingresar</th>
              <th scope="col" class="rounded-q4">editar</th>
              <th scope="col" class="rounded-q4">Eliminar</th>
            </tr>
            <?php
		if($consulta){
			while($fila=mysql_fetch_array($consulta)){
	?>
            <tr id="fila1-<?php echo $fila['tar_codigo']?>">
              <td><?php echo $fila['tar_nombre'];?></td>
              <td><?php echo $fila['tar_gru_codigo'];?></td>
              <td><?php echo $fila['tar_tip_codigo'];?></td>
              <td><?php echo $fila['tar_lis_codigo'];?></td>
              <td><?php echo $fila['tar_est_codigo'];?></td>
              <td><a href="agregar_tareas.php?id=<?php echo $fila['tar_codigo']?>"><img src="imagenes/categories.png" alt="" title="" border="0" /></a>
			  <td><a href="actualizar.php?id=<?php echo $fila['tar_codigo']?>"><img src="imagenes/images.jpg" width="66" height="57" border="0"></a></td>
      <td><a href="agregar_tareas.php?eli=<?php echo $fila['id']?>"><img src="imagenes/descarga.jpg" width="63" height="58"></a></td>
            <?php
}	}
?>
          </table>
    	  <div id="footer_box1">
<p><a href="agregar_tareas.php">Ingresar tarea</a></p>
       
</body>
<?php
}
?>