$(document).ready(function(){

    $('.result1').html(printT_1());
	$('.result2').html(printT_2());
	$('.result3').html(printT_3());
    $('.result4').html(printT_4());
	$('.result5').html(printT_5());
	$('.result6').html(printT_6());

});

printT_1 = function(){
return "1X1=1 - 1X2=2 - 1X3=3 - 1X4=4 - 1X5=5 - 1X6=6 - 1X7=7 - 1x8=8 - 1x9=9 - 1x10=10";
}
printT_2 = function(){
    return " 2 x 1 = 2 2 x 2 = 4 2 x 3 = 6 2 x 4 = 8 2 x 5 = 10 2 x 6 = 12 2 x 7 = 14 2 x 8 = 16 2 x 9 = 18 2 x 10 = 20 !!";
}
function printT_3(){
    return " 3X1=3 - 3X2=6 - 3X3=9 - 3X4=12 - 3X5=15 - 3X6=18 - 3X7=21 - 3x8=24 - 3x9=27 - 3x10=30";
}
function printT_4(){
    return " 4X1=4 - 4X2=8 - 4X3=12 - 4X4=16 - 4X5=20 - 4X6=24 - 4X7=28 - 4x8=32 - 4x9=36 - 4x10=40";
}
function printT_5(){
    return "5 X 1 =5 5 X 2 =10 5 X 3 =15 5 X 4 = 20 5 X 5 = 25 5 X 6 =36 5 X 7 =35 5 X 8 =40 5 X 9 =45 5 X 10 =50";
}
function printT_6(){
    return "6 X 1 =6 6 X 2 =12 6 X 3 =18 6 X 4 = 24 6 X 5 = 30 6 X 6 =36 6 X 7 =42 6 X 8 =48 6 X 9 =54 6 X 10 =60";
}