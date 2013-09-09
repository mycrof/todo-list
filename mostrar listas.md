function consultaListas($linkDB){
	$estadoTipo = array("Activa" => "btn-success",
						"Inactiva" => "btn-info",
						"Finalizada" => "btn-inverse");

	$salida = ''; //variable que contendra el resultado de la consulta y que sera devuelta al index

	$consulta = $linkDB -> query("SELECT lis_codigo, lis_nombre FROM listas WHERE  lis_dis_codigo=1 ORDER BY lis_codigo ASC");

// VERIFICA QUE LA CONSULTA DEVUELVA FILAS
	if($consulta -> num_rows != 0){  //pregunta si hay registros en la base de datos
		
		//convierte la informacion resultante de la consulta
		while($listadoOK = $consulta -> fetch_assoc())
			//si encuentra informacion la prepara para mostrarla
		{
			$salida .= '
				<tr>
								<td>'.listacompleta($listadoOK['lis_codigo']).'</td>
								<td ><a class="btn btn-large btn-block btn-primary" href="listado.php?lis_codigo='.$listadoOK['lis_codigo'].'">'.$listadoOK['lis_nombre'].'</a></td>
								<td class="centerTXT"><a class="btn btn-primary btn-success xc" href="'.$listadoOK['lis_codigo'].'">Editar</a></td>
								<td class="centerTXT"><a class="btn btn-primary btn-danger xc" data-accion="eliminar" href="'.$listadoOK['lis_codigo'].'">Eliminar</a></td>
							</tr> 
			';
		}

	}
	//si no encuentra registros despliega un aviso
	else{
		$salida = '
			<tr id="sinDatos">
				<td colspan="5" class="centerTXT">NO HAY REGISTROS EN LA BASE DE DATOS</td>
	   		</tr>
		';
	}

