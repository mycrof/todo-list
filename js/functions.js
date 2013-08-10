$(document).ready(function(){

    $('.result').html(printT_1());
    $('.result6').html(printT_6());

});

function printT_6(){
   
var num, i;

num = 6;
  for (i=1;i<=10;i++)
{

document.write(num," X ", i, " = ",num*i, "<br>");
}
 ;
}

printT_2 = function(){
    return "Hola Mundo 2!!";
}
