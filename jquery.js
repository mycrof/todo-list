$(document).ready(function(){
	
var form =  document.forms.formulario;
    $(form).find(':text').each(function(){
	
        if($(':text').val() == "activa") {
         $(':text[value=activa]').attr('disabled','disabled');
		$(":checkbox").attr("checked",true);
		}
    });

});


 $(document).ready(function(){

	 $(":text").change(function(){
    $(this).attr('disabled','disabled');
  });

 });




