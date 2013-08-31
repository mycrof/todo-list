<button id="irNuevaLista" class="btn btn-inverse"><i class="icon-plus"></i> Lista Nueva</button>

<div class="hide" id="agregarLista" Title="Agregar Lista">
	    	<form action="" method="post" id="formLista" name="formLista">
	    		<fieldset id="ocultos">
	    			<input type="hidden" id="accion" name="accion" class="{required:true}"/>
	    			<input type="hidden" id="lis_codigo" name="lis_codigo" class="{required:true}" value="0"/>
	    		</fieldset>
				<fieldset id="datosLista">
					<p>Nombre</p>
					<span></span>
					<input type="text" id="lis_nombre" name="lis_nombre" placeholder="Ingrese Nomnbre" class="{required:true,maxlength:120} span3"/>
				<fieldset id="btnAgregar" style="text-align:center;">
					<input type="submit" id="agregar" value="Agregar" />
				</fieldset>

				<fieldset id="ajaxLoader" class="ajaxLoader hide">
					<img src="...">
					<span>Espere un momento...</span>
				</fieldset>
			</form>
	    </div>