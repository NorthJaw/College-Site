$('#Button input').mouseenter(function(){
	
	$(this).css('opacity','1');
	
}).mouseleave(function(){
	
	$(this).css('opacity','0.5');
	
}).click(function(){
	
	$(this).hide();
	$('#Login').show();
	
});


$('.Text').focusin(function(){
	
	$(this).css('background-color','#F9E79F');
}).focusout(function(){
	
	$(this).css('background-color','#fff');
});