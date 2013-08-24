$(document).ready(function(){
	//$("#txt1").change(function(){
		//alert($("txt1").val());
		//if ($("#txt1").val()=="activa"){
			//$("#txt1").attr("disabled","disabled");
			
		//}
		//});
		//bloquear cuando se hace click
		//$('.tarea').click(function(){
			//var id = $(this).attr('id');
		//	console.log($('#'+id+' #txt1'));
			//$('#'+id+' #txt1').attr('disabled', 'disabled');
		//});
		
		//sumar 1
		//$('.tarea').click(function(){
			//var id = $(this).attr('id');
		//	$('#'+id+' .lis_codigo').html(parseInt($('#'+id+' .lis_codigo').html()) + 1);
		//});
		
		//mostrar los datos
		//console.log($('#rounded-corner tr'));
		//recorre
		$('#rounded-corner tr').each(function(){
			
			
			
				var id = $(this).attr('id');
				console.log(id)
				
				if ($("#txt1").val()=="activa"){
					
							//$('#'+id+' #txt1').attr('disabled', 'disabled');
							$("#txt1").attr("disabled","disabled");
					
				}
			});
		

});